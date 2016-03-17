<?php

use yii\db\Migration;
use yii\db\Schema;

class m160317_092301_create_table_category_news extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('category_news', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'lang_id' => Schema::TYPE_INTEGER . '(5) NOT NULL'

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('category_news');
    }
}
