<?php

use yii\db\Migration;

class m160318_102448_edit_column_news extends Migration
{
    public function up()
    {
        $this->alterColumn('news','images', 'string default NULL');
    }

    public function down()
    {
        echo "m160318_102448_edit_column_news cannot be reverted.\n";

        return true;
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
