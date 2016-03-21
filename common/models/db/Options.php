<?php

namespace common\models\db;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "options".
 *
 * @property integer $id
 * @property string $opt_key
 * @property string $opt_title
 * @property string $opt_value
 * @property integer $dt_add
 * @property integer $dt_update
 */
class Options extends \yii\db\ActiveRecord
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
        return 'options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['opt_key', 'opt_title', 'opt_value'], 'required'],
            [['dt_add', 'dt_update'], 'integer'],
            [['opt_key', 'opt_title', 'opt_value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'opt_key' => 'Ключ',
            'opt_title' => 'Название',
            'opt_value' => 'Значение',
            'dt_add' => 'Дата добавления',
            'dt_update' => 'Дата обновления',
        ];
    }
}
