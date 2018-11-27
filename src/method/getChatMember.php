<?php namespace api\method;

use api\response\Error;
use api\response\ChatMember;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int user_id
 *
 * @method ChatMember|Error send()
 * @method bool hasChatId()
 * @method bool hasUserId()
 * @method $this setChatId($integer)
 * @method $this setUserId($integer)
 * @method $this remChatId()
 * @method $this remUserId()
 * @method string|int getChatId($default = null)
 * @method int getUserId($default = null)
 */
class getChatMember extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return ChatMember::className();
    }
}