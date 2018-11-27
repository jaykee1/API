<?php namespace api\input;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property float latitude
 * @property float longitude
 * @property int live_period
 *
 * @method bool hasLatitude()
 * @method bool hasLongitude()
 * @method $this setLatitude($float)
 * @method $this setLongitude($float)
 * @method $this remLatitude()
 * @method $this remLongitude()
 * @method float getLatitude($default = null)
 * @method float getLongitude($default = null)
 */
class InputLocationMessageContent extends InputMessageContent
{
}