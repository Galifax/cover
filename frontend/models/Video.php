<?php

namespace frontend\models;

use Yii;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profile_id', 'src', 'name', 'description', 'date'], 'required'],
            [['profile_id'], 'integer'],
            [['date'], 'safe'],
            [['src'], 'string', 'max' => 55],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['profile_id' => 'id']],
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
    public function getProfile0()
    {
        return $this->hasOne(User::className(), ['id' => 'profile_id']);
    }
}
