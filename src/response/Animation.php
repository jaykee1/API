<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string file_id
 * @property PhotoSize thumb
 * @property string file_name
 * @property string mime_type
 * @property int file_size
 *
 * @method bool hasThumb()
 * @method bool hasFileName()
 * @method bool hasMimeType()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method PhotoSize getThumb($default = null)
 * @method string getFileName($default = null)
 * @method string getMimeType($default = null)
 * @method int getFileSize($default = null)
 */
class Animation extends Response
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