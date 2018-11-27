<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string name
 * @property string phone_number
 * @property string email
 * @property ShippingAddress shipping_address
 *
 * @method bool hasName()
 * @method bool hasPhoneNumber()
 * @method bool hasEmail()
 * @method bool hasShippingAddress()
 * @method string getName($default = null)
 * @method string getPhoneNumber($default = null)
 * @method string getEmail($default = null)
 * @method ShippingAddress getShippingAddress($default = null)
 */
class OrderInfo extends Response
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
            'shipping_address' => ShippingAddress::className()
        ];
    }
}