<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 16.03.2016
 * Time: 16:03
 */

namespace common\classes;


use common\models\db\Seo;
use common\models\Lang;
use common\models\User;

class Helper
{

    public static function getUserName($id)
    {
        $user = User::find()->where(['id' => $id])->one();
        if (isset($user->username)) {
            return $user->username;
        } else {
            return false;
        }
    }

    public static function getMainSeo()
    {
        return Seo::find()->where(['seo_key'=>'main_page'])->one();
    }

    public static function getLangId()
    {
        return Lang::findOne(['local' => \Yii::$app->language])->id;
    }

}