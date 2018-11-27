<?php namespace api\base;

use api\InputFile;
use yii\helpers\Json;
use api\media\InputMedia;
use yii\helpers\ArrayHelper as AH;

/**
 * Making requests
 * All queries to the Telegram Bot API must be served over HTTPS
 * and need to be presented in this form:
 * `https://api.telegram.org/bot<token>/METHOD_NAM`
 *
 * We support only POST HTTP method.
 *
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.2.0
 */
class Request extends CustomObject
{

    /**
     * Request Configs
     */
    const SERVER = 'https://api.telegram.org';
    const API_PATTERN = '{server}/bot{token}/';

    /**
     * @var Token
     */
    protected $token;

    /**
     * Request constructor.
     * @param Token|string $token
     * @param array $params
     */
    public function __construct($token, $params = [])
    {
        $this->token = $token;
        if (!($token instanceof Token)) {
            $this->token = new Token($token);
        }

        parent::__construct($params);
    }

    /**
     * Checks if a param is set, i.e. defined and not null.
     * method that will be implicitly called when executing
     * `isset($object->property)`.
     *
     * Note that if the param is not defined,
     * false will be returned.
     *
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        return $this->__isset($name);
    }

    /**
     * Sets a request param to null.
     * method that will be implicitly called when executing
     * `unset($object->property)`.
     *
     * Note that if the param is not defined,
     * this method will do nothing.
     *
     * @param string $name
     * @return $this
     */
    public function delete($name)
    {
        $this->__unset($name);
        return $this;
    }

    /**
     * Sets value of a request param.
     * method that will be implicitly called when executing
     * `$object->property = $value;`.
     *
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function set($name, $value)
    {
        $this->__set($name, $value);
        return $this;
    }

    /**
     * Checks if a param is set, i.e. defined and not null.
     * method that will be implicitly called when executing
     * `isset($object->property)`.
     *
     * Note that if the param is not defined,
     * null will be returned.
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function get($name, $default = null)
    {
        if ($this->__isset($name)) {
            return $this->__get($name);
        }

        return $default;
    }

    /**
     * Checks if a file exists in the request that need
     * to uploading in telegram server.
     *
     * @return bool
     */
    public function hasFile()
    {
        $exist = false;
        $params = $this->__array();
        array_walk_recursive($params,
            function ($param) use (&$exist) {
                if ($param instanceof InputFile)
                    $exist = true;
            }
        );

        return $exist;
    }

    /**
     * This method will send a request object to telegram
     * server and get back the response.
     *
     * @return array
     */
    public function send()
    {
        $curl = new Curl();
        $curl->setOption(CURLOPT_TIMEOUT, 30);
        $curl->setOption(CURLOPT_HEADER, false);
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        $curl->setOption(
            CURLOPT_SSL_VERIFYPEER,
            !$this->hasProxy() && !empty(ini_get('curl.cainfo'))
        );
        if ($this->hasProxy()) {
            $proxy = $this->getProxy();
            $curl->setOption(CURLOPT_PROXY, AH::getValue($proxy, 'server', null));
            $curl->setOption(CURLOPT_PROXYPORT, AH::getValue($proxy, 'port', null));
            $curl->setOption(CURLOPT_PROXYUSERPWD, AH::getValue($proxy, 'auth', null));
            $curl->setOption(CURLOPT_PROXYTYPE, AH::getValue($proxy, 'type', CURLPROXY_HTTP));
        }
        if ($this->hasFile()) $curl->setOptions([
            CURLOPT_SAFE_UPLOAD => true,
            CURLOPT_HTTPHEADER  => [
                'Content-Type: multipart/form-data'
            ]
        ]);

        $params = $this->params;
        array_walk_recursive(
            $params, function (&$value) {
                if (
                    $value instanceof InputMedia &&
                    $value->media instanceof InputFile
                ) {
                    $media = $value->media;
                    $fileName = $media->getFilename();
                    $id = 'attached_' . md5($fileName);

                    $this->set($id, $media);
                    $value = $value->__array();
                    $value['media'] = 'attach://' . $id;
                }
                if ($value instanceof CustomObject) {
                    $value = $value->__array();
                }
            }
        );
        array_walk($params, function(&$value) {
            if (is_array($value)) {
                $value = Json::encode($value);
            }
        });

        unset($params['proxy']);
        $pairs['{token}'] = $this->token;
        $pairs['{server}'] = self::SERVER;
        $apiAddress = strtr(self::API_PATTERN, $pairs);
        $curl->setOption(CURLOPT_POSTFIELDS, $params);
        return $curl->post($apiAddress, true);
    }
}
