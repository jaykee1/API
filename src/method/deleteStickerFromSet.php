<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string sticker
 *
 * @method true|Error send()
 * @method bool hasSticker()
 * @method $this setSticker($string)
 * @method $this remSticker()
 * @method string getSticker($default = null)
 */
class deleteStickerFromSet extends Method
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