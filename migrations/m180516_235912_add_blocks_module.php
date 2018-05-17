<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\easyii\modules\blocks\models\Category;
use yii\easyii\modules\blocks\models\Item;

class m180516_235912_add_blocks_module extends Migration
{
    public function up()
    {
		$this->createTable(Category::tableName(), [
			'category_id' => 'pk',
			'title' => Schema::TYPE_STRING . '(128) NOT NULL',
			'image' => Schema::TYPE_STRING . '(128) DEFAULT NULL',
			'order_num' => Schema::TYPE_INTEGER,
			'slug' => Schema::TYPE_STRING . '(128) DEFAULT NULL',
			'tree' => Schema::TYPE_INTEGER,
			'lft' => Schema::TYPE_INTEGER,
			'rgt' => Schema::TYPE_INTEGER,
			'depth' => Schema::TYPE_INTEGER,
			'status' => Schema::TYPE_BOOLEAN . " DEFAULT '1'"
		]);
		$this->createIndex('slug', Category::tableName(), 'slug', true);

		$this->createTable(Item::tableName(), [
			'item_id' => 'pk',
			'category_id' => Schema::TYPE_INTEGER,
			'title' => Schema::TYPE_STRING . '(128) NOT NULL',
			'link' => Schema::TYPE_STRING . '(1024) NOT NULL',
			'image' => Schema::TYPE_STRING . '(128) DEFAULT NULL',
			'short' => Schema::TYPE_STRING . '(1024) DEFAULT NULL',
			'text' => Schema::TYPE_TEXT . ' NOT NULL',
			'slug' => Schema::TYPE_STRING . '(128) DEFAULT NULL',
			'time' => Schema::TYPE_INTEGER .  " DEFAULT '0'",
			'views' => Schema::TYPE_INTEGER . " DEFAULT '0'",
			'status' => Schema::TYPE_BOOLEAN . " DEFAULT '1'"
		]);
		$this->createIndex('slug', Item::tableName(), 'slug', true);

    }

    public function down()
    {
        echo "m180516_235912_add_blocks_module cannot be reverted.\n";

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
