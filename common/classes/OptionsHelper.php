<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 21.03.2016
 * Time: 11:28
 */

namespace common\classes;


use common\models\db\Options;

class OptionsHelper
{

    public static function get_option($key, $default = false){
        $opt = Options::find()->where(['opt_key' => $key])->one();
        if(!empty($opt)){
            return $opt->opt_value;
        }
        else {
            if($default){
                return $default;
            }
            else {
                return false;
            }
        }
    }

    public static function set_option($key, $value){
        $opt = Options::find()->where(['opt_key' => $key])->one();
        $opt->opt_value = $value;
        if($opt->save()){
            return true;
        }
        else {
            return false;
        }
    }

}