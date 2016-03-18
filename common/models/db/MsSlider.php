<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ms_slider".
 *
 * @property integer $id
 * @property string $title
 * @property string $descr
 * @property string $photo
 * @property integer $dt_add
 */
class MsSlider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ms_slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'photo', 'dt_add'], 'required'],
            [['descr'], 'string'],
            [['dt_add'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 155]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'descr' => 'Descr',
            'photo' => 'Photo',
            'dt_add' => 'Dt Add',
        ];
    }
}
