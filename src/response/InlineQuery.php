<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string id
 * @property User from
 * @property Location location
 * @property string query
 * @property string offset
 *
 * @method bool hasLocation()
 * @method string getId()
 * @method User getFrom()
 * @method Location getLocation($default = null)
 * @method string getQuery()
 * @method string getOffset()
 */
class InlineQuery extends Response
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
            'from' => User::className(),
            'location' => Location::className()
        ];
    }
}