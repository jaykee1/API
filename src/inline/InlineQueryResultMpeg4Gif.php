<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string mpeg4_url
 * @property int mpeg4_width
 * @property int mpeg4_height
 * @property int mpeg4_duration
 * @property string thumb_url
 * @property string title
 * @property string caption
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasMpeg4Url()
 * @method bool hasMpeg4Width()
 * @method bool hasMpeg4Height()
 * @method bool hasThumbUrl()
 * @method bool hasTitle()
 * @method bool hasCaption()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setMpeg4Url($string)
 * @method $this setMpeg4Width($integer)
 * @method $this setMpeg4Height($integer)
 * @method $this setThumbUrl($string)
 * @method $this setTitle($string)
 * @method $this setCaption($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remMpeg4Url()
 * @method $this remMpeg4Width()
 * @method $this remMpeg4Height()
 * @method $this remThumbUrl()
 * @method $this remTitle()
 * @method $this remCaption()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getMpeg4Url($default = null)
 * @method int getMpeg4Width($default = null)
 * @method int getMpeg4Height($default = null)
 * @method string getThumbUrl($default = null)
 * @method string getTitle($default = null)
 * @method string getCaption($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
}