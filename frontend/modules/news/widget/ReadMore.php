<?php

namespace frontend\modules\news\widget;
use common\classes\Debug;
use common\classes\Helper;
use common\models\db\News;
use yii\base\Widget;

class ReadMore extends Widget
{
    public $newsId;

    public function run(){
        $news = News::find()
            ->leftJoin('category_news', '`category_news`.`id` = `news`.`cat_id`')
            ->where(['!=','`news`.`id`', $this->newsId])
            ->andWhere(['`news`.`lang_id`' => Helper::getLangId(\Yii::$app->language)])
            ->limit(4)
            ->with('category_news')
            ->orderBy('dt_add DESC')
            ->all();

        //Debug::prn($news);
        //Debug::prn($news['category_news']->title);
        return $this->render('read_more',['news' => $news]);
    }
}