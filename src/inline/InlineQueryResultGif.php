<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string gif_url
 * @property int gif_width
 * @property int gif_height
 * @property int gif_duration
 * @property string thumb_url
 * @property string title
 * @property string caption
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasGifUrl()
 * @method bool hasGifWidth()
 * @method bool hasGifHeight()
 * @method bool hasThumbUrl()
 * @method bool hasTitle()
 * @method bool hasCaption()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setGifUrl($string)
 * @method $this setGifWidth($integer)
 * @method $this setGifHeight($integer)
 * @method $this setThumbUrl($string)
 * @method $this setTitle($string)
 * @method $this setCaption($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remGifUrl()
 * @method $this remGifWidth()
 * @method $this remGifHeight()
 * @method $this remThumbUrl()
 * @method $this remTitle()
 * @method $this remCaption()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getGifUrl($default = null)
 * @method int getGifWidth($default = null)
 * @method int getGifHeight($default = null)
 * @method string getThumbUrl($default = null)
 * @method string getTitle($default = null)
 * @method string getCaption($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultGif extends InlineQueryResult
{
}