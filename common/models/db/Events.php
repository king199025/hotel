<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $title
 * @property integer $dt_add
 * @property integer $dt_event
 * @property string $descr
 * @property integer $user_id
 * @property integer $lang_id
 * @property string $photo
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'dt_event', 'lang_id'], 'required'],
            [['dt_add', 'user_id', 'lang_id'], 'integer'],
            [['descr'], 'string'],
            [['title', 'photo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'dt_add' => 'Dt Add',
            'dt_event' => 'Дата',
            'descr' => 'Описание',
            'user_id' => 'User ID',
            'photo' => 'Фото',
            'lang_id' => 'Язык',
        ];
    }
}
