<?php namespace api\method;

use api\response\Error;
use api\response\UserProfilePhotos;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int user_id
 * @property int offset
 * @property int limit
 *
 * @method UserProfilePhotos|Error send()
 * @method bool hasUserId()
 * @method bool hasOffset()
 * @method bool hasLimit()
 * @method $this setUserId($integer)
 * @method $this setOffset($integer)
 * @method $this setLimit($integer)
 * @method $this remUserId()
 * @method $this remOffset()
 * @method $this remLimit()
 * @method int getUserId($default = null)
 * @method int getOffset($default = null)
 * @method int getLimit($default = null)
 */
class getUserProfilePhotos extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return UserProfilePhotos::className();
    }
}