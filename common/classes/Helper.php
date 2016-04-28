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


    public static function showDate($date){
        $day = getdate($date);

        switch($day['mon']){
            case 1: $mon = 'января';break;
            case 2: $mon = 'февраля';break;
            case 3: $mon = 'марта';break;
            case 4: $mon = 'апреля';break;
            case 5: $mon = 'мая';break;
            case 6: $mon = 'июня';break;
            case 7: $mon = 'июля';break;
            case 8: $mon = 'августа';break;
            case 9: $mon = 'сентября';break;
            case 10: $mon = 'октября';break;
            case 11: $mon = 'ноября';break;
            case 12: $mon = 'декабря';break;
        }

        return $day['mday'] . ' ' . $mon . ' ' . $day['year'] ;
    }

}