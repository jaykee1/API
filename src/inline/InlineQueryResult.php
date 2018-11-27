<?php namespace api\inline;

use api\base\CustomObject;
use yii\helpers\Inflector as STR;
use yii\helpers\StringHelper as SH;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string id
 *
 * @method bool hasId()
 * @method $this setId($string)
 * @method $this remId()
 * @method string getId($default = null)
 */
abstract class InlineQueryResult extends CustomObject
{

    /**
     * @return string
     */
    public static function typeName()
    {
        return STR::camel2id(
            str_replace(
                ['InlineQueryResult', 'InlineQueryResultCached'],
                '', SH::basename(self::className())
            ),
            '_'
        );
    }

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $this->__set('type', $this->typeName());
    }
}
