<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int update_id
 * @property Message message
 * @property Message edited_message
 * @property Message channel_post
 * @property Message edited_channel_post
 * @property InlineQuery inline_query
 * @property ChosenInlineResult chosen_inline_result
 * @property CallbackQuery callback_query
 * @property ShippingQuery shipping_query
 * @property PreCheckoutQuery pre_checkout_query
 *
 * @method bool hasMessage()
 * @method bool hasEditedMessage()
 * @method bool hasChannelPost()
 * @method bool hasEditedChannelPost()
 * @method bool hasInlineQuery()
 * @method bool hasChosenInlineResult()
 * @method bool hasCallbackQuery()
 * @method bool hasShippingQuery()
 * @method bool hasPreCheckoutQuery()
 * @method int getUpdateId()
 * @method Message getMessage($default = null)
 * @method Message getEditedMessage($default = null)
 * @method Message getChannelPost($default = null)
 * @method Message getEditedChannelPost($default = null)
 * @method InlineQuery getInlineQuery($default = null)
 * @method ChosenInlineResult getChosenInlineResult($default = null)
 * @method CallbackQuery getCallbackQuery($default = null)
 * @method ShippingQuery getShippingQuery($default = null)
 * @method PreCheckoutQuery getPreCheckoutQuery($default = null)
 */
class Update extends Response
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
            'message' => Message::className(),
            'edited_message' => Message::className(),
            'channel_post' => Message::className(),
            'edited_channel_post' => Message::className(),
            'inline_query' => InlineQuery::className(),
            'chosen_inline_result' => ChosenInlineResult::className(),
            'callback_query' => CallbackQuery::className(),
            'shipping_query' => ShippingQuery::className(),
            'pre_checkout_query' => PreCheckoutQuery::className()
        ];
    }
}