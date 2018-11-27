<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property string sticker_set_name
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasStickerSetName()
 * @method $this setChatId($string)
 * @method $this setStickerSetName($string)
 * @method $this remChatId()
 * @method $this remStickerSetName()
 * @method string|int getChatId($default = null)
 * @method string getStickerSetName($default = null)
 */
class setChatStickerSet extends Method
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