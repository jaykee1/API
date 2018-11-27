<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string sticker
 * @property int position
 *
 * @method true|Error send()
 * @method bool hasSticker()
 * @method bool hasPosition()
 * @method $this setSticker($string)
 * @method $this setPosition($integer)
 * @method $this remSticker()
 * @method $this remPosition()
 * @method string getSticker($default = null)
 * @method int getPosition($default = null)
 */
class setStickerPositionInSet extends Method
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