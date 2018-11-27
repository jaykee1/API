<?php namespace api\media;

use api\InputFile;
use api\base\CustomObject;
use yii\helpers\Inflector as STR;
use yii\helpers\StringHelper as SH;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.1.0
 *
 * @property string|InputFile media
 * @property string caption
 * @property string parse_mode
 *
 * @method bool hasMedia()
 * @method bool hasCaption()
 * @method bool hasParseMode()
 * @method $this setMedia($file)
 * @method $this setCaption($string)
 * @method $this setParseMode($string)
 * @method $this remMedia()
 * @method $this remCaption()
 * @method $this remParseMode()
 * @method string|InputFile getMedia($default = null)
 * @method string getCaption($default = null)
 * @method string getParseMode($default = null)
 */
abstract class InputMedia extends CustomObject
{

    /**
     * @return string
     */
    public static function typeName()
    {
        return STR::camel2id(
            str_replace(
                'InputMedia', '',
                SH::basename(self::className())
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