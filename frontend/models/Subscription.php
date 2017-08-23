<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subscription".
 *
 * @property integer $id
 * @property integer $my_profile_id
 * @property integer $user_profile_id
 * @property string $date
 *
 * @property Profile $myProfile
 * @property Profile $userProfile
 */
class Subscription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscription';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['my_profile_id', 'user_profile_id', 'date'], 'required'],
            [['my_profile_id', 'user_profile_id'], 'integer'],
            [['date'], 'safe'],
            [['my_profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['my_profile_id' => 'id']],
            [['user_profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['user_profile_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'my_profile_id' => 'My Profile ID',
            'user_profile_id' => 'User Profile ID',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'my_profile_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'user_profile_id']);
    }
}
