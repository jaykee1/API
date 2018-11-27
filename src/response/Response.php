<?php namespace api\response;

use api\base\CustomObject;
use yii\helpers\ArrayHelper as AH;
use yii\base\UnknownClassException;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0
 */
abstract class Response extends CustomObject
{

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $relations = $this->relations();
        foreach ($relations as $param => $className) {
            if (
                $this->__isset($param) &&
                class_exists($className)
            ) {
                $value = $this->__get($param);
                $relation = $this->createResponse(
                    $className, $value
                );

                // set param by relation
                $this->__set($param, $relation);
            }
        }
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
     * Response can have relations with other objects,
     * in this method we introduce all objects this object
     * have relations.
     *
     * @return array of objects
     */
    abstract protected function relations();
}