<?php namespace api\method;

use api\response\File;
use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string file_id
 *
 * @method File|Error send()
 * @method bool hasFileId()
 * @method $this setFileId($string)
 * @method $this remFileId()
 * @method string getFileId($default = null)
 */
class getFile extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return File::className();
    }
}