<?php

use yii\db\Migration;
use yii\db\Schema;

class m160321_075012_create_options_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('options', [
            'id' => Schema::TYPE_PK,
            'opt_key' => Schema::TYPE_STRING . '(255) NOT NULL',
            'opt_title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'opt_value' => Schema::TYPE_STRING . '(255) NOT NULL',
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_update' => Schema::TYPE_INTEGER . '(11) NOT NULL',

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('options');
    }
}
