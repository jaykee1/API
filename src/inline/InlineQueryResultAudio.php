<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string audio_url
 * @property string title
 * @property string caption
 * @property string performer
 * @property int audio_duration
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasAudioUrl()
 * @method bool hasTitle()
 * @method bool hasCaption()
 * @method bool hasPerformer()
 * @method bool hasAudioDuration()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setAudioUrl($string)
 * @method $this setTitle($string)
 * @method $this setCaption($string)
 * @method $this setPerformer($string)
 * @method $this setAudioDuration($integer)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remAudioUrl()
 * @method $this remTitle()
 * @method $this remCaption()
 * @method $this remPerformer()
 * @method $this remAudioDuration()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getAudioUrl($default = null)
 * @method string getTitle($default = null)
 * @method string getCaption($default = null)
 * @method string getPerformer($default = null)
 * @method int getAudioDuration($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultAudio extends InlineQueryResult
{
}