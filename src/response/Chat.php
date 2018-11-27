<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int id
 * @property string type
 * @property string title
 * @property string username
 * @property string first_name
 * @property string last_name
 * @property bool all_members_are_administrators
 * @property ChatPhoto photo
 * @property string description
 * @property string invite_link
 * @property Message pinned_message
 * @property string sticker_set_name
 * @property bool can_set_sticker_set
 *
 * @method bool hasTitle()
 * @method bool hasUsername()
 * @method bool hasFirstName()
 * @method bool hasLastName()
 * @method bool hasAllMembersAreAdministrators()
 * @method bool hasPhoto()
 * @method bool hasDescription()
 * @method bool hasInviteLink()
 * @method bool hasPinnedMessage()
 * @method bool hasStickerSetName()
 * @method bool hasCanSetStickerSet()
 * @method int getId()
 * @method string getType()
 * @method string getTitle($default = null)
 * @method string getUsername($default = null)
 * @method string getFirstName($default = null)
 * @method string getLastName($default = null)
 * @method bool getAllMembersAreAdministrators($default = null)
 * @method ChatPhoto getPhoto($default = null)
 * @method string getDescription($default = null)
 * @method string getInviteLink($default = null)
 * @method Message getPinnedMessage($default = null)
 * @method string getStickerSetName($default = null)
 * @method bool getCanSetStickerSet($default = null)
 */
class Chat extends Response
{

    /**
     * @return bool
     */
    public function isPrivate()
    {
        return $this->getType() == 'private';
    }

    /**
     * @return bool
     */
    public function isGroup()
    {
        return $this->getType() == 'group';
    }

    /**
     * @return bool
     */
    public function isSuperGroup()
    {
        return $this->getType() == 'supergroup';
    }

    /**
     * @return bool
     */
    public function isChannel()
    {
        return $this->getType() == 'channel';
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
            'photo' => ChatPhoto::className(),
            'pinned_message' => Message::className()
        ];
    }
}
