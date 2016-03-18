<?php

namespace frontend\modules\ms;

use yii\helpers\Url;

class Ms extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\ms\controllers';

    public function init()
    {
        parent::init();
        $this->layoutPath = Url::to('@frontend/views/layouts');
        // custom initialization code goes here
    }
}
