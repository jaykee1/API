<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string sticker_file_id
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasStickerFileId()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setStickerFileId($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remStickerFileId()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getStickerFileId($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultCachedSticker extends InlineQueryResult
{
}