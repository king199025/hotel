<?php

namespace frontend\modules\mainpage\controllers;

use common\classes\Debug;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        //$lang = Yii::$app->params->l;
        //Debug::prn($lang);
        Yii::$app->language = 'ru-RU';
        return $this->render('index');
    }
}
