<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property bool small_file_id
 * @property bool big_file_id
 *
 * @method bool getSmallFileId()
 * @method bool getBigFileId()
 */
class ChatPhoto extends Response
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