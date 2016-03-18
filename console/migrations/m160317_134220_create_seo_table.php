<?php

use yii\db\Migration;
use yii\db\Schema;

class m160317_134220_create_seo_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('seo', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'descr' => Schema::TYPE_STRING . '(255) NOT NULL',
            'seo_key' => Schema::TYPE_STRING . '(155) NOT NULL',
            'keywords' => Schema::TYPE_STRING . '(155) NOT NULL',

        ], $tableOptions);

        $this->batchInsert('seo', ['title', 'descr', 'seo_key', 'keywords'], [
            ['Главная заголовок', 'Главная описание', 'main_page', 'ключ 1, ключ 2'],
        ]);
    }

    public function down()
    {
        $this->dropTable('seo');
    }
}
