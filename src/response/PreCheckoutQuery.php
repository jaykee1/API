<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string id
 * @property User from
 * @property string currency
 * @property int total_amount
 * @property string invoice_payload
 * @property string shipping_option_id
 * @property OrderInfo order_info
 *
 * @method bool hasShippingOptionId()
 * @method bool hasOrderInfo()
 * @method string getId()
 * @method User getFrom()
 * @method string getCurrency()
 * @method int getTotalAmount()
 * @method string getInvoicePayload()
 * @method string getShippingOptionId($default = null)
 * @method OrderInfo getOrderInfo($default = null)
 */
class PreCheckoutQuery extends Response
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
            'order_info' => OrderInfo::className()
        ];
    }
}