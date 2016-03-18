<?php

namespace frontend\modules\news;

use yii\helpers\Url;

class News extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\news\controllers';

    public function init()
    {
        parent::init();
        $this->layoutPath = Url::to('@frontend/views/layouts');
        // custom initialization code goes here
    }
}
