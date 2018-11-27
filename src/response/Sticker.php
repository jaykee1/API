<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string file_id
 * @property int width
 * @property int height
 * @property PhotoSize thumb
 * @property string emoji
 * @property string set_name
 * @property MaskPosition mask_position
 * @property int file_size
 *
 * @method bool hasThumb()
 * @method bool hasEmoji()
 * @method bool hasSetName()
 * @method bool hasMaskPosition()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getWidth()
 * @method int getHeight()
 * @method PhotoSize getThumb($default = null)
 * @method string getEmoji($default = null)
 * @method string getSetName($default = null)
 * @method MaskPosition getMaskPosition($default = null)
 * @method int getFileSize($default = null)
 */
class Sticker extends Response
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
            'thumb' => PhotoSize::className(),
            'mask_position' => MaskPosition::className()
        ];
    }
}