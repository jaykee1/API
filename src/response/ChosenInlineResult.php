<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string result_id
 * @property User from
 * @property Location location
 * @property string inline_message_id
 * @property string query
 *
 * @method bool hasLocation()
 * @method bool hasInlineMessageId()
 * @method string getResultId()
 * @method User getFrom()
 * @method Location getLocation($default = null)
 * @method string getInlineMessageId($default = null)
 * @method string getQuery()
 */
class ChosenInlineResult extends Response
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