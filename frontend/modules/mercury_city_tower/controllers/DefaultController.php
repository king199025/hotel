<?php

namespace frontend\modules\mercury_city_tower\controllers;

use common\models\db\MercuryCityTower;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'page';
    public function actionIndex()
    {
        $img = MercuryCityTower::find()->one();
        return $this->render('index',
            [
                'img' =>$img->images
            ]);
    }
}
