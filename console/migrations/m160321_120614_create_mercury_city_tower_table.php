<?php

use yii\db\Migration;
use yii\db\Schema;

class m160321_120614_create_mercury_city_tower_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('mercury_city_tower', [
            'id' => Schema::TYPE_PK,
            'images' => Schema::TYPE_STRING . '(255) NOT NULL',

        ], $tableOptions);

        $this->insert('mercury_city_tower',['id'=>1,'images'=> '123']);
    }

    public function down()
    {
        $this->dropTable('mercury_city_tower');
    }
}
