<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ms_img".
 *
 * @property integer $id
 * @property string $photo
 * @property integer $dt_add
 */
class MsImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ms_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo', 'dt_add'], 'required'],
            [['dt_add'], 'integer'],
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
            'photo' => 'Photo',
            'dt_add' => 'Dt Add',
        ];
    }
}
