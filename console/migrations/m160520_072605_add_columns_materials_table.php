<?php

use yii\db\Migration;
use yii\db\Schema;

class m160520_072605_add_columns_materials_table extends Migration
{
    public function up()
    {
        $this->addColumn('materials','short_description', Schema::TYPE_STRING . '(255) NOT NULL');
        $this->addColumn('materials','slug', Schema::TYPE_STRING . '(255) NOT NULL');
    }

    public function down()
    {
        $this->dropColumn('materials','short_description');
        $this->dropColumn('materials','slug');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
