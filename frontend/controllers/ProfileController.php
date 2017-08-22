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
use frontend\models\Comments;
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
    public function actionIndex($id=Null, $name=Null)
    {
       $ava = Yii::$app->request->get('ava');
        if ($ava){
            $delete = Profile::findOne($ava);
            if ($delete){ 
              $delete->avatar='';
              $delete->save();
            }
            
        }
        
         $com = new Comments();
        if($com->load(Yii::$app->request->post()) && $com->save());

        $model = Profile::find()->where(['id' =>$id])->with('user', 'videos')->one();
        $comments = Comments::find()->InnerJoinWith(['profile', 'video' => function(ActiveQuery $query){
          $query->where(['video.profile_id' =>Yii::$app->user->id])->with('profile');
        }])->orderBy(['comments.id' => SORT_DESC])->all();
      //   debug($comments);
        return $this->render('index', compact('model', 'comments', 'com', 'id', 'name'));
    }
    
     public function actionMessage()
    {
        return $this->render('message');
    }
     public function actionUpload()
    {
      $model = new Video();
      $substr = substr(md5(uniqid()), 0, 20);
      $substr2 = substr(md5(uniqid()), 0, 20);

      if($model->load(Yii::$app->request->post())){

      $model->file = UploadedFile::getInstance($model, 'file');
      $model->file->saveAs('uploads/'. $substr . '.mp4');
      $model->src = '/uploads/'. $substr . '.mp4';

      $model->file2 = UploadedFile::getInstance($model, 'file2');
      $model->file2->saveAs('preloader/'. $substr2 . '.jpg');
      $model->preloader = '/preloader/'. $substr2 . '.jpg';

      $model->save();
        return $this->redirect(['/video/view', 'id' => $model->id]);
        } 
       if(Yii::$app->request->isAjax){
        return $this->renderAjax('upload', compact('model'));
        }else{
          return $this->render('upload', compact('model'));
        }
      }

      public function actionEdit()
     {
      $ava = Yii::$app->request->get('ava');
        if ($ava){
            $delete = Profile::findOne($ava);
            if ($delete){ 
              $delete->avatar='';
              $delete->save();  
              return $this->redirect(['/profile/index', 'id' => $ava]);

            }
            
        }
      $model = Profile::find()->where(['id' =>Yii::$app->user->id])->with('user')->one();
      if($model->load(Yii::$app->request->post())){
    
      $model->file = UploadedFile::getInstance($model, 'file'); 
      if($model->file){
          if (file_exists(substr($model->avatar, 1))){
        unlink(substr($model->avatar, 1));
      }
      $model->file->saveAs('avatars/'.$model->file->baseName . '.' .$model->file->extension);
      
      $model->avatar = '/avatars/' .$model->file->baseName . '.' .$model->file->extension;
     }
     $model->file2 = UploadedFile::getInstance($model, 'file2'); 
      if($model->file2){
          if (file_exists(substr($model->background, 1))){
        unlink(substr($model->background, 1));
      }
      $model->file2->saveAs('avatars/'.$model->file2->baseName . '.' .$model->file2->extension);
      
      $model->background = '/avatars/' .$model->file2->baseName . '.' .$model->file2->extension;
     }
      $model->save();
          return $this->redirect(['/profile', 'id' => $model->id, 'name' => $model->nickname]);
        } 
        if(Yii::$app->request->isAjax){
        return $this->renderAjax('edit', compact('model'));
        }else{
        return $this->render('edit', compact('model'));
        }
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
        $model = Video::findOne($id);
        if ($model->load(Yii::$app->request->post())){
            $model->save();
            $this->redirect(['/profile/my-videos']);
        }
        if(Yii::$app->request->isAjax){
        return $this->renderAjax('update', compact('model'));
        }
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
            $query->where(['profile.id'=>Yii::$app->user->id]);
        }])->all();
        
        return $this->render('my-videos', compact('model'));
    }

    public function actionFavorites()
    {   
        $model = Video::find()->with('profile')->joinWith(['favorites.profile' =>
            function (ActiveQuery $query){
            $query->where(['profile.id'=>Yii::$app->user->id]);
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
