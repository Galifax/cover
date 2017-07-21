<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "view".
 *
 * @property integer $id
 * @property integer $video_id
 * @property integer $views
 *
 * @property Video $video
 */
class View extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_id', 'views'], 'required'],
            [['video_id', 'views'], 'integer'],
            [['video_id'], 'exist', 'skipOnError' => true, 'targetClass' => Video::className(), 'targetAttribute' => ['video_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'video_id' => 'Video ID',
            'views' => 'Views',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideo()
    {
        return $this->hasOne(Video::className(), ['id' => 'video_id']);
    }
    public function getProfile()
    {
        return $this->hasOne(Video::className(), ['id' => 'user_id']);
    }
}
