<?php

namespace frontend\models;

use Yii;
use frontend\models\Likes;

/**
 * This is the model class for table "video".
 *
 * @property integer $id
 * @property integer $profile_id
 * @property string $src
 * @property string $name
 * @property string $description
 * @property string $date
 *
 * @property Profile $profile
 * @property User $profile0
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }
    public $file;
    public $file2;
    public $src;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profile_id', 'name', 'description', 'date', 'category_id', 'preloader'], 'required'],
            [['profile_id', 'category_id', 'views'], 'integer'],
            [['date'], 'safe'],
            [['file', 'file2' ], 'file'],
            [['name', 'src'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'profile_id' => 'Profile ID',
            'src' => 'Src',
            'name' => 'Name',
            'description' => 'Description',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'profile_id']);
    }

       public function getView()
    {
        return $this->hasOne(View::className(), ['video_id' => 'id']);
    }

      public function getLikes()
    {
        return $this->hasMany(Likes::className(), ['video_id' => 'id']);
    }
      

    
      public function getComments()
    {
        return $this->hasMany(Comments::className(), ['video_id' => 'id']);
    }

     public function getFavorites()
    {
        return $this->hasMany(Favorites::className(), ['video_id' => 'id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }


}
