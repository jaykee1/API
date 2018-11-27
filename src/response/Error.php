<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property int error_code
 * @property ResponseParameters parameters
 * @property string description
 *
 * @method bool hasErrorCode()
 * @method bool hasParameters()
 * @method bool hasDescription()
 * @method int getErrorCode()
 * @method ResponseParameters getParameters($default = null)
 * @method string getDescription()
 */
class Error extends Response
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
            'parameters' => ResponseParameters::className()
        ];
    }
}