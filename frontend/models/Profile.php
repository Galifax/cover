<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $nickname
 * @property string $name
 * @property string $surname
 * @property integer $age
 * @property string $date_registerated
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }


    /**
     * @inheritdoc
     */
    public $file, $file2;
    public function rules()
    {
        return [

            [['id',], 'integer'],
            [['file', 'file2',], 'file'],
            [['nickname', 'name', 'surname', 'avatar', 'background', 'about_myself', 'country', 'contacts', 'favorites', 'floor' ], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => 'Nickname',
            'name' => 'Name',
            'surname' => 'Surname',
            'avatar' => 'Avatar',
            'background' => 'Background',
            'country' => 'Country',
            'favorites' => 'Favorites',
            'floor' => 'Floor',
            'about_myself' => 'About_myself',
            'contacts' => 'Contact',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
    public function getVideo()
    {
        return $this->hasOne(Video::className(), ['profile_id' => 'id']);
    }

      public function getVideos()
    {
        return $this->hasMany(Video::className(), ['profile_id' => 'id']);
    }


    public function getComments()
    {
        return $this->hasOne(Comments::className(), ['profile_id' => 'id']);
    }

    public function getFavorites()
    {
        return $this->hasMany(Favorites::className(), ['profile_id' => 'id']);
    }
    public function getSubscription()
    {
        return $this->hasMany(Subscription::className(), ['my_profile_id' => 'id']);
    }
    public function getSubscriptionUser()
    {
        return $this->hasMany(Subscription::className(), ['user_profile_id' => 'id']);
    }
    
}
