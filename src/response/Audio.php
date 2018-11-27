<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string file_id
 * @property int duration
 * @property string performer
 * @property string title
 * @property string mime_type
 * @property int file_size
 *
 * @method bool hasPerformer()
 * @method bool hasTitle()
 * @method bool hasMimeType()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getDuration()
 * @method string getPerformer($default = null)
 * @method string getTitle($default = null)
 * @method string getMimeType($default = null)
 * @method int getFileSize($default = null)
 */
class Audio extends Response
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