<?php

use yii\db\Migration;

class m170822_141929_likes extends Migration
{
    public function up()
    {
        $this->createTable('{{%likes}}', [
            'id' => $this->primaryKey(11),
            'video_id' => $this->integer(11)->notNull(),
            'profile_id' => $this->integer(11)->notNull(),
            
        ]);

        $this->createIndex('video_id', '{{%likes}}', 'video_id');
        $this->addForeignKey('likes1_fk', '{{%likes}}', 'video_id', '{{%video}}', 'id', 'CASCADE');

        $this->createIndex('profile_id', '{{%likes}}', 'profile_id');
        // $this->addForeignKey('likes2_fk', '{{%likes}}', 'profile_id', '{{%profile}}', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m170822_141929_likes cannot be reverted.\n";

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
