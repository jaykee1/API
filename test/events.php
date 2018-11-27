<?php

use api\base\API;
use api\InputFile;
use api\response\File;
use api\response\Error;
use yii\base\Exception;
use api\event\BeforeSend;
use api\response\Message;
use api\event\RequestFailed;
use api\event\RequestSucceed;
use yii\helpers\ArrayHelper as AH;

/**
 * Log errors
 */
API::on(API::EVENT_REQUEST_FAILED, function (RequestFailed $event) {
    $token = $event->token;
    $error = $event->error;
    if ($error instanceof Error) {
        $info = '[' . $token->id . '][' . $error->error_code . ']';
        $message = $info . ' ' . $error->description;

        Yii::warning($message, 'bot');
        if (YII_DEBUG) throw new Exception($message);
    }
});

/**
 * Check yii2 cache to exists file id or not.
 * This is help us to avoid upload files again.
 */
API::on(API::EVENT_BEFORE_SEND, function (BeforeSend $event) {
    $token = $event->token;
    $cache = Yii::$app->cache;
    $cId = 'BOT:' . $token->id . ':';

    $method = $event->method;
    $params = $method->__array();
    foreach ($params as $key => $value) {
        if ($value instanceof InputFile) {
            $path = $value->getFilename();
            $fId = $cId . md5($path);

            if ($data = $cache->get($fId)) {
                $mTime = 0;
                if (file_exists($path))
                    $mTime = filemtime($path);

                $oldMTime = $data['mTime'];
                if ($oldMTime < $mTime) {
                    $cache->delete($fId);
                    continue;
                }

                $method->set($key, $data['fileId']);
            }
        }
    }
});

/**
 * Save files id after upload them in telegram server.
 * This is help us to avoid upload files again.
 */
API::on(API::EVENT_REQUEST_SUCCEED, function (RequestSucceed $event) {
    $token = $event->token;
    $cache = Yii::$app->cache;
    $cId = 'BOT:' . $token->id . ':';

    $method = $event->method;
    $result = $event->result;

    if ($result instanceof Message) {
        $message = $result;
        $params = $method->__array();
        foreach ($params as $key => $value) {
            if (
                $value instanceof InputFile &&
                $message->__isset($key)
            ) {
                $path = $value->getFilename();
                $fId = $cId . md5($path);

                $files = $method->__get($key);
                $file = new File($files);
                if (AH::isIndexed($files, false))
                    $file = new File(end($files));

                if (!$cache->get($fId)) {
                    $data['mTime'] = filemtime($path);
                    $data['fileId'] = $file->getFileId();
                    $cache->set($fId, $data);
                }
            }
        }
    }
});