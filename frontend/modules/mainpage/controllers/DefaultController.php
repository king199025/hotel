<?php

namespace frontend\modules\mainpage\controllers;

use common\classes\Debug;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'main_page';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
