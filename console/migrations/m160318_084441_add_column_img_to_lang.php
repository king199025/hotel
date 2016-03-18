<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m160318_084441_add_column_img_to_lang extends Migration
{
    public function up()
    {
        $this->addColumn('lang','img', Schema::TYPE_STRING . '(255) NOT NULL');
    }

    public function down()
    {
        $this->dropColumn('lang','img');
    }
}
