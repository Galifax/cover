<?php

use yii\db\Migration;

class m170823_102150_insert extends Migration
{
    public function up()
    {
        $this->insert('category', array(
            'parent_id' => '0',
            'name' => 'Полька',
        ));
        $this->insert('category', array(
            'parent_id' => '0',
            'name' => 'Рок',
        ));
        $this->insert('category', array(
            'parent_id' => '1',
            'name' => 'Польки подгруппа 1',
        ));
        $this->insert('category', array(
            'parent_id' => '1',
            'name' => 'Польки подгруппа 2',
        ));
        $this->insert('category', array(
            'parent_id' => '2',
            'name' => 'Рока подгруппа 1',
        ));
        $this->insert('category', array(
            'parent_id' => '2',
            'name' => 'Рока подгруппа 2',
        ));


        $this->insert('video', array(
            'profile_id' => '1',
            'srс' => 'pyt/pyt',
            'preloader' => 'preloader',
            'name' => 'Video',
            'description' => 'description',
            'date' => '2003-03-04',
            'category_id' => '1',
            'views' => '10',
        ));
        $this->insert('video', array(
            'profile_id' => '1',
            'srс' => 'pyt/pyt',
            'preloader' => 'preloader',
            'name' => 'Video',
            'description' => 'description',
            'date' => '2003-04-04',
            'category_id' => '2',
            'views' => '20',
        ));
        $this->insert('video', array(
            'profile_id' => '2',
            'srс' => 'pyt/pyt',
            'preloader' => 'preloader',
            'name' => 'Video',
            'description' => 'description',
            'date' => '2003-05-04',
            'category_id' => '1',
            'views' => '5',
        ));
        $this->insert('video', array(
            'profile_id' => '2',
            'srс' => 'pyt/pyt',
            'preloader' => 'preloader',
            'name' => 'Video',
            'description' => 'description',
            'date' => '2003-06-04',
            'category_id' => '2',
            'views' => '15',
        ));
           

        // $this->insert('user', array( 
        // 'username' => 'zACz',
        // 'auth_key' => '1YR6QY8FdpTVqALGk_TGJmFkORBmpTG-',
        // 'password_hash' => '$2y$13$0Y0whW0DxQPlCUbqa7qQj.8pCmcZZuy2ey0yirRQxJ1WMnes/VnRC',
        // 'password_reset_token' => 'njrfthhhshsh',
        // 'email' => 'AC95UA@gmail.com',
        // 'status' => '10',
        // 'created_at' => '1503491102',
        // 'updated_at' => '1503491102',
        // ));
        // $this->insert('user', array( 
        // 'username' => 'Galifax',
        // 'auth_key' => 'VfOfnebvW-wZyqwFLbvgXr_mCGjmD8Gx',
        // 'password_hash' => '$2y$13$0Y0whW0DxQPlCUbqa7qQj.8pCmcZZuy2ey0yirRQxJ1WMnes/VnRC',
        // 'password_reset_token' => '$2y$13$Q5qLCKyMO6cMGxv45VAMvO7zSoaQLMq5SX.Fu1Et3iYPO4jQDkbMO',
        // 'email' => 'Agalio94@gmail.com',
        // 'status' => '10',
        // 'created_at' => '1503491314',
        // 'updated_at' => '1503491314',
        // ));

        // $this->insert('profile', array( 
        // 'nickname' => 'zACz',
        // 'name' => 'Андрей',
        // 'surname' => 'Сисёмка',
        // 'patronymic' => 'Владимирович',
        // 'floor' => 'Мужской',
        // 'country' => 'Украина',
        // 'avatar' => 'аватар',
        // 'background' => 'бэкграунд',
        // 'favorites' => 'Рамштайн',
        // 'about_myself' => 'О себе',
        // 'contacts' => 'Контакты',
        // 'last_visit' => '',
        // ));
        // $this->insert('profile', array( 
        // 'nickname' => 'Galifax',
        // 'name' => 'Андрей',
        // 'surname' => 'Хзеков',
        // 'patronymic' => 'Хзекович',
        // 'floor' => 'Мужской',
        // 'country' => 'Украина',
        // 'avatar' => 'аватар',
        // 'background' => 'бэкграунд',
        // 'favorites' => 'Падиниц',
        // 'about_myself' => 'О себе',
        // 'contacts' => 'Контакты',
        // 'last_visit' => '',
        // ));



        $this->insert('comments', array( 
        'parent_id' => '0',
        'video_id' => '1',
        'profile_id' => '1',
        'content' => 'Привет Адзын',
        'is_viewed' => '1',
        'date' => '2003-06-04',
        ));
        $this->insert('comments', array( 
        'parent_id' => '1',
        'video_id' => '1',
        'profile_id' => '2',
        'content' => ' Ответ Привету Адзын',
        'is_viewed' => '1',
        'date' => '2003-06-05',
        ));
        $this->insert('comments', array( 
        'parent_id' => '0',
        'video_id' => '2',
        'profile_id' => '2',
        'content' => 'Привет Два',
        'is_viewed' => '1',
        'date' => '2003-06-06',
        ));
        $this->insert('comments', array( 
        'parent_id' => '1',
        'video_id' => '2',
        'profile_id' => '1',
        'content' => 'Ответ привету Два',
        'is_viewed' => '1',
        'date' => '2003-06-07',
        ));


        $this->insert('favorites', array( 
        'video_id' => '1',
        'profile_id' => '2',
        'date' => '2003-06-08',
        ));
        $this->insert('favorites', array( 
        'video_id' => '3',
        'profile_id' => '2',
        'date' => '2003-06-09',
        ));


        $this->insert('likes', array( 
        'video_id' => '1',
        'profile_id' => '1',
        ));
        $this->insert('likes', array( 
        'video_id' => '1',
        'profile_id' => '2',
        ));
          $this->insert('likes', array( 
        'video_id' => '3',
        'profile_id' => '1',
        ));
        $this->insert('likes', array( 
        'video_id' => '3',
        'profile_id' => '2',
        ));


     /*   $this->insert('view', array( 
        'id' => '1',
        'video_id' => '1',
        'ip' => '225255',
        'date' => '2003-06-10',
        ));
        $this->insert('view', array( 
        'id' => '2',
        'video_id' => '2',
        'ip' => '225256',
        'date' => '2003-06-10',
        ));
        $this->insert('view', array( 
        'id' => '3',
        'video_id' => '3',
        'ip' => '225257',
        'date' => '2003-06-10',
        ));
        $this->insert('view', array( 
        'id' => '4',
        'video_id' => '4',
        'ip' => '225258',
        'date' => '2003-06-10',
        ));
    */
    }

    public function down()
    {
        echo "m170823_102150_insert cannot be reverted.\n";

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
