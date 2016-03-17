<?php

namespace backend\widgets;

use yii\base\Widget;

class TimePicer extends Widget
{

    public $name = 'time';

    public function run()
    {
        return $this->render('timepicer/index', [
            'name' => $this->name
        ]);
    }

}