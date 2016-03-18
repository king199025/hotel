<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 18.03.2016
 * Time: 9:44
 */

namespace frontend\widgets;


use yii\base\Widget;

class Header extends Widget
{
    public function run(){
        return $this->render('layouts/header');
    }
}