<?php namespace api\input;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string message_text
 * @property string parse_mode
 * @property bool disable_web_page_preview
 *
 * @method bool hasMessageText()
 * @method bool hasParseMode()
 * @method bool hasDisableWebPagePreview()
 * @method $this setMessageText($string)
 * @method $this setParseMode($string)
 * @method $this setDisableWebPagePreview($boolean)
 * @method $this remMessageText()
 * @method $this remParseMode()
 * @method $this remDisableWebPagePreview()
 * @method string getMessageText($default = null)
 * @method string getParseMode($default = null)
 * @method bool getDisableWebPagePreview($default = null)
 */
class InputTextMessageContent extends InputMessageContent
{
}