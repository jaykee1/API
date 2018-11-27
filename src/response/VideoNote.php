<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string file_id
 * @property int length
 * @property int duration
 * @property PhotoSize thumb
 * @property int file_size
 *
 * @method bool hasThumb()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getLength()
 * @method int getDuration()
 * @method PhotoSize getThumb($default = null)
 * @method int getFileSize($default = null)
 */
class VideoNote extends Response
{

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