<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property int user_id
 * @property bool can_change_info
 * @property bool can_post_messages
 * @property bool can_edit_messages
 * @property bool can_delete_messages
 * @property bool can_invite_users
 * @property bool can_restrict_members
 * @property bool can_pin_messages
 * @property bool can_promote_members
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasUserId()
 * @method bool hasCanChangeInfo()
 * @method bool hasCanPostMessages()
 * @method bool hasCanEditMessages()
 * @method bool hasCanDeleteMessages()
 * @method bool hasCanInviteUsers()
 * @method bool hasCanRestrictMembers()
 * @method bool hasCanPinMessages()
 * @method bool hasCanPromoteMembers()
 * @method $this setChatId($integer)
 * @method $this setUserId($integer)
 * @method $this setCanChangeInfo($boolean)
 * @method $this setCanPostMessages($boolean)
 * @method $this setCanEditMessages($boolean)
 * @method $this setCanDeleteMessages($boolean)
 * @method $this setCanInviteUsers($boolean)
 * @method $this setCanRestrictMembers($boolean)
 * @method $this setCanPinMessages($boolean)
 * @method $this setCanPromoteMembers($boolean)
 * @method $this remChatId()
 * @method $this remUserId()
 * @method $this remCanChangeInfo()
 * @method $this remCanPostMessages()
 * @method $this remCanEditMessages()
 * @method $this remCanDeleteMessages()
 * @method $this remCanInviteUsers()
 * @method $this remCanRestrictMembers()
 * @method $this remCanPinMessages()
 * @method $this remCanPromoteMembers()
 * @method int getChatId($default = null)
 * @method int getUserId($default = null)
 * @method bool getCanChangeInfo($default = null)
 * @method bool getCanPostMessages($default = null)
 * @method bool getCanEditMessages($default = null)
 * @method bool getCanDeleteMessages($default = null)
 * @method bool getCanInviteUsers($default = null)
 * @method bool getCanRestrictMembers($default = null)
 * @method bool getCanPinMessages($default = null)
 * @method bool getCanPromoteMembers($default = null)
 */
class promoteChatMember extends Method
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