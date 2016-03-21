<?php

use yii\db\Migration;
use yii\db\Schema;

class m160319_115537_create_materials_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('materials', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_update' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'type' => Schema::TYPE_STRING . '(255) Default "page"',
            'status' => Schema::TYPE_INTEGER . '(2) Default 0',
            'photo' => Schema::TYPE_STRING . '(255) ',

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('materials');
    }
}
