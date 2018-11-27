<?php namespace api\base;

use yii\helpers\Json;
use yii\helpers\ArrayHelper as AH;

/**
 * The Curl is library for transferring data using
 * various protocols.
 *
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 */
class Curl
{

    /**
     * @var int
     */
    public $code = null;

    /**
     * @var resource
     */
    private $_curl = null;

    /**
     * @var array
     */
    private $_options = [];

    /**
     * @var array
     */
    private $_default_options = [
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_CONNECTTIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_USERAGENT      => 'botstan-api',
    ];

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function setOption($key, $value)
    {
        $this->_options[$key] = $value;
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions($options)
    {
        foreach ($options as $key => $value) {
            $this->setOption($key, $value);
        }

        return $this;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function unsetOption($key)
    {
        AH::remove($this->_options, $key);
        return $this;
    }

    /**
     * @param array $keys
     * @return $this
     */
    public function unsetOptions($keys)
    {
        foreach ($keys as $key) {
            $this->unsetOption($key);
        }

        return $this;
    }

    /**
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function getOption($key, $default = null)
    {
        $options = $this->getOptions();
        $value = AH::getValue($options, $key, $default);
        return $value;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        $options = $this->_options;
        $default = $this->_default_options;
        return AH::merge($options, $default);
    }

    /**
     * @param string $url
     * @return mixed
     */
    public function head($url)
    {
        return $this->send('HEAD', $url);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function get($url, $raw = false)
    {
        return $this->send('GET', $url, $raw);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function post($url, $raw = false)
    {
        return $this->send('POST', $url, $raw);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function delete($url, $raw = false)
    {
        return $this->send('DELETE', $url, $raw);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function put($url, $raw = false)
    {
        return $this->send('PUT', $url, $raw);
    }

    /**
     * @param string $method
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function send($method, $url, $raw = false)
    {
        // Method of request
        $method = strtoupper($method);
        $this->setOption(CURLOPT_CUSTOMREQUEST, $method);

        // Head request
        if ($method === 'HEAD') {
            $this->setOption(CURLOPT_NOBODY, true);
            $this->unsetOption(CURLOPT_WRITEFUNCTION);
        }

        // Create curl
        $curl = $this->_curl = curl_init($url);
        curl_setopt_array($curl, $this->getOptions());

        // Sending request
        $response = curl_exec($curl);
        $this->error($response);

        // Debugging
        $code = CURLINFO_HTTP_CODE;
        $this->code = curl_getinfo($curl, $code);

        // Result
        if ($method === 'HEAD') return true;
        return $raw ? Json::decode($response) : $response;
    }

    /**
     * @param $response
     * @throws \Exception
     */
    private function error($response)
    {
        if ($response === false) {
            $error = curl_errno($this->_curl);
            if ($error == 7) $this->code = 'timeout';
            else {
                $title = 'Curl request failed: ';
                $message = $title . curl_error($this->_curl);
                throw new \Exception($message, $error);
            }
        }
    }
}