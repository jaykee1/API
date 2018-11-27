<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string name
 * @property string title
 * @property bool contains_masks
 * @property Sticker[] stickers
 *
 * @method string getName()
 * @method string getTitle()
 * @method bool getContainsMasks()
 * @method Sticker[] getStickers()
 */
class StickerSet extends Response
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
            'stickers' => Sticker::className()
        ];
    }
}