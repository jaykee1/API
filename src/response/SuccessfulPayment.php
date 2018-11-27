<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string currency
 * @property int total_amount
 * @property string invoice_payload
 * @property string shipping_option_id
 * @property OrderInfo order_info
 * @property string telegram_payment_charge_id
 * @property string provider_payment_charge_id
 *
 * @method bool hasShippingOptionId()
 * @method bool hasOrderInfo()
 * @method string getCurrency()
 * @method int getTotalAmount()
 * @method string getInvoicePayload()
 * @method string getShippingOptionId($default = null)
 * @method OrderInfo getOrderInfo($default = null)
 * @method string getTelegramPaymentChargeId()
 * @method string getProviderPaymentChargeId()
 */
class SuccessfulPayment extends Response
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
            'order_info' => OrderInfo::className()
        ];
    }
}