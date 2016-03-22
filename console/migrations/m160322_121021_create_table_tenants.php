<?php

use yii\db\Migration;
use yii\db\Schema;

class m160322_121021_create_table_tenants extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('tenants', [
            'id' => Schema::TYPE_PK,
            'level' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'images' => Schema::TYPE_STRING . '(255) NOT NULL',
            'logo_company' => Schema::TYPE_STRING . '(255) NOT NULL',
            'site_company' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('tenants');
    }
}
