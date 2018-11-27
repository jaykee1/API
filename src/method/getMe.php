<?php namespace api\method;

use api\response\User;
use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @method User|Error send()
 */
class getMe extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return User::className();
    }
}