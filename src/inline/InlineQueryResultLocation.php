<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property float latitude
 * @property float longitude
 * @property string title
 * @property int live_period
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 * @property string thumb_url
 * @property int thumb_width
 * @property int thumb_height
 *
 * @method bool hasLatitude()
 * @method bool hasLongitude()
 * @method bool hasTitle()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method bool hasThumbUrl()
 * @method bool hasThumbWidth()
 * @method bool hasThumbHeight()
 * @method $this setLatitude($float)
 * @method $this setLongitude($float)
 * @method $this setTitle($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this setThumbUrl($string)
 * @method $this setThumbWidth($integer)
 * @method $this setThumbHeight($integer)
 * @method $this remLatitude()
 * @method $this remLongitude()
 * @method $this remTitle()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method $this remThumbUrl()
 * @method $this remThumbWidth()
 * @method $this remThumbHeight()
 * @method float getLatitude($default = null)
 * @method float getLongitude($default = null)
 * @method string getTitle($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 * @method string getThumbUrl($default = null)
 * @method int getThumbWidth($default = null)
 * @method int getThumbHeight($default = null)
 */
class InlineQueryResultLocation extends InlineQueryResult
{
}