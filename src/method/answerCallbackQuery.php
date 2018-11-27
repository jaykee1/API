<?php namespace api\method;

use api\response\Error;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string callback_query_id
 * @property string text
 * @property bool show_alert
 * @property string url
 * @property int cache_time
 *
 * @method true|Error send()
 * @method bool hasCallbackQueryId()
 * @method bool hasText()
 * @method bool hasShowAlert()
 * @method bool hasUrl()
 * @method bool hasCacheTime()
 * @method $this setCallbackQueryId($string)
 * @method $this setText($string)
 * @method $this setShowAlert($boolean)
 * @method $this setUrl($string)
 * @method $this setCacheTime($integer)
 * @method $this remCallbackQueryId()
 * @method $this remText()
 * @method $this remShowAlert()
 * @method $this remUrl()
 * @method $this remCacheTime()
 * @method string getCallbackQueryId($default = null)
 * @method string getText($default = null)
 * @method bool getShowAlert($default = null)
 * @method string getUrl($default = null)
 * @method int getCacheTime($default = null)
 */
class answerCallbackQuery extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return true;
    }
}