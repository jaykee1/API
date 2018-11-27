<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string point
 * @property float x_shift
 * @property float y_shift
 * @property float scale
 *
 * @method string getPoint()
 * @method float getXShift()
 * @method float getYShift()
 * @method float getScale()
 */
class MaskPosition extends Response
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