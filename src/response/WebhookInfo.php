<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string url
 * @property bool has_custom_certificate
 * @property int pending_update_count
 * @property int last_error_date
 * @property string last_error_message
 * @property int max_connections
 * @property array allowed_updates
 *
 * @method bool hasLastErrorDate()
 * @method bool hasLastErrorMessage()
 * @method bool hasMaxConnections()
 * @method bool hasAllowedUpdates()
 * @method string getUrl()
 * @method bool getHasCustomCertificate()
 * @method int getPendingUpdateCount()
 * @method int getLastErrorDate($default = null)
 * @method string getLastErrorMessage($default = null)
 * @method int getMaxConnections($default = null)
 * @method array getAllowedUpdates($default = null)
 */
class WebhookInfo extends Response
{

    /**
     * @return bool
     */
    public function hasSetWebhook()
    {
        return !empty($this->url);
    }

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