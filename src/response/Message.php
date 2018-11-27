<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.1.0
 *
 * @property int message_id
 * @property User from
 * @property int date
 * @property Chat chat
 * @property User forward_from
 * @property Chat forward_from_chat
 * @property int forward_from_message_id
 * @property string forward_signature
 * @property int forward_date
 * @property Message reply_to_message
 * @property int edit_date
 * @property string media_group_id
 * @property string author_signature
 * @property string text
 * @property MessageEntity[] entities
 * @property MessageEntity[] caption_entities
 * @property Audio audio
 * @property Document document
 * @property Game game
 * @property PhotoSize[] photo
 * @property Sticker sticker
 * @property Video video
 * @property Voice voice
 * @property VideoNote video_note
 * @property string caption
 * @property Contact contact
 * @property Location location
 * @property Venue venue
 * @property User[] new_chat_members
 * @property User left_chat_member
 * @property string new_chat_title
 * @property PhotoSize[] new_chat_photo
 * @property true delete_chat_photo
 * @property true group_chat_created
 * @property true supergroup_chat_created
 * @property true channel_chat_created
 * @property int migrate_to_chat_id
 * @property int migrate_from_chat_id
 * @property Message pinned_message
 * @property Invoice invoice
 * @property SuccessfulPayment successful_payment
 * @property string connected_website
 *
 * @method bool hasFrom()
 * @method bool hasForwardFrom()
 * @method bool hasForwardFromChat()
 * @method bool hasForwardFromMessageId()
 * @method bool hasForwardSignature()
 * @method bool hasForwardDate()
 * @method bool hasReplyToMessage()
 * @method bool hasEditDate()
 * @method bool hasMediaGroupId()
 * @method bool hasAuthorSignature()
 * @method bool hasText()
 * @method bool hasEntities()
 * @method bool hasCaptionEntities()
 * @method bool hasAudio()
 * @method bool hasDocument()
 * @method bool hasGame()
 * @method bool hasPhoto()
 * @method bool hasSticker()
 * @method bool hasVideo()
 * @method bool hasVoice()
 * @method bool hasVideoNote()
 * @method bool hasNewChatMembers()
 * @method bool hasCaption()
 * @method bool hasContact()
 * @method bool hasLocation()
 * @method bool hasVenue()
 * @method bool hasNewChatMember()
 * @method bool hasLeftChatMember()
 * @method bool hasNewChatTitle()
 * @method bool hasNewChatPhoto()
 * @method bool hasDeleteChatPhoto()
 * @method bool hasGroupChatCreated()
 * @method bool hasSupergroupChatCreated()
 * @method bool hasChannelChatCreated()
 * @method bool hasMigrateToChatId()
 * @method bool hasMigrateFromChatId()
 * @method bool hasPinnedMessage()
 * @method bool hasInvoice()
 * @method bool hasSuccessfulPayment()
 * @method bool hasConnectedWebsite()
 * @method int getMessageId()
 * @method User getFrom($default = null)
 * @method int getDate()
 * @method Chat getChat()
 * @method User getForwardFrom($default = null)
 * @method Chat getForwardFromChat($default = null)
 * @method int getForwardFromMessageId($default = null)
 * @method string getForwardSignature($default = null)
 * @method int getForwardDate($default = null)
 * @method Message getReplyToMessage($default = null)
 * @method int getEditDate($default = null)
 * @method string getMediaGroupId($default = null)
 * @method string getAuthorSignature($default = null)
 * @method string getText($default = null)
 * @method MessageEntity[] getEntities($default = null)
 * @method MessageEntity[] getCaptionEntities($default = null)
 * @method Audio getAudio($default = null)
 * @method Document getDocument($default = null)
 * @method Game getGame($default = null)
 * @method PhotoSize[] getPhoto($default = null)
 * @method Sticker getSticker($default = null)
 * @method Video getVideo($default = null)
 * @method Voice getVoice($default = null)
 * @method VideoNote getVideoNote($default = null)
 * @method User[] getNewChatMembers($default = null)
 * @method string getCaption($default = null)
 * @method Contact getContact($default = null)
 * @method Location getLocation($default = null)
 * @method Venue getVenue($default = null)
 * @method User getNewChatMember($default = null)
 * @method User getLeftChatMember($default = null)
 * @method string getNewChatTitle($default = null)
 * @method PhotoSize[] getNewChatPhoto($default = null)
 * @method true getDeleteChatPhoto($default = null)
 * @method true getGroupChatCreated($default = null)
 * @method true getSupergroupChatCreated($default = null)
 * @method true getChannelChatCreated($default = null)
 * @method int getMigrateToChatId($default = null)
 * @method int getMigrateFromChatId($default = null)
 * @method Message getPinnedMessage($default = null)
 * @method Invoice getInvoice($default = null)
 * @method SuccessfulPayment getSuccessfulPayment($default = null)
 * @method string getConnectedWebsite($default = null)
 */
class Message extends Response
{

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
            'from' => User::className(),
            'chat' => Chat::className(),
            'forward_from' => User::className(),
            'forward_from_chat' => Chat::className(),
            'reply_to_message' => Message::className(),
            'entities' => MessageEntity::className(),
            'audio' => Audio::className(),
            'document' => Document::className(),
            'game' => Game::className(),
            'photo' => PhotoSize::className(),
            'sticker' => Sticker::className(),
            'video' => Video::className(),
            'voice' => Voice::className(),
            'video_note' => VideoNote::className(),
            'contact' => Contact::className(),
            'location' => Location::className(),
            'venue' => Venue::className(),
            'new_chat_member' => User::className(),
            'left_chat_member' => User::className(),
            'new_chat_photo' => PhotoSize::className(),
            'pinned_message' => Message::className(),
            'invoice' => Invoice::className(),
            'successful_payment' => SuccessfulPayment::className()
        ];
    }
}