<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string voice_url
 * @property string title
 * @property string caption
 * @property int voice_duration
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasVoiceUrl()
 * @method bool hasTitle()
 * @method bool hasCaption()
 * @method bool hasVoiceDuration()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setVoiceUrl($string)
 * @method $this setTitle($string)
 * @method $this setCaption($string)
 * @method $this setVoiceDuration($integer)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remVoiceUrl()
 * @method $this remTitle()
 * @method $this remCaption()
 * @method $this remVoiceDuration()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getVoiceUrl($default = null)
 * @method string getTitle($default = null)
 * @method string getCaption($default = null)
 * @method int getVoiceDuration($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultVoice extends InlineQueryResult
{
}