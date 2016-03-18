<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 18.03.2016
 * Time: 10:00
 */

namespace frontend\widgets;


use yii\base\Widget;

class FooterPages extends Widget
{
    public function run(){
        return $this->render('layouts/footer_pages');
    }
}