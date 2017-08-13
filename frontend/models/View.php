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
            [['video_id'], 'required'],
            [['video_id'], 'integer'],
            [['ip'], 'string', 'max' => 255],
            [['date'], 'safe'],

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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideo()
    {
        return $this->hasOne(Video::className(), ['id' => 'video_id']);
    }
}
