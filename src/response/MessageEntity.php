<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string type
 * @property int offset
 * @property int length
 * @property string url
 * @property User user
 *
 * @method bool hasUrl()
 * @method bool hasUser()
 * @method string getType()
 * @method int getOffset()
 * @method int getLength()
 * @method string getUrl($default = null)
 * @method User getUser($default = null)
 */
class MessageEntity extends Response
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
        return [
            'user' => User::className()
        ];
    }
}