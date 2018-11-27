<?php namespace api\method;

use api\InputFile;
use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property InputFile photo
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasPhoto()
 * @method $this setChatId($integer)
 * @method $this setPhoto($file)
 * @method $this remChatId()
 * @method $this remPhoto()
 * @method string|int getChatId($default = null)
 * @method InputFile getPhoto($default = null)
 */
class setChatPhoto extends Method
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