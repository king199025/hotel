<?php

use yii\db\Migration;
use yii\db\Schema;

class m160318_092341_create_ms_slider_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ms_slider', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'descr' => Schema::TYPE_TEXT ,
            'photo' => Schema::TYPE_STRING . '(155) NOT NULL',
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('ms_slider');
    }
}
