<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string phone_number
 * @property string first_name
 * @property string last_name
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 * @property string thumb_url
 * @property int thumb_width
 * @property int thumb_height
 *
 * @method bool hasPhoneNumber()
 * @method bool hasFirstName()
 * @method bool hasLastName()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method bool hasThumbUrl()
 * @method bool hasThumbWidth()
 * @method bool hasThumbHeight()
 * @method $this setPhoneNumber($string)
 * @method $this setFirstName($string)
 * @method $this setLastName($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this setThumbUrl($string)
 * @method $this setThumbWidth($integer)
 * @method $this setThumbHeight($integer)
 * @method $this remPhoneNumber()
 * @method $this remFirstName()
 * @method $this remLastName()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method $this remThumbUrl()
 * @method $this remThumbWidth()
 * @method $this remThumbHeight()
 * @method string getPhoneNumber($default = null)
 * @method string getFirstName($default = null)
 * @method string getLastName($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 * @method string getThumbUrl($default = null)
 * @method int getThumbWidth($default = null)
 * @method int getThumbHeight($default = null)
 */
class InlineQueryResultContact extends InlineQueryResult
{
}