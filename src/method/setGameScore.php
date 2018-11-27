<?php namespace api\method;

use api\response\Error;
use api\response\Message;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int user_id
 * @property int score
 * @property bool force
 * @property bool disable_edit_message
 * @property int chat_id
 * @property int message_id
 * @property string inline_message_id
 *
 * @method Message|Error send()
 * @method bool hasUserId($integer)
 * @method bool hasScore($integer)
 * @method bool hasForce($boolean)
 * @method bool hasDisableEditMessage($boolean)
 * @method bool hasChatId($integer)
 * @method bool hasMessageId($integer)
 * @method bool hasInlineMessageId($string)
 * @method $this setUserId()
 * @method $this setScore()
 * @method $this setForce()
 * @method $this setDisableEditMessage()
 * @method $this setChatId()
 * @method $this setMessageId()
 * @method $this setInlineMessageId()
 * @method $this remUserId()
 * @method $this remScore()
 * @method $this remForce()
 * @method $this remDisableEditMessage()
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method $this remInlineMessageId()
 * @method int getUserId($default = null)
 * @method int getScore($default = null)
 * @method bool getForce($default = null)
 * @method bool getDisableEditMessage($default = null)
 * @method int getChatId($default = null)
 * @method int getMessageId($default = null)
 * @method string getInlineMessageId($default = null)
 */
class setGameScore extends Method
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