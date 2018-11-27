<?php namespace api\method;

use api\response\Error;
use api\response\Message;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property string action
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasAction()
 * @method $this setChatId($integer)
 * @method $this setAction($string)
 * @method $this remChatId()
 * @method $this remAction()
 * @method string|int getChatId($default = null)
 * @method string getAction($default = null)
 */
class sendChatAction extends Method
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