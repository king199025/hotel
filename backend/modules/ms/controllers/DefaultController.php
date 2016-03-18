<?php

namespace backend\modules\ms\controllers;

use common\models\db\MsSlider;
use yii\jui\Slider;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $slider = MsSlider::find()->all();
        return $this->render('index', [
            'slider' => $slider
        ]);
    }
}
