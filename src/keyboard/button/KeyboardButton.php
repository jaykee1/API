<?php namespace api\keyboard\button;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string text
 * @property bool request_contact
 * @property bool request_location
 *
 * @method bool hasText()
 * @method bool hasRequestContact()
 * @method bool hasRequestLocation()
 * @method $this setText($string)
 * @method $this setRequestContact($boolean)
 * @method $this setRequestLocation($boolean)
 * @method $this remText()
 * @method $this remRequestContact()
 * @method $this remRequestLocation()
 * @method string getText($default = null)
 * @method bool getRequestContact($default = null)
 * @method bool getRequestLocation($default = null)
 */
class KeyboardButton extends Button
{
}
