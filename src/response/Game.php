<?php namespace api\response;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 *
 * @property string title
 * @property string description
 * @property PhotoSize[] photo
 * @property string text
 * @property MessageEntity[] text_entities
 * @property Animation animation
 *
 * @method bool hasText()
 * @method bool hasTextEntities()
 * @method bool hasAnimation()
 * @method string getTitle()
 * @method string getDescription()
 * @method PhotoSize[] getPhoto()
 * @method string getText($default = null)
 * @method MessageEntity[] getTextEntities($default = null)
 * @method Animation getAnimation($default = null)
 */
class Game extends Response
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
            'photo' => PhotoSize::className(),
            'text_entities' => MessageEntity::className(),
            'animation' => Animation::className()
        ];
    }
}