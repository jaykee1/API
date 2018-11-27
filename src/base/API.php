<?php namespace api\base;

use yii\base\BaseObject;
use api\method\getMe;
use api\method\getFile;
use api\method\getChat;
use api\method\sendGame;
use api\method\leaveChat;
use api\method\sendAudio;
use api\method\sendPhoto;
use api\method\sendVenue;
use api\method\sendVideo;
use api\method\sendVoice;
use api\method\setWebhook;
use api\method\getUpdates;
use api\method\sendContact;
use api\method\sendInvoice;
use api\method\sendMessage;
use api\method\sendSticker;
use api\method\sendDocument;
use api\method\setChatPhoto;
use api\method\setChatTitle;
use api\method\sendLocation;
use api\method\setGameScore;
use api\method\deleteMessage;
use api\method\deleteWebhook;
use api\method\sendVideoNote;
use api\method\getStickerSet;
use api\method\getChatMember;
use api\method\sendMediaGroup;
use api\method\forwardMessage;
use api\method\pinChatMessage;
use api\method\getWebhookInfo;
use api\method\kickChatMember;
use api\method\sendChatAction;
use api\method\addStickerToSet;
use api\method\deleteChatPhoto;
use api\method\editMessageText;
use api\method\unbanChatMember;
use api\method\unpinChatMessage;
use api\method\uploadStickerFile;
use api\method\promoteChatMember;
use api\method\answerInlineQuery;
use api\method\getGameHighScores;
use api\method\editMessageCaption;
use api\method\restrictChatMember;
use api\method\setChatDescription;
use api\method\createNewStickerSet;
use api\method\getChatMembersCount;
use api\method\answerCallbackQuery;
use api\method\answerShippingQuery;
use api\method\deleteStickerFromSet;
use api\method\exportChatInviteLink;
use api\method\getUserProfilePhotos;
use api\method\getChatAdministrators;
use api\method\editMessageReplyMarkup;
use api\method\answerPreCheckoutQuery;
use api\method\setStickerPositionInSet;
use api\method\editMessageLiveLocation;
use api\method\stopMessageLiveLocation;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.2.0
 *
 * @method getUpdates getUpdates($params = [])
 * @method setWebhook setWebhook($params = [])
 * @method deleteWebhook deleteWebhook()
 * @method getWebhookInfo getWebhookInfo()
 * @method getMe getMe()
 * @method sendMessage sendMessage($params = [])
 * @method forwardMessage forwardMessage($params = [])
 * @method sendPhoto sendPhoto($params = [])
 * @method sendAudio sendAudio($params = [])
 * @method sendDocument sendDocument($params = [])
 * @method sendVideo sendVideo($params = [])
 * @method sendVoice sendVoice($params = [])
 * @method sendVideoNote sendVideoNote($params = [])
 * @method sendMediaGroup sendMediaGroup($params = [])
 * @method sendLocation sendLocation($params = [])
 * @method editMessageLiveLocation editMessageLiveLocation($params = [])
 * @method stopMessageLiveLocation stopMessageLiveLocation($params = [])
 * @method sendVenue sendVenue($params = [])
 * @method sendContact sendContact($params = [])
 * @method sendChatAction sendChatAction($params = [])
 * @method getUserProfilePhotos getUserProfilePhotos($params = [])
 * @method getFile getFile($params = [])
 * @method kickChatMember kickChatMember($params = [])
 * @method unbanChatMember unbanChatMember($params = [])
 * @method restrictChatMember restrictChatMember($params = [])
 * @method promoteChatMember promoteChatMember($params = [])
 * @method exportChatInviteLink exportChatInviteLink($params = [])
 * @method setChatPhoto setChatPhoto($params = [])
 * @method deleteChatPhoto deleteChatPhoto($params = [])
 * @method setChatTitle setChatTitle($params = [])
 * @method setChatDescription setChatDescription($params = [])
 * @method pinChatMessage pinChatMessage($params = [])
 * @method unpinChatMessage unpinChatMessage($params = [])
 * @method leaveChat leaveChat($params = [])
 * @method getChat getChat($params = [])
 * @method getChatAdministrators getChatAdministrators($params = [])
 * @method getChatMembersCount getChatMembersCount($params = [])
 * @method getChatMember getChatMember($params = [])
 * @method answerCallbackQuery answerCallbackQuery($params = [])
 * @method editMessageText editMessageText($params = [])
 * @method editMessageCaption editMessageCaption($params = [])
 * @method editMessageReplyMarkup editMessageReplyMarkup($params = [])
 * @method deleteMessage deleteMessage($params = [])
 * @method sendSticker sendSticker($params = [])
 * @method getStickerSet getStickerSet($params = [])
 * @method uploadStickerFile uploadStickerFile($params = [])
 * @method createNewStickerSet createNewStickerSet($params = [])
 * @method addStickerToSet addStickerToSet($params = [])
 * @method setStickerPositionInSet setStickerPositionInSet($params = [])
 * @method deleteStickerFromSet deleteStickerFromSet($params = [])
 * @method answerInlineQuery answerInlineQuery($params = [])
 * @method sendInvoice sendInvoice($params = [])
 * @method answerShippingQuery answerShippingQuery($params = [])
 * @method answerPreCheckoutQuery answerPreCheckoutQuery($params = [])
 * @method sendGame sendGame($params = [])
 * @method setGameScore setGameScore($params = [])
 * @method getGameHighScores getGameHighScores($params = [])
 */
class API extends BaseObject
{

    use Events;

    /**
     * API Defines
     */
    const VERSION = '1.2.0';
    const API_VERSION = '3.6';
    const EVENT_AFTER_SEND = 'AfterSend';
    const EVENT_BEFORE_SEND = 'BeforeSend';
    const EVENT_REQUEST_FAILED = 'RequestFailed';
    const EVENT_REQUEST_SUCCEED = 'RequestSucceed';

    /**
     * @var Token
     */
    protected $token;
    
    /**
     * @var array
     */
    public $proxy = [];

    /**
     * API constructor.
     * @param string $token
     * @param array $proxy
     */
    public function __construct($token, $proxy = [])
    {
        $this->proxy = $proxy;
        $this->token = $token;
        if (!($token instanceof Token)) {
            $this->token = new Token($token);
        }

        parent::__construct();
    }

    /**
     * @param string $name
     * @param array $params
     * @return mixed
     */
    public function __call($name, $params)
    {
        $method = lcfirst($name);
        $className = 'api\\method\\' . $method;
        if (class_exists($className, true)) {
            if (!empty($this->proxy)) 
                $params['proxy'] = $this->proxy;
            
            return new $className($this->token, $params);
        }

        return parent::__call($name, $params);
    }
}
