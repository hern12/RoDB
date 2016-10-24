<?php

use yii\db\Migration;

class m161015_145449_add_images_column_to_monsters extends Migration
{
    public function up()
    {
        $this->addColumn('monsters', 'images', 'VARCHAR(100) AFTER monster_id');
    }

    public function down()
    {
        echo "m161015_145449_add_images_column_to_monsters cannot be reverted.\n";

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
