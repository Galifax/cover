<?php

use yii\db\Migration;

class m170822_141636_favorites extends Migration
{
    public function up()
    {
         $this->createTable('{{%favorites}}', [
            'id' => $this->primaryKey(11),
            'video_id' => $this->integer(11)->notNull(),
            'profile_id' => $this->integer(11)->notNull(),
            'date' => $this->date()->notNull(),
            
        ]);

        $this->createIndex('video_id', '{{%favorites}}', 'video_id');
        // $this->addForeignKey('favorites1_fk', '{{%favorites}}', 'video_id', '{{%video}}', 'id', 'CASCADE');

        $this->createIndex('profile_id', '{{%favorites}}', 'profile_id');
        // $this->addForeignKey('favorites2_fk', '{{%favorites}}', 'profile_id', '{{%profile}}', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m170822_141636_favorites cannot be reverted.\n";

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
