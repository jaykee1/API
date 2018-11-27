<?php namespace api\method;

use api\InputFile;
use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string url
 * @property InputFile certificate
 * @property int max_connections
 * @property array allowed_updates
 *
 * @method true|Error send()
 * @method bool hasUrl()
 * @method bool hasCertificate()
 * @method bool hasMaxConnections()
 * @method bool hasAllowedUpdates()
 * @method $this setUrl($string)
 * @method $this setCertificate(InputFile $file)
 * @method $this setMaxConnections($integer)
 * @method $this setAllowedUpdates($array)
 * @method $this remUrl()
 * @method $this remCertificate()
 * @method $this remMaxConnections()
 * @method $this remAllowedUpdates()
 * @method string getUrl($default = null)
 * @method InputFile getCertificate($default = null)
 * @method int getMaxConnections($default = null)
 * @method array getAllowedUpdates($default = null)
 */
class setWebhook extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return true;
    }
}