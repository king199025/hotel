<?php

namespace common\models\db;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "materials".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $dt_add
 * @property integer $dt_update
 * @property string $type
 * @property string $photo
 * @property integer $status
 * @property string $short_description
 * @property string $slug
 */
class Materials extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['dt_add', 'dt_update'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['dt_update'],
                ],
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['dt_add', 'dt_update', 'status'], 'integer'],
            [['title', 'type', 'photo', 'short_description', 'slug'], 'string', 'max' => 255]
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
            'content' => 'Содержимое',
            'dt_add' => 'Дата добавления',
            'dt_update' => 'Дата обновления',
            'type' => 'Тип',
            'status' => 'Статус',
            'photo' => 'Изображение',
            'short_description' => 'Краткое описание',
        ];
    }
}
