<?php

use yii\db\Migration;

class m170822_141013_video extends Migration
{
    public function up()
    {
         $this->createTable('{{%video}}', [
            'id' => $this->primaryKey(11),
            'profile_id' => $this->integer(11)->notNull(),
            'src' => $this->string(255)->notNull(),
            'preloader' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->string(1000)->notNull(),
            'date' => $this->date()->notNull(),
            'category_id' => $this->integer(11)->notNull(),
            'views' => $this->integer(11),
            
        ]);

        $this->createIndex('profile_id', '{{%video}}', 'profile_id');
        // $this->addForeignKey('video1_fk', '{{%video}}', 'profile_id', '{{%profile}}', 'id', 'CASCADE');

        $this->createIndex('category_id', '{{%video}}', 'category_id');
        $this->addForeignKey('video2_fk', '{{%video}}', 'category_id', '{{%category}}', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m170822_143106_video cannot be reverted.\n";

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
