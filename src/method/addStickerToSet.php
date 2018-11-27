<?php namespace api\method;

use api\InputFile;
use api\response\Error;
use api\response\MaskPosition;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int user_id
 * @property string name
 * @property InputFile|string png_sticker
 * @property string emojis
 * @property MaskPosition mask_position
 *
 * @method true|Error send()
 * @method bool hasUserId()
 * @method bool hasName()
 * @method bool hasPngSticker()
 * @method bool hasEmojis()
 * @method bool hasMaskPosition()
 * @method $this setUserId($integer)
 * @method $this setName($string)
 * @method $this setPngSticker($file)
 * @method $this setEmojis($string)
 * @method $this setMaskPosition($mask)
 * @method $this remUserId()
 * @method $this remName()
 * @method $this remPngSticker()
 * @method $this remEmojis()
 * @method $this remMaskPosition()
 * @method int getUserId($default = null)
 * @method string getName($default = null)
 * @method string getPngSticker($default = null)
 * @method string|InputFile getEmojis($default = null)
 * @method MaskPosition getMaskPosition($default = null)
 */
class addStickerToSet extends Method
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