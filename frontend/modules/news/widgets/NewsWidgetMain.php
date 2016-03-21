<?php

namespace frontend\modules\news\widgets;
use common\classes\Debug;
use common\classes\Helper;
use common\models\db\News;
use yii\base\Widget;

class NewsWidgetMain extends Widget
{
    public function run(){
        $news = News::find()->where(['lang_id' => Helper::getLangId()])->limit(7)->orderBy('dt_add DESC')->all();
        //Debug::prn($news);
        return $this->render('news',['news' => $news]);
    }
}