<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 16.03.2016
 * Time: 16:03
 */

namespace common\classes;


use common\models\User;

class Helper
{

    public static function getUserName($id){
        $user = User::find()->where(['id'=>$id])->one();
        return $user->username;
    }

}