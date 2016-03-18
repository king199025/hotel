<?php

namespace frontend\modules\news\controllers;

use common\classes\Debug;
use common\classes\Helper;
use common\models\db\News;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'page';

    public function actionIndex()
    {
        //$lang = Helper::getLangId();
        $news = News::find()
            ->where(['lang_id' => Helper::getLangId()])
            ->limit(14)
            ->orderBy('dt_add DESC')
            ->all();
        //Debug::prn($news);
        return $this->render('index',['news' => $news]);
    }

    public function actionView(){

        return $this->render('view',
            [
                'news' => News::findOne($_GET['id']),
            ]
        );
    }
}
