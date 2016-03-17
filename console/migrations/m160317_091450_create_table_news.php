<?php

use yii\db\Migration;
use yii\db\Schema;

class m160317_091450_create_table_news extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('news', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'images' => Schema::TYPE_STRING . '(255) NOT NULL',
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'text' => Schema::TYPE_TEXT . ' NOT NULL',
            'lang_id' => Schema::TYPE_INTEGER . '(5) NOT NULL',
            'cat_id' => Schema::TYPE_INTEGER. '(11) NOT NULL'

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('news');
    }
}
