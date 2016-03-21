<?php

namespace frontend\modules\contacts;

use yii\helpers\Url;

class Contacts extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\contacts\controllers';

    public function init()
    {
        parent::init();
        $this->layoutPath = Url::to('@frontend/views/layouts');
        // custom initialization code goes here
    }
}
