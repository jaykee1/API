<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string title
 * @property string caption
 * @property string document_url
 * @property string mime_type
 * @property string description
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 * @property string thumb_url
 * @property int thumb_width
 * @property int thumb_height
 *
 * @method bool hasTitle()
 * @method bool hasCaption()
 * @method bool hasDocumentUrl()
 * @method bool hasMimeType()
 * @method bool hasDescription()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method bool hasThumbUrl()
 * @method bool hasThumbWidth()
 * @method bool hasThumbHeight()
 * @method $this setTitle($string)
 * @method $this setCaption($string)
 * @method $this setDocumentUrl($string)
 * @method $this setMimeType($string)
 * @method $this setDescription($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this setThumbUrl($string)
 * @method $this setThumbWidth($integer)
 * @method $this setThumbHeight($integer)
 * @method $this remTitle()
 * @method $this remCaption()
 * @method $this remDocumentUrl()
 * @method $this remMimeType()
 * @method $this remDescription()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method $this remThumbUrl()
 * @method $this remThumbWidth()
 * @method $this remThumbHeight()
 * @method string getTitle($default = null)
 * @method string getCaption($default = null)
 * @method string getDocumentUrl($default = null)
 * @method string getMimeType($default = null)
 * @method string getDescription($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 * @method string getThumbUrl($default = null)
 * @method int getThumbWidth($default = null)
 * @method int getThumbHeight($default = null)
 */
class InlineQueryResultDocument extends InlineQueryResult
{
}