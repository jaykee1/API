<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string file_id
 * @property int file_size
 * @property string file_path
 *
 * @method bool hasFileSize()
 * @method bool hasFilePath()
 * @method string getFileId()
 * @method int getFileSize($default = null)
 * @method string getFilePath($default = null)
 */
class File extends Response
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
        return [];
    }
}