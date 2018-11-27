<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\media\InputMedia;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property InputMedia[] media
 * @property bool disable_notification
 * @property int reply_to_message_id
 *
 * @method Message[]|Error send()
 * @method bool hasChatId()
 * @method bool hasMedia()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method $this setChatId($integer)
 * @method $this setMedia($array)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this remChatId()
 * @method $this remMedia()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method string|int getChatId($default = null)
 * @method InputMedia[] getMedia($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 */
class sendMediaGroup extends Method
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