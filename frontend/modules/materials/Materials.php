<?php

namespace frontend\modules\materials;

use yii\helpers\Url;

class Materials extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\materials\controllers';

    public function init()
    {
        parent::init();
        $this->layoutPath = Url::to('@frontend/views/layouts');
        // custom initialization code goes here
    }
}
