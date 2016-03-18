<?php
namespace frontend\modules\ms\widgets;

use common\models\db\MsImg;
use common\models\db\MsSlider;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 18.03.2016
 * Time: 13:37
 */
class MercurySpace extends Widget
{

    public function run()
    {
        $slider = MsSlider::find()->all();
        $img = MsImg::find()->all();
        return $this->render('ms', [
            'slider' => $slider,
            'img' => $img
        ]);
    }

}