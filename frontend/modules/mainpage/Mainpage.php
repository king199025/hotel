<?php

namespace frontend\modules\mainpage;

use yii\helpers\Url;

class Mainpage extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\mainpage\controllers';

    public function init()
    {
        parent::init();
        $this->layoutPath = Url::to('@frontend/views/layouts');
        // custom initialization code goes here
    }
}
