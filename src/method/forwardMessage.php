<?php namespace api\method;

use api\response\Error;
use api\response\Message;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int|string from_chat_id
 * @property bool disable_notification
 * @property int message_id
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasFromChatId()
 * @method bool hasDisableNotification()
 * @method bool hasMessageId()
 * @method $this setChatId($integer)
 * @method $this setFromChatId($integer)
 * @method $this setDisableNotification($boolean)
 * @method $this setMessageId($integer)
 * @method $this remChatId()
 * @method $this remFromChatId()
 * @method $this remDisableNotification()
 * @method $this remMessageId()
 * @method string|int getChatId($default = null)
 * @method string|int getFromChatId($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getMessageId($default = null)
 */
class forwardMessage extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return Message::className();
    }
}