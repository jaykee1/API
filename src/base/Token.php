<?php namespace api\base;

use yii\base\BaseObject;
use yii\base\InvalidParamException;

/**
 * Authorizing your bot:
 * Each bot is given a unique authentication token when
 * it is created.
 *
 * The token looks something like follow line:
 * `123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11`
 *
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int id
 * @property string key
 */
class Token extends BaseObject
{

    const PATTERN = '/\d+\:.*/';

    /**
     * @var int
     */
    private $_id;

    /**
     * @var string
     */
    private $_key;

    /**
     * ID is an Unique identifier for bots.
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Key is an auth string for bots.
     * @return string
     */
    public function getKey()
    {
        return $this->_key;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->_id . ':' . $this->_key;
    }

    /**
     * Token constructor.
     * @param string $token
     */
    public function __construct($token)
    {
        if (preg_match(self::PATTERN, $token)) {
            $parts = explode(':', $token);
            $this->_id = intval($parts[0]);
            $this->_key = $parts[1];

            parent::__construct();
            return;
        }

        $message = 'Invalid Token: ' . $token;
        throw new InvalidParamException($message);
    }
}