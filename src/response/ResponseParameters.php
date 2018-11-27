<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int migrate_to_chat_id
 * @property int retry_after
 *
 * @method bool hasMigrateToChatId()
 * @method bool hasRetryAfter()
 * @method int getMigrateToChatId($default = null)
 * @method int getRetryAfter($default = null)
 */
class ResponseParameters extends Response
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