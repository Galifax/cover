<?php

use yii\db\Migration;

class m170822_141014_comments extends Migration
{
    public function up()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(11),
            'parent_id' => $this->integer(11)->notNull(),
            'video_id' => $this->integer(11)->notNull(),
            'profile_id' => $this->integer(11)->notNull(),
            'content' => $this->string(255)->notNull(),
            'is_viewed' => $this->integer(11),
            'date' => $this->date()->notNull(),
            
        ]);

        $this->createIndex('parent_id', '{{%comments}}', 'parent_id');

        $this->createIndex('video_id', '{{%comments}}', 'video_id');

        $this->createIndex('profile_id', '{{%comments}}', 'profile_id');
        // $this->addForeignKey('category3_fk', '{{%comments}}', 'profile_id', '{{%profile}}', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m170822_141014_comments cannot be reverted.\n";

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
