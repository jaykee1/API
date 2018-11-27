<?php namespace api\media;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.1.0
 *
 * @property int width
 * @property int height
 * @property int duration
 * @property bool supports_streaming
 *
 * @method bool hasWidth()
 * @method bool hasHeight()
 * @method bool hasDuration()
 * @method bool hasSupportsStreaming()
 * @method $this setWidth($integer)
 * @method $this setHeight($integer)
 * @method $this setDuration($integer)
 * @method $this setSupportsStreaming($bool)
 * @method $this remWidth()
 * @method $this remHeight()
 * @method $this remDuration()
 * @method $this remSupportsStreaming()
 * @method int getWidth($default = null)
 * @method int getHeight($default = null)
 * @method int getDuration($default = null)
 * @method bool getSupportsStreaming($default = null)
 */
class InputMediaVideo extends InputMedia
{
}