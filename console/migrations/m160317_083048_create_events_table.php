<?php

use yii\db\Migration;
use yii\db\Schema;

class m160317_083048_create_events_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('events', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'dt_add' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_event' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'descr' => Schema::TYPE_TEXT ,
            'user_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'photo' => Schema::TYPE_STRING . '(255) ',
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('events');
    }
}
