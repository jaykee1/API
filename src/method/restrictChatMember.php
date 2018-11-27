<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int user_id
 * @property int until_date
 * @property bool can_send_messages
 * @property bool can_send_media_messages
 * @property bool can_send_other_messages
 * @property bool can_add_web_page_previews
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasUserId()
 * @method bool hasUntilDate()
 * @method bool hasCanSendMessages()
 * @method bool hasCanSendMediaMessages()
 * @method bool hasCanSendOtherMessages()
 * @method bool hasCanAddWebPagePreviews()
 * @method $this setChatId($integer)
 * @method $this setUserId($integer)
 * @method $this setUntilDate($integer)
 * @method $this setCanSendMessages($boolean)
 * @method $this setCanSendMediaMessages($boolean)
 * @method $this setCanSendOtherMessages($boolean)
 * @method $this setCanAddWebPagePreviews($boolean)
 * @method $this remChatId()
 * @method $this remUserId()
 * @method $this remUntilDate()
 * @method $this remCanSendMessages()
 * @method $this remCanSendMediaMessages()
 * @method $this remCanSendOtherMessages()
 * @method $this remCanAddWebPagePreviews()
 * @method int getChatId($default = null)
 * @method int getUserId($default = null)
 * @method int getUntilDate($default = null)
 * @method bool getCanSendMessages($default = null)
 * @method bool getCanSendMediaMessages($default = null)
 * @method bool getCanSendOtherMessages($default = null)
 * @method bool getCanAddWebPagePreviews($default = null)
 */
class restrictChatMember extends Method
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