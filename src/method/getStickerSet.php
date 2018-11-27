<?php namespace api\method;

use api\response\Error;
use api\response\StickerSet;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string name
 * 
 * @method StickerSet|Error send()
 * @method bool hasName()
 * @method $this setName($string)
 * @method $this remName()
 * @method string getName($default = null)
 */
class getStickerSet extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return true;
    }
}