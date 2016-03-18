<?php

namespace frontend\modules\ms\controllers;

use common\classes\Debug;
use common\models\db\Events;
use yii\filters\VerbFilter;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'ajax_get_events' => ['post'],
                ],
            ],
        ];
    }

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
        $events = Events::find()
            ->offset($_POST['count'] * 4)
            ->limit(4)
            ->all();
        echo $this->renderPartial('ajax_events', [
            'events' => $events
        ]);
    }
}
