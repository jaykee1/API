<?php namespace api\keyboard;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property bool remove_keyboard
 * @property bool selective
 *
 * @method bool hasRemoveKeyboard()
 * @method bool hasSelective()
 * @method $this setRemoveKeyboard($true)
 * @method $this setSelective($boolean)
 * @method $this remRemoveKeyboard()
 * @method $this remSelective()
 * @method true getRemoveKeyboard($default = null)
 * @method bool getSelective($default = null)
 */
class ReplyKeyboardRemove extends Keyboard
{

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $this->remove_keyboard = true;
    }
}
