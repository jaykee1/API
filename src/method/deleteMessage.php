<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int message_id
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasMessageId()
 * @method $this setChatId($integer)
 * @method $this setMessageId($integer)
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method string|int getChatId($default = null)
 * @method int getMessageId($default = null)
 */
class deleteMessage extends Method
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