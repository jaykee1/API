<?php namespace api\keyboard;

use api\keyboard\button\InlineKeyboardButton;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property array inline_keyboard
 *
 * @method bool hasInlineKeyboard()
 * @method $this setInlineKeyboard($array)
 * @method $this remInlineKeyboard()
 * @method array getInlineKeyboard($default = null)
 */
class InlineKeyboardMarkup extends Keyboard
{

    /**
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function deleteButton($row, $column = null)
    {
        if (is_int($row)) $row--;
        if (is_int($column)) $column--;
        if ($this->hasInlineKeyboard()) {
            $keyboard = $this->inline_keyboard;
            if ($column !== null &&
                isset($keyboard[$row][$column])) {
                unset($keyboard[$row][$column]);
            }
            elseif (isset($keyboard[$row])) {
                unset($keyboard[$row]);
            }

            $this->inline_keyboard = $keyboard;
        }

        return $this;
    }

    /**
     * @param InlineKeyboardButton $button
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function addButton($button, $row = null, $column = null)
    {
        if (is_int($row)) $row--;
        if (is_int($column)) $column--;
        if ($button instanceof InlineKeyboardButton) {
            $keyboard = [];
            if ($this->hasInlineKeyboard()) {
                $keyboard = $this->inline_keyboard;
                if ($row == null &&
                    sizeof($keyboard) > 0) {
                    $row = sizeof($keyboard) - 1;
                }
                if ($column == null &&
                    isset($keyboard[$row]) &&
                    sizeof($keyboard[$row]) > 0) {
                    $column = sizeof($keyboard[$row]) - 1;
                }
            }

            if ($row == null) $row = 0;
            if ($column == null) $column = 0;
            $keyboard[$row][$column] = $button;
            $this->inline_keyboard = $keyboard;
        }

        return $this;
    }
}
