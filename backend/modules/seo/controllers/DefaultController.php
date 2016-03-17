<?php

namespace backend\modules\seo\controllers;

use common\models\db\Seo;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMain_page(){
        $model = Seo::find()->where(['seo_key' => 'main_page'])->one();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
        }
        return $this->render('main_page', [
            'model' => $model
        ]);
    }
}
