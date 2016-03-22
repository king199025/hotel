<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "mercury_city_tower".
 *
 * @property string $images
 */
class MercuryCityTower extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mercury_city_tower';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['images'], 'required'],
            [['images'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'images' => 'Images',
        ];
    }
}
