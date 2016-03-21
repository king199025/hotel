<?php

namespace frontend\modules\contacts\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'page';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
