<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string title
 * @property string document_file_id
 * @property string description
 * @property string caption
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasTitle()
 * @method bool hasDocumentFileId()
 * @method bool hasDescription()
 * @method bool hasCaption()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setTitle($string)
 * @method $this setDocumentFileId($string)
 * @method $this setDescription($string)
 * @method $this setCaption($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remTitle()
 * @method $this remDocumentFileId()
 * @method $this remDescription()
 * @method $this remCaption()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getTitle($default = null)
 * @method string getDocumentFileId($default = null)
 * @method string getDescription($default = null)
 * @method string getCaption($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultCachedDocument extends InlineQueryResult
{
}