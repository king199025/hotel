<?php

namespace frontend\modules\materials\controllers;

use common\models\db\Materials;
use yii\web\Controller;

class DefaultController extends Controller
{

    public $layout = 'page';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShow(){
        $id = $_GET['id'];

        $model = Materials::find()->where(['id' => $id])->one();

        return $this->render('show', [
            'model' => $model
        ]);
    }
}
