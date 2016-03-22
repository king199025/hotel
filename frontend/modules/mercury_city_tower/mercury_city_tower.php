<?php

namespace frontend\modules\mercury_city_tower;

use yii\helpers\Url;

class mercury_city_tower extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\mercury_city_tower\controllers';

    public function init()
    {
        parent::init();
        $this->layoutPath = Url::to('@frontend/views/layouts');
        // custom initialization code goes here
    }
}
