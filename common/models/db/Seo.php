<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property integer $id
 * @property string $title
 * @property string $descr
 * @property string $seo_key
 * @property string $keywords
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descr', 'seo_key'], 'required'],
            [['title', 'descr'], 'string', 'max' => 255],
            [['seo_key', 'keywords'], 'string', 'max' => 155]
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
            'descr' => 'Description',
            'seo_key' => 'Seo Key',
            'keywords' => 'Keywords',
        ];
    }
}
