<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Profile;
use frontend\models\User;
use frontend\models\Video;
use frontend\models\View;
use frontend\models\UploadForm;
use frontend\models\UploadFile;
use yii\web\UploadedFile;
use yii\db\ActiveQuery;


/**
 * Site controller
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors(){
   return [
  'access' => [
   'class' => AccessControl::className(),
   'rules' => [
    [
    'allow' => true,
    'roles' => ['@']
    ]
   ]
  ]
 ];
 }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $ava = Yii::$app->request->get('ava');
        if ($ava){
            $delete = Profile::findOne($ava);
            if ($delete){ 
              $delete->avatar='';
              $delete->save();  
            }
            
        }
        $random = Video::find()->orderBy('rand()')->limit(3)->with('profile','view')->all();
        $model = Profile::find()->where(['user_id' =>Yii::$app->user->id])->with('user')->one();
        
        return $this->render('index', compact('model','random'));
    }
    
     public function actionMessage()
    {
        return $this->render('message');
    }
     public function actionUpload()
    {
      $model = new Video();

      if($model->load(Yii::$app->request->post())){
      $model->file = UploadedFile::getInstance($model, 'file');
      $model->file->saveAs('uploads/ '. $model->file->baseName . '.' .$model->file->extension);
      $model->src = 'uploads/' .$model->file->baseName . '.' .$model->file->extension;
      $model->save();
        return $this->redirect(['/video/view', 'id' => $model->id]);
        } 
       if(Yii::$app->request->isAjax){
        $this->layout=false;
        return $this->renderAjax('upload', compact('model'));
        }else{
          return $this->render('upload', compact('model'));
        }
      }

      public function actionEdit()
     {
      $this->layout=false;
      $model = Profile::find()->where(['user_id' =>Yii::$app->user->id])->with('user')->one();
      if($model->load(Yii::$app->request->post())){
    
      $model->file = UploadedFile::getInstance($model, 'file'); 
      if($model->file){
          if (file_exists(substr($model->avatar, 1))){
        unlink(substr($model->avatar, 1));
      }
      $model->file->saveAs('avatars/'.$model->file->baseName . '.' .$model->file->extension);
      
      $model->avatar = '/avatars/' .$model->file->baseName . '.' .$model->file->extension;
     }
      $model->save();
          return $this->redirect(['/profile']);
        } 
        return $this->renderAjax('edit', compact('model'));
      }
    public function actionUploadFile()
    {
      $this->layout=false;
        $model = Profile::findOne($id);
        if ($model->load(Yii::$app->request->post())){
            $model->save();
            $this->redirect();
        }
        return $this->render('uploadfile');
    }
    public function actionUpdate($id)
    {
        $this->layout=false;
        $model = Video::findOne($id);
        if ($model->load(Yii::$app->request->post())){
            $model->save();
            $this->redirect(['/profile/my-videos']);
        }
        return $this->renderAjax('update', compact('model'));
    }
    public function actionMyVideos()
    {
        $del = Yii::$app->request->get('del');
        if ($del){
            $delete = Video::findOne($del);
            if ($delete){ 
              $delete->delete();  
            }
            
        }
        $model = Video::find()->with('view')->innerjoinWith(['profile'=> function(ActiveQuery $query){
            $query->where(['user_id'=>Yii::$app->user->id]);
        }])->all();
        
        return $this->render('my-videos', compact('model'));
    }

    public function actionFavorites()
    {   
        $model = Video::find()->with('profile')->joinWith(['favorites.profile' =>
            function (ActiveQuery $query){
            $query->where(['user_id'=>Yii::$app->user->id]);
      }])->all();
      
        return $this->render('favorites', compact('model'));
    }
    public function actionTest()
    {   
         if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('test', [
                'model' => $model,
            ]);
        }
    }

}
