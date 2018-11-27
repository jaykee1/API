<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string phone_number
 * @property string first_name
 * @property string last_name
 * @property int user_id
 *
 * @method bool hasLastName()
 * @method bool hasUserId()
 * @method string getPhoneNumber()
 * @method string getFirstName()
 * @method string getLastName($default = null)
 * @method int getUserId($default = null)
 */
class Contact extends Response
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