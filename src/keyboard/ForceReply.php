<?php namespace api\keyboard;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property bool force_reply
 * @property bool selective
 *
 * @method bool hasForceReply()
 * @method bool hasSelective()
 * @method $this setForceReply($bool)
 * @method $this setSelective($bool)
 * @method $this remForceReply()
 * @method $this remSelective()
 * @method True getForceReply($default = null)
 * @method bool getSelective($default = null)
 */
class ForceReply extends Keyboard
{

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $this->force_reply = true;
    }
}
