<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\easyii\modules\blog\models\Blog;

class m180516_235512_add_blog_module extends Migration
{
    public function up()
    {
		$this->createTable(Blog::tableName(), [
			'blog_id' => 'pk',
			'title' => Schema::TYPE_STRING . '(128) NOT NULL',
			'image' => Schema::TYPE_STRING . '(128) DEFAULT NULL',
			'short' => Schema::TYPE_STRING . '(1024) DEFAULT NULL',
			'text' => Schema::TYPE_TEXT . ' NOT NULL',
			'slug' => Schema::TYPE_STRING . '(128) DEFAULT NULL',
			'time' => Schema::TYPE_INTEGER .  " DEFAULT '0'",
			'views' => Schema::TYPE_INTEGER . " DEFAULT '0'",
			'status' => Schema::TYPE_BOOLEAN . " DEFAULT '1'"
		]);
		$this->createIndex('slug', Blog::tableName(), 'slug', true);
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
