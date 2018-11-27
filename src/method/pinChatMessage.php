<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int message_id
 * @property bool disable_notification
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasMessageId()
 * @method bool hasDisableNotification()
 * @method $this setChatId($integer)
 * @method $this setMessageId($integer)
 * @method $this setDisableNotification($boolean)
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method $this remDisableNotification()
 * @method string|int getChatId($default = null)
 * @method int getMessageId($default = null)
 * @method bool getDisableNotification($default = null)
 */
class pinChatMessage extends Method
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