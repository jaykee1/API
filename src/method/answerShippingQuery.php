<?php namespace api\method;

use api\response\Error;
use api\response\ShippingOption;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string shipping_query_id
 * @property bool ok
 * @property ShippingOption[] shipping_options
 * @property string error_message
 *
 * @method true|Error send()
 * @method bool hasShippingQueryId()
 * @method bool hasOk()
 * @method bool hasShippingOptions()
 * @method bool hasErrorMessage()
 * @method $this setShippingQueryId($string)
 * @method $this setOk($boolean)
 * @method $this setShippingOptions($option)
 * @method $this setErrorMessage($string)
 * @method $this remShippingQueryId()
 * @method $this remOk()
 * @method $this remShippingOptions()
 * @method $this remErrorMessage()
 * @method string getShippingQueryId($default = null)
 * @method bool getOk($default = null)
 * @method ShippingOption[] getShippingOptions($default = null)
 * @method string getErrorMessage($default = null)
 */
class answerShippingQuery extends Method
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