<?php namespace api\inline;

use api\keyboard\InlineKeyboardMarkup;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string game_short_name
 * @property InlineKeyboardMarkup reply_markup
 *
 * @method bool hasGameShortName()
 * @method bool hasReplyMarkup()
 * @method $this setGameShortName($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this remGameShortName()
 * @method $this remReplyMarkup()
 * @method string getGameShortName($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 */
class InlineQueryResultGame extends InlineQueryResult
{
}