<?php namespace api\method;

use api\InputFile;
use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int user_id
 * @property InputFile png_sticker
 *
 * @method true|Error send()
 * @method bool hasUserId()
 * @method bool hasPngSticker()
 * @method $this setUserId($integer)
 * @method $this setPngSticker($file)
 * @method $this remUserId()
 * @method $this remPngSticker()
 * @method int getUserId($default = null)
 * @method InputFile getPngSticker($default = null)
 */
class uploadStickerFile extends Method
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