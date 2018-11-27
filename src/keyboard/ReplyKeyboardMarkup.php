<?php namespace api\keyboard;

use api\keyboard\button\KeyboardButton;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property array keyboard
 * @property bool resize_keyboard
 * @property bool one_time_keyboard
 * @property bool selective
 *
 * @method bool hasKeyboard()
 * @method bool hasResizeKeyboard()
 * @method bool hasOneTimeKeyboard()
 * @method bool hasSelective()
 * @method $this setKeyboard($array)
 * @method $this setResizeKeyboard($boolean)
 * @method $this setOneTimeKeyboard($boolean)
 * @method $this setSelective($boolean)
 * @method $this remKeyboard()
 * @method $this remResizeKeyboard()
 * @method $this remOneTimeKeyboard()
 * @method $this remSelective()
 * @method array getKeyboard($default = null)
 * @method bool getResizeKeyboard($default = null)
 * @method bool getOneTimeKeyboard($default = null)
 * @method bool getSelective($default = null)
 */
class ReplyKeyboardMarkup extends Keyboard
{

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $this->resize_keyboard = true;
    }

    /**
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function deleteButton($row, $column = null)
    {
        if (is_int($row)) $row--;
        if (is_int($column)) $column--;
        if ($this->hasKeyboard()) {
            $keyboard = $this->keyboard;
            if ($column !== null &&
                isset($keyboard[$row][$column])) {
                unset($keyboard[$row][$column]);
            }
            elseif (isset($keyboard[$row])) {
                unset($keyboard[$row]);
            }

            $this->keyboard = $keyboard;
        }

        return $this;
    }

    /**
     * @param KeyboardButton $button
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function addButton($button, $row = null, $column = null)
    {
        if (is_int($row)) $row--;
        if (is_int($column)) $column--;
        if ($button instanceof KeyboardButton) {
            $keyboard = [];
            if ($this->hasKeyboard()) {
                $keyboard = $this->keyboard;
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
            $this->keyboard = $keyboard;
        }

        return $this;
    }
}
