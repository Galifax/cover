<?php

use yii\db\Migration;

class m170822_142109_profile extends Migration
{
    public function up()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->integer(11),
            'nickname' => $this->string(255)->notNull(),
            'name' => $this->string(255),
            'surname' => $this->string(255),
            'patronymic' => $this->string(255),
            'floor' => $this->string(255),
            'born' => $this->string(10),
            'country' => $this->string(255),
            'avatar' => $this->string(255),
            'background' => $this->string(255),
            'favorites' => $this->string(255),
            'about_myself' => $this->string(255),
            'contacts' => $this->string(255),
            'last_visit' => $this->date(),
            
        ]);
        $this->createIndex('id', '{{%profile}}', 'id');
        $this->addForeignKey('profile_fk', '{{%profile}}', 'id', '{{%user}}', 'id', 'CASCADE');
        $this->addPrimaryKey('profile_id_fk', '{{%profile}}', 'id');
    }

    public function down()
    {
        echo "m170822_142109_profile cannot be reverted.\n";

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
