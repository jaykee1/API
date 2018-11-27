<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string pre_checkout_query_id
 * @property bool ok
 * @property string error_message
 *
 * @method true|Error send()
 * @method bool hasPreCheckoutQueryId()
 * @method bool hasOk()
 * @method bool hasErrorMessage()
 * @method $this setPreCheckoutQueryId($string)
 * @method $this setOk($boolean)
 * @method $this setErrorMessage($string)
 * @method $this remPreCheckoutQueryId()
 * @method $this remOk()
 * @method $this remErrorMessage()
 * @method string getPreCheckoutQueryId($default = null)
 * @method bool getOk($default = null)
 * @method string getErrorMessage($default = null)
 */
class answerPreCheckoutQuery extends Method
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