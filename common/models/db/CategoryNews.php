<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "category_news".
 *
 * @property integer $id
 * @property string $title
 * @property integer $lang_id
 */
class CategoryNews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'lang_id'], 'required'],
            [['lang_id'], 'integer'],
            [['title'], 'string', 'max' => 255]
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
            'lang_id' => 'Язык',
        ];
    }
}
