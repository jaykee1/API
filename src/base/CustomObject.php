<?php namespace api\base;

use yii\base\BaseObject;
use yii\helpers\Json;
use yii\helpers\Inflector as STR;
use yii\helpers\ArrayHelper as AH;

/**
 * CustomObject is the base class that implements the *property* feature.
 * A property is defined by a getter method (e.g. `getLabel`),
 * and/or a setter method (e.g. `setLabel`).
 *
 * Property names are *case-insensitive*.
 * A property can be accessed like a member variable of an object.
 * Reading or writing a property will cause the invocation
 * of the corresponding getter or setter method.
 *
 * If a property has only a getter method and has no setter method,
 * it is considered as *read-only*. In this case, trying to modify
 * the property value will cause an exception.
 *
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 */
class CustomObject extends BaseObject
{

    /**
     * This is an array of class properties.
     * @var array
     */
    protected $params = [];

    /**
     * This method allows a class to decide how it will
     * react when it is treated like a string.
     *
     * @return string
     */
    public function __json()
    {
        $params = $this->__array();
        return Json::encode($params);
    }

    /**
     * This method allows a class to decide how it will
     * react when it is treated like a string.
     *
     * @return string
     */
    public function __toString()
    {
        $params = $this->__array();
        return Json::encode($params);
    }

    /**
     * This method allows a class to decide how it will react
     * when it is treated like a array.
     *
     * @return array
     */
    public function __array()
    {
        $params = $this->params;
        array_walk_recursive(
            $params, function (&$value) {
                if ($value instanceof CustomObject) {
                    $value = $value->__array();
                }
            }
        );

        return $params;
    }

    /**
     * Returns the value of an object property.
     * Do not call this method directly as it is a PHP magic method
     * that will be implicitly called when executing
     * `$value = $object->property;`.
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        $getter = 'get' . STR::id2camel($name, '_');
        if (method_exists($this, $getter)) {
            return $this->$getter();
        }

        $params = $this->params;
        return AH::getValue($params, $name);
    }

    /**
     * Sets value of an object property.
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when executing `$object->property = $value;`.
     *
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        $setter = 'set' . STR::id2camel($name, '_');
        if (method_exists($this, $setter)) {
            $this->$setter($value);
            return $value;
        }

        $this->params[$name] = $value;
        return $value;
    }

    /**
     * Checks if a property is set, i.e. defined and not null.
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when executing `isset($object->property)`.
     * Note that if the property is not defined, false will be returned.
     *
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        $getter = 'get' . STR::id2camel($name, '_');
        if (method_exists($this, $getter)) {
            return $this->$getter() !== null;
        }

        $params = $this->params;
        return AH::keyExists($name, $params);
    }

    /**
     * Sets an object property to null.
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when executing `unset($object->property)`.
     * Note that if the property is not defined, this method will do nothing.
     *
     * @param string $name
     * @return mixed|null
     */
    public function __unset($name)
    {
        $setter = 'set' . STR::id2camel($name, '_');
        if (method_exists($this, $setter)) {
            $this->$setter(null);
            return null;
        }

        $params = &$this->params;
        AH::remove($params, $name);
        return null;
    }

    /**
     * Calls the named method which is not a class method.
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when an unknown method is being invoked.
     *
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function __call($method, $params)
    {
        $actions = [
            'has' => '__isset', 'get' => '__get',
            'rem' => '__unset', 'set' => '__set'
        ];

        $params = (array) $params;
        $action = substr($method, 0, 3);
        if (!AH::keyExists($action, $actions)) {
            parent::__call($method, $params);
            return null;
        }

        $param_id = substr($method, 3);
        $name = STR::camel2id($param_id, '_');

        switch ($action) {
            case 'has': {
                $bool = $this->__isset($name);
                return $bool;
            }
            case 'rem': {
                $this->__unset($name);
                break;
            }
            case 'get': {
                if (!$this->__isset($name)) {
                    $default = AH::getValue($params, 0);
                    return $default;
                }

                return $this->__get($name);
            }
            case 'set': {
                if (AH::keyExists(0, $params)) {
                    $value = AH::getValue($params, 0);
                    $this->__set($name, $value);
                    break;
                }

                $title = 'Invalid Param: ';
                $className = $this->className();
                $message = $title . "$className->$name(null)";
                throw new \BadMethodCallException($message);
            }
        }

        return $this;
    }
}
