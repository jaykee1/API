<?php namespace api;

/**
 * This object represents the contents of a file to be
 * uploaded. Must be posted using `multipart/form-data` in
 * the usual way that files are uploaded
 * via the browser.
 *
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 */
class InputFile extends \CURLFile
{

    /**
     * InputFile constructor.
     * @param string $file
     * @param string $type
     */
    public function __construct($file, $type = null)
    {
        $path = \Yii::getAlias($file);
        parent::__construct($path, $type, null);
    }
}