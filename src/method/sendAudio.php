<?php namespace api\method;

use api\InputFile;
use api\response\Error;
use api\response\Message;
use api\keyboard\Keyboard;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property InputFile|string audio
 * @property string caption
 * @property int duration
 * @property string performer
 * @property string title
 * @property bool disable_notification
 * @property int reply_to_message_id
 * @property Keyboard reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasAudio()
 * @method bool hasCaption()
 * @method bool hasDuration()
 * @method bool hasPerformer()
 * @method bool hasTitle()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setAudio($audio)
 * @method $this setCaption($string)
 * @method $this setDuration($integer)
 * @method $this setPerformer($string)
 * @method $this setTitle($string)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remAudio()
 * @method $this remCaption()
 * @method $this remDuration()
 * @method $this remPerformer()
 * @method $this remTitle()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method string|InputFile getAudio($default = null)
 * @method string getCaption($default = null)
 * @method int getDuration($default = null)
 * @method string getPerformer($default = null)
 * @method string getTitle($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 * @method Keyboard getReplyMarkup($default = null)
 */
class sendAudio extends Method
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