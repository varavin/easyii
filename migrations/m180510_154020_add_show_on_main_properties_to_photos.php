<?php

use yii\db\Schema;
use yii\db\Migration;

class m180510_154020_add_show_on_main_properties_to_photos extends Migration
{
    public function up()
    {
		$this->addColumn('easyii_photos', 'show_on_main', Schema::TYPE_INTEGER .  " DEFAULT '0'");
		$this->addColumn('easyii_photos', 'show_on_main_order', Schema::TYPE_INTEGER .  " DEFAULT '0'");
    }

    public function down()
    {
        echo "m180510_154020_add_show_on_main_properties_to_photos cannot be reverted.\n";

        return false;
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
