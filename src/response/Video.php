<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string file_id
 * @property int width
 * @property int height
 * @property int duration
 * @property PhotoSize thumb
 * @property string mime_type
 * @property int file_size
 *
 * @method bool hasThumb()
 * @method bool hasMimeType()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getWidth()
 * @method int getHeight()
 * @method int getDuration()
 * @method PhotoSize getThumb($default = null)
 * @method string getMimeType($default = null)
 * @method int getFileSize($default = null)
 */
class Video extends Response
{

    const MP4 = 'video/mp4';
    const HTML = 'text/html';

    /**
     * Response can have relations with other objects,
     * in this method we introduce all objects this object
     * have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [
            'thumb' => PhotoSize::className()
        ];
    }
}