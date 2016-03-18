<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 18.03.2016
 * Time: 9:54
 */

namespace frontend\widgets;


use yii\base\Widget;

class FooterMain extends Widget
{
    public function run(){
        return $this->render('layouts/footer_main');
    }
}