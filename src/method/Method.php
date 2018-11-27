<?php namespace api\method;

use api\base\API;
use api\base\Request;
use api\response\Error;
use api\event\AfterSend;
use api\event\BeforeSend;
use api\response\Response;
use api\event\RequestFailed;
use api\event\RequestSucceed;
use yii\helpers\ArrayHelper as AH;
use yii\base\UnknownClassException;
use yii\helpers\StringHelper as SH;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.2.0
 *
 * @method bool hasProxy()
 * @method $this setProxy($config)
 * @method $this remProxy()
 * @method string getProxy($default = null)
 * `$method->setProxy([
 *      'server' => 'proxy.server.com',
 *      'port' => 8080,
 *      'auth' => 'user:pass'
 * ])`
 */
abstract class Method extends Request
{

    /**
     * @return string
     */
    public static function methodName()
    {
        $className = self::className();
        return SH::basename($className);
    }

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $methodName = $this->methodName();
        $this->set('method', $methodName);
    }

    /**
     * @return Response
     */
    public function send()
    {
        API::trigger(API::EVENT_BEFORE_SEND,
            new BeforeSend([
                'method' => $this,
                'token' => $this->token
            ])
        );

        $response = parent::send();

        API::trigger(API::EVENT_AFTER_SEND,
            new AfterSend([
                'method' => $this,
                'response' => $response,
                'token' => $this->token
            ])
        );

        if (AH::keyExists('result', $response)) {
            $result = $response['result'];
            if (is_array($result)) {
                $className = $this->response();
                if (class_exists($className)) {
                    $value = $result;
                    $result = $this->createResponse(
                        $className, $value
                    );
                }
            }

            API::trigger(API::EVENT_REQUEST_SUCCEED,
                new RequestSucceed([
                    'method' => $this,
                    'result' => $result,
                    'token' => $this->token
                ])
            );

            return $result;
        }
        elseif (is_array($response)) {
            $error = new Error($response);
            API::trigger(API::EVENT_REQUEST_FAILED,
                new RequestFailed([
                    'method' => $this,
                    'error' => $error,
                    'token' => $this->token
                ])
            );

            return $error;
        }

        return false;
    }

    /**
     * @param string $className
     * @param array $params
     * @return array
     * @throws UnknownClassException
     */
    private function createResponse($className, $params)
    {
        if (AH::isAssociative($params)) {
            $class = new $className($params);
            if ($class instanceof Response) {
                return $class;
            }

            $message = $className . ' isn\'t a response object.';
            throw new UnknownClassException($message);
        }

        if (AH::isIndexed($params)) {
            $output = [];
            foreach ($params as $key => $value) {
                $output[$key] = $this->createResponse(
                    $className, $value
                );
            }

            return $output;
        }

        return $params;
    }

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    abstract protected function response();
}
