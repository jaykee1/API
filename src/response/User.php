<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int id
 * @property bool is_bot
 * @property string first_name
 * @property string last_name
 * @property string username
 * @property string language_code
 *
 * @method bool hasIsBot()
 * @method bool hasLastName()
 * @method bool hasUsername()
 * @method bool hasLanguageCode()
 * @method int getId()
 * @method bool getIsBot()
 * @method string getFirstName()
 * @method string getLastName($default = null)
 * @method string getUsername($default = null)
 * @method string getLanguageCode($default = null)
 */
class User extends Response
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
