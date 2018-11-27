<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string gif_file_id
 * @property string title
 * @property string caption
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasGifFileId()
 * @method bool hasTitle()
 * @method bool hasCaption()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setGifFileId($string)
 * @method $this setTitle($string)
 * @method $this setCaption($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remGifFileId()
 * @method $this remTitle()
 * @method $this remCaption()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getGifFileId($default = null)
 * @method string getTitle($default = null)
 * @method string getCaption($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultCachedGif extends InlineQueryResult
{
}