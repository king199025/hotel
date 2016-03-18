<?php

namespace backend\modules\ms\controllers;

use common\classes\Debug;
use common\models\db\MsImg;
use common\models\db\MsSlider;
use Yii;
use yii\jui\Slider;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $slider = MsSlider::find()->all();
        $img = MsImg::find()->all();
        return $this->render('index', [
            'slider' => $slider,
            'img' => $img
        ]);
    }

    public function actionAdd_slide(){
        $model = new MsSlider();
        if ($model->load(Yii::$app->request->post())) {
            $model->dt_add = time();
            $model->save();
            Yii::$app->session->setFlash('success', 'Слайд добавлен');
            return $this->redirect(['index']);
        }
        return $this->render('add_slider', [
            'model' => $model
        ]);
    }

    public function actionDel_slide(){
        MsSlider::deleteAll(['id' => $_GET['id']]);
        return $this->redirect(['index']);
    }

    public function actionAdd_img(){
        $model = new MsImg();
        if ($model->load(Yii::$app->request->post())) {
            $model->dt_add = time();
            $model->save();
            Yii::$app->session->setFlash('success', 'Изображение добавлено');
            return $this->redirect(['index']);
        }
        return $this->render('add_img', [
            'model' => $model
        ]);
    }

    public function actionDel_img(){
        MsImg::deleteAll(['id' => $_GET['id']]);
        return $this->redirect(['index']);
    }
}
