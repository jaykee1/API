<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int user_id
 * @property int until_date
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasUserId()
 * @method bool hasUntilDate()
 * @method $this setChatId($integer)
 * @method $this setUserId($integer)
 * @method $this setUntilDate($integer)
 * @method $this remChatId()
 * @method $this remUserId()
 * @method $this remUntilDate()
 * @method string|int getChatId($default = null)
 * @method int getUserId($default = null)
 * @method int getUntilDate($default = null)
 */
class kickChatMember extends Method
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