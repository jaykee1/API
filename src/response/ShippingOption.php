<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string id
 * @property string title
 * @property LabeledPrice[] prices
 *
 * @method bool hasId()
 * @method bool hasTitle()
 * @method bool hasPrices()
 * @method string getId($default = null)
 * @method string getTitle($default = null)
 * @method LabeledPrice[] getPrices($default = null)
 */
class ShippingOption extends Response
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
            'prices' => LabeledPrice::className()
        ];
    }
}