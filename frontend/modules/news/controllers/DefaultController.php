<?php

namespace frontend\modules\news\controllers;

use common\classes\Helper;
use common\models\db\News;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $lang;
    public $layout = 'page';
    public $limit = 1;

    public function beforeAction($action)
    {
        $this->lang = Helper::getLangId();
        return parent::beforeAction($action);
    }


    public function actionIndex()
    {
        $query = News::find();

        $newsCount = $query->where(['lang_id' => $this->lang])->count();

        $news = $query
            ->where(['lang_id' => $this->lang])
            ->limit($this->limit)
            ->orderBy('dt_add DESC')
            ->all();

        $page = 1;
        return $this->render('index',
            [
                'news' => $news,
                'newsCount' => $newsCount,
                'page' => $page,
                'limit' => $this->limit,
            ]);
    }

    public function actionView(){

        return $this->render('view',
            [
                'news' => News::findOne($_GET['id']),
            ]
        );
    }

    public function actionAjax_get_news(){
        $query = News::find();

        $newsCount = $query->where(['lang_id' => $this->lang])->count();

        $news = $query
            ->where(['lang_id' => $this->lang])
            ->offset($_POST['page'] * $this->limit)
            ->limit($this->limit)
            ->orderBy('dt_add DESC')
            ->all();

        $page = $_POST['page'] + 1;
        return $this->renderPartial('ajax_index',
            [
                'news' => $news,
                'newsCount' => $newsCount,
                'page' => $page,
                'limit' => $this->limit,
            ]);
    }
}