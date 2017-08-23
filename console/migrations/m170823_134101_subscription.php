<?php

use yii\db\Migration;

class m170823_134101_subscription extends Migration
{
    public function up()
    {
        $this->createTable('{{%subscription}}', [
            'id' => $this->primaryKey(11),
            'my_profile_id' => $this->integer(11)->notNull(),
            'user_profile_id' => $this->integer(11)->notNull(),
            'date' => $this->dateTime()->notNull(),
         ]);

    $this->createIndex('my_profile_id', '{{%subscription}}', 'my_profile_id');
    $this->addForeignKey('my_profile_fk', '{{%subscription}}', 'my_profile_id', '{{%profile}}', 'id', 'CASCADE');

    $this->createIndex('user_profile_id', '{{%subscription}}', 'user_profile_id');
    $this->addForeignKey('user_profile_fk', '{{%subscription}}', 'user_profile_id', '{{%profile}}', 'id', 'CASCADE');
    }


    public function down()
    {
        echo "m170823_134101_subscription cannot be reverted.\n";

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
