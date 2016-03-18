<?php

namespace frontend\modules\news\controllers;

use common\classes\Debug;
use common\classes\Helper;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'page';

    public function actionIndex()
    {
        $lang = Helper::getLangId();
        Debug::prn($lang);
        return $this->render('index');
    }
}
