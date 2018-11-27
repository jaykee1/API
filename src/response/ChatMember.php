<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property User user
 * @property string status
 * @property int until_date
 * @property bool can_be_edited
 * @property bool can_change_info
 * @property bool can_post_messages
 * @property bool can_edit_messages
 * @property bool can_delete_messages
 * @property bool can_invite_users
 * @property bool can_restrict_members
 * @property bool can_pin_messages
 * @property bool can_promote_members
 * @property bool can_send_messages
 * @property bool can_send_media_messages
 * @property bool can_send_other_messages
 * @property bool can_add_web_page_previews
 *
 * @method bool hasUntilDate()
 * @method bool hasCanBeEdited()
 * @method bool hasCanChangeInfo()
 * @method bool hasCanPostMessages()
 * @method bool hasCanEditMessages()
 * @method bool hasCanDeleteMessages()
 * @method bool hasCanInviteUsers()
 * @method bool hasCanRestrictMembers()
 * @method bool hasCanPinMessages()
 * @method bool hasCanPromoteMembers()
 * @method bool hasCanSendMessages()
 * @method bool hasCanSendMediaMessages()
 * @method bool hasCanSendOtherMessages()
 * @method bool hasCanAddWebPagePreviews()
 * @method User getUser()
 * @method string getStatus()
 * @method int getUntilDate($default = null)
 * @method bool getCanBeEdited($default = null)
 * @method bool getCanChangeInfo($default = null)
 * @method bool getCanPostMessages($default = null)
 * @method bool getCanEditMessages($default = null)
 * @method bool getCanDeleteMessages($default = null)
 * @method bool getCanInviteUsers($default = null)
 * @method bool getCanRestrictMembers($default = null)
 * @method bool getCanPinMessages($default = null)
 * @method bool getCanPromoteMembers($default = null)
 * @method bool getCanSendMessages($default = null)
 * @method bool getCanSendMediaMessages($default = null)
 * @method bool getCanSendOtherMessages($default = null)
 * @method bool getCanAddWebPagePreviews($default = null)
 */
class ChatMember extends Response
{
    
    /**
     * @return bool
     */
    public function isCreator()
    {
        return $this->status == 'creator';
    }

    /**
     * @return bool
     */
    public function isAdministrator()
    {
        return $this->status == 'administrator';
    }

    /**
     * @return bool
     */
    public function isMember()
    {
        return $this->status == 'member';
    }

    /**
     * @return bool
     */
    public function isRestricted()
    {
        return $this->status == 'restricted';
    }

    /**
     * @return bool
     */
    public function isLeft()
    {
        return $this->status == 'left';
    }

    /**
     * @return bool
     */
    public function isKicked()
    {
        return $this->status == 'kicked';
    }

    /**
     * Response can have relations with other objects,
     * in this method we introduce all objects this object
     * have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [
            'user' => User::className()
        ];
    }
}