<?php

use yii\db\Migration;
use yii\db\Schema;

class m160318_102432_create_ms_img_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ms_img', [
            'id' => Schema::TYPE_PK,
            'photo' => Schema::TYPE_STRING . '(155) NOT NULL',
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('ms_img');
    }
}
