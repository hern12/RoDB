<?php

use yii\db\Migration;

class m160927_164619_RoDB extends Migration
{
    public function up()
    {

        $this->createTable('monsters',[
            'monster_id' => 'pk',
            'monster_name' => 'string NOT NULL',
            'monster_hp' => 'int',
            'monster_race' => 'string',
            'monster_property'  => 'string',
            'monster_size'  => 'string',
            'monster_base_exp'  => 'int',
            'monster_job_exp'  => 'int',
            'monster_drop_item' => 'string'
        ]);

    }

    public function down()
    {
        $this->dropTable('monsters');
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
