<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $images
 * @property integer $dt_add
 * @property string $text
 * @property integer $lang_id
 * @property integer $cat_id
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'images', 'dt_add', 'text', 'lang_id', 'cat_id'], 'required'],
            [['dt_add', 'lang_id', 'cat_id'], 'integer'],
            [['text'], 'string'],
            [['title', 'images'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'images' => 'Изображение',
            'dt_add' => 'Дата добавления',
            'text' => 'Текст новости',
            'lang_id' => 'Язык',
            'cat_id' => 'Категория',
        ];
    }

    public function getcategory_news()
    {
        return $this->hasOne(CategoryNews::className(), ['id' => 'cat_id']);
    }
}
