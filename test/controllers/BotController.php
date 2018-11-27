<?php namespace app\controllers;

use api\base\API;
use yii\helpers\Url;
use yii\web\Response;
use yii\web\Controller;
use api\response\Error;
use api\method\setWebhook;
use api\method\getWebhookInfo;

/**
 * Run HelloBot by setWebhook method
 *
 * Class BotController
 * @package app\controllers
 */
class BotController extends Controller
{

    /**
     * @var string
     */
    public $token = '<token>';

    /**
     * @param \yii\base\Action $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }

    /**
     * @param int $max
     * @return Error|array|true
     */
    public function actionSetWebhook($max = 40)
    {
        $url = Url::to(['bot/webhook', true]);
        $response = (new setWebhook($this->token))
            ->setMaxConnections($max)
            ->setUrl($url)
            ->send();

        if (!($response instanceof Error)) {
            $info = (new getWebhookInfo($this->token))
                ->send();

            return $info->__array();
        }

        return $response->__array();
    }

    /**
     * Create your bot actions in here.
     */
    public function actionWebhook()
    {
        $api = new API($this->token);
        // your actions
    }
}