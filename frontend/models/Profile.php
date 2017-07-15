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
    public function rules()
    {
        return [
            [['user_id', 'nickname', 'name', 'surname', 'avatar', 'born', 'favorites', 'about_myself', 'contact', 'date_registerated', 'floor'], 'required'],
            [['user_id',], 'integer'],
            [['date_registerated', 'born'],  'safe'],
            [['nickname', 'name', 'surname', 'avatar', 'about_myself', 'contact', 'favorites', 'floor' ], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'nickname' => 'Nickname',
            'name' => 'Name',
            'surname' => 'Surname',
            'avatar' => 'Avatar',
            'born' => 'Born',
            'favorites' => 'Favorites',
            'floor' => 'Floor',
            'about_myself' => 'About_myself',
            'contact' => 'Contact',
            'date_registerated' => 'Date Registerated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
}
