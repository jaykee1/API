<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string id
 * @property User from
 * @property Message message
 * @property string inline_message_id
 * @property string chat_instance
 * @property string data
 * @property string game_short_name
 *
 * @method bool hasMessage()
 * @method bool hasInlineMessageId()
 * @method bool hasData()
 * @method bool hasGameShortName()
 * @method string getId()
 * @method User getFrom()
 * @method Message getMessage($default = null)
 * @method string getInlineMessageId($default = null)
 * @method string getChatInstance()
 * @method string getData($default = null)
 * @method string getGameShortName($default = null)
 */
class CallbackQuery extends Response
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
            'message' => Message::className()
        ];
    }
}