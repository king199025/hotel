<?php

namespace frontend\modules\ms\controllers;

use common\models\db\Events;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'page';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEvents(){
        $events = Events::find()->limit(4)->all();
        return $this->render('events', [
           'events' =>  $events
        ]);
    }

    public function actionAjax_get_events(){

    }
}
