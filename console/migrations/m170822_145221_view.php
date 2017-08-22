<?php

use yii\db\Migration;

class m170822_145221_view extends Migration
{
    public function up()
    {
         $this->createTable('{{%view}}', [
            'id' => $this->primaryKey(11),
            'video_id' => $this->integer(11)->notNull(),
            'ip' => $this->string(255)->notNull(),
            'date' => $this->date()->notNull(),
            
        ]);

        $this->createIndex('video_id', '{{%view}}', 'video_id');
        $this->addForeignKey('view_fk', '{{%view}}', 'id', '{{%video}}', 'id', 'CASCADE');
        
    }

    public function down()
    {
        echo "m170822_145221_view cannot be reverted.\n";

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
