<?php namespace api\inline;

use api\input\InputMessageContent;
use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string video_url
 * @property string mime_type
 * @property string thumb_url
 * @property string title
 * @property string caption
 * @property int video_width
 * @property int video_height
 * @property int video_duration
 * @property string description
 * @property InlineKeyboardMarkup reply_markup
 * @property InputMessageContent input_message_content
 *
 * @method bool hasVideoUrl()
 * @method bool hasMimeType()
 * @method bool hasThumbUrl()
 * @method bool hasTitle()
 * @method bool hasCaption()
 * @method bool hasVideoWidth()
 * @method bool hasVideoHeight()
 * @method bool hasVideoDuration()
 * @method bool hasDescription()
 * @method bool hasReplyMarkup()
 * @method bool hasInputMessageContent()
 * @method $this setVideoUrl($string)
 * @method $this setMimeType($string)
 * @method $this setThumbUrl($string)
 * @method $this setTitle($string)
 * @method $this setCaption($string)
 * @method $this setVideoWidth($integer)
 * @method $this setVideoHeight($integer)
 * @method $this setVideoDuration($integer)
 * @method $this setDescription($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this setInputMessageContent(InputMessageContent $input)
 * @method $this remVideoUrl()
 * @method $this remMimeType()
 * @method $this remThumbUrl()
 * @method $this remTitle()
 * @method $this remCaption()
 * @method $this remVideoWidth()
 * @method $this remVideoHeight()
 * @method $this remVideoDuration()
 * @method $this remDescription()
 * @method $this remReplyMarkup()
 * @method $this remInputMessageContent()
 * @method string getVideoUrl($default = null)
 * @method string getMimeType($default = null)
 * @method string getThumbUrl($default = null)
 * @method string getTitle($default = null)
 * @method string getCaption($default = null)
 * @method int getVideoWidth($default = null)
 * @method int getVideoHeight($default = null)
 * @method int getVideoDuration($default = null)
 * @method string getDescription($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 * @method InputMessageContent getInputMessageContent($default = null)
 */
class InlineQueryResultVideo extends InlineQueryResult
{
}