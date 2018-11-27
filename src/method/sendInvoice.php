<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\response\LabeledPrice;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int chat_id
 * @property string title
 * @property string description
 * @property string payload
 * @property string provider_token
 * @property string start_parameter
 * @property string currency
 * @property LabeledPrice[] prices
 * @property string provider_data
 * @property string photo_url
 * @property int photo_size
 * @property int photo_width
 * @property int photo_height
 * @property bool need_name
 * @property bool need_phone_number
 * @property bool need_email
 * @property bool need_shipping_address
 * @property bool is_flexible
 * @property bool disable_notification
 * @property int reply_to_message_id
 * @property InlineKeyboardMarkup reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasTitle()
 * @method bool hasDescription()
 * @method bool hasPayload()
 * @method bool hasProviderToken()
 * @method bool hasStartParameter()
 * @method bool hasCurrency()
 * @method bool hasPrices()
 * @method bool hasProviderData()
 * @method bool hasPhotoUrl()
 * @method bool hasPhotoSize()
 * @method bool hasPhotoWidth()
 * @method bool hasPhotoHeight()
 * @method bool hasNeedName()
 * @method bool hasNeedPhone_number()
 * @method bool hasNeedEmail()
 * @method bool hasNeedShippingAddress()
 * @method bool hasIsFlexible()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setTitle($string)
 * @method $this setDescription($string)
 * @method $this setPayload($string)
 * @method $this setProviderToken($string)
 * @method $this setStartParameter($string)
 * @method $this setCurrency($string)
 * @method $this setPrices($array)
 * @method $this setProviderData($string)
 * @method $this setPhotoUrl($string)
 * @method $this setPhotoSize($integer)
 * @method $this setPhotoWidth($integer)
 * @method $this setPhotoHeight($integer)
 * @method $this setNeedName($boolean)
 * @method $this setNeedPhone_number($boolean)
 * @method $this setNeedEmail($boolean)
 * @method $this setNeedShippingAddress($boolean)
 * @method $this setIsFlexible($boolean)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remTitle()
 * @method $this remDescription()
 * @method $this remPayload()
 * @method $this remProviderToken()
 * @method $this remStartParameter()
 * @method $this remCurrency()
 * @method $this remPrices()
 * @method $this remProviderData()
 * @method $this remPhotoUrl()
 * @method $this remPhotoSize()
 * @method $this remPhotoWidth()
 * @method $this remPhotoHeight()
 * @method $this remNeedName()
 * @method $this remNeedPhone_number()
 * @method $this remNeedEmail()
 * @method $this remNeedShippingAddress()
 * @method $this remIsFlexible()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method $this remReplyMarkup()
 * @method int getChatId($default = null)
 * @method string getTitle($default = null)
 * @method string getDescription($default = null)
 * @method string getPayload($default = null)
 * @method string getProviderToken($default = null)
 * @method string getStartParameter($default = null)
 * @method string getCurrency($default = null)
 * @method LabeledPrice[] getPrices($default = null)
 * @method string getProviderData($default = null)
 * @method string getPhotoUrl($default = null)
 * @method int getPhotoSize($default = null)
 * @method int getPhotoWidth($default = null)
 * @method int getPhotoHeight($default = null)
 * @method bool getNeedName($default = null)
 * @method bool getNeedPhone_number($default = null)
 * @method bool getNeedEmail($default = null)
 * @method bool getNeedShippingAddress($default = null)
 * @method bool getIsFlexible($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 */
class sendInvoice extends Method
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