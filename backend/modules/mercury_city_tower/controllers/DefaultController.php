<?php

namespace backend\modules\mercury_city_tower\controllers;

use common\classes\Debug;
use common\models\db\MercuryCityTower;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {   $model = MercuryCityTower::find()->one();

        if(empty($_POST)){
        }else{
            MercuryCityTower::updateAll(['images' => $_POST['img']],['id' => $model->id]);
            $model = MercuryCityTower::find()->one();
        }
        return $this->render('index',['model' => $model]);
    }

}
