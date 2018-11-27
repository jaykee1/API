<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\keyboard\Keyboard;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property float latitude
 * @property float longitude
 * @property string title
 * @property string address
 * @property string foursquare_id
 * @property bool disable_notification
 * @property int reply_to_message_id
 * @property Keyboard reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasLatitude()
 * @method bool hasLongitude()
 * @method bool hasTitle()
 * @method bool hasAddress()
 * @method bool hasFoursquareId()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setLatitude($float)
 * @method $this setLongitude($float)
 * @method $this setTitle($string)
 * @method $this setAddress($string)
 * @method $this setFoursquareId($string)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remLatitude()
 * @method $this remLongitude()
 * @method $this remTitle()
 * @method $this remAddress()
 * @method $this remFoursquareId()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method float getLatitude($default = null)
 * @method float getLongitude($default = null)
 * @method string getTitle($default = null)
 * @method string getAddress($default = null)
 * @method string getFoursquareId($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 * @method Keyboard getReplyMarkup($default = null)
 */
class sendVenue extends Method
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