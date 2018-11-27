<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property string description
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasDescription()
 * @method $this setChatId($integer)
 * @method $this setDescription($string)
 * @method $this remChatId()
 * @method $this remDescription()
 * @method string|int getChatId($default = null)
 * @method string getDescription($default = null)
 */
class setChatDescription extends Method
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