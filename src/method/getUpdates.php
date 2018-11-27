<?php namespace api\method;

use api\response\Error;
use api\response\Update;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int offset
 * @property int limit
 * @property int timeout
 * @property array allowed_updates
 *
 * @method Update[]|Error send()
 * @method bool hasOffset()
 * @method bool hasLimit()
 * @method bool hasTimeout()
 * @method bool hasAllowedUpdates()
 * @method $this setOffset($integer)
 * @method $this setLimit($integer)
 * @method $this setTimeout($integer)
 * @method $this setAllowedUpdates($array)
 * @method $this remOffset()
 * @method $this remLimit()
 * @method $this remTimeout()
 * @method $this remAllowedUpdates()
 * @method int getOffset($default = null)
 * @method int getLimit($default = null)
 * @method int getTimeout($default = null)
 * @method array getAllowedUpdates($default = null)
 */
class getUpdates extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return Update::className();
    }
}