<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string photo_url
 * @property string thumb_url
 * @property int photo_width
 * @property int photo_height
 * @property string title
 * @property string description
 * @property string caption
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasPhotoUrl()
 * @method bool hasThumbUrl()
 * @method bool hasPhotoWidth()
 * @method bool hasPhotoHeight()
 * @method bool hasTitle()
 * @method bool hasDescription()
 * @method bool hasCaption()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setPhotoUrl($string)
 * @method $this setThumbUrl($string)
 * @method $this setPhotoWidth($integer)
 * @method $this setPhotoHeight($integer)
 * @method $this setTitle($string)
 * @method $this setDescription($string)
 * @method $this setCaption($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remPhotoUrl()
 * @method $this remThumbUrl()
 * @method $this remPhotoWidth()
 * @method $this remPhotoHeight()
 * @method $this remTitle()
 * @method $this remDescription()
 * @method $this remCaption()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getPhotoUrl($default = null)
 * @method string getThumbUrl($default = null)
 * @method int getPhotoWidth($default = null)
 * @method int getPhotoHeight($default = null)
 * @method string getTitle($default = null)
 * @method string getDescription($default = null)
 * @method string getCaption($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
}