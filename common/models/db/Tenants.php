<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "tenants".
 *
 * @property integer $id
 * @property integer $level
 * @property string $images
 * @property string $logo_company
 * @property string $site_company
 */
class Tenants extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tenants';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level', 'images', 'logo_company', 'site_company'], 'required'],
            [['level'], 'integer'],
            [['images', 'logo_company', 'site_company'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level' => 'Level',
            'images' => 'Images',
            'logo_company' => 'Logo Company',
            'site_company' => 'Site Company',
        ];
    }
}
