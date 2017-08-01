<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Video;
use frontend\models\Profile;
use frontend\models\View;
use frontend\models\likes;
use frontend\models\Comments;
use frontend\models\Favorites;
use yii\db\ActiveQuery;

/**
 * Site controller
 */
class VideoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
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
        return $this->render('index');
    }


    public function actionView($id)
    {
         $comments = new Comments();
        if($comments->load(Yii::$app->request->post()) && $comments->save());

        if(isset($_GET['favorites'])){
        $favorites = Favorites::find()->where(['video_id' => $id, 'profile_id' => Yii::$app->user->identity->id])->count();
        if($favorites == 0){
        $model1 = new Favorites();
        $model1->profile_id = Yii::$app->user->identity->id;
        $model1->video_id = $id;
        $model1->save();
           }else{
            $favorites = Favorites::find()->where(['video_id' => $id, 'profile_id' => Yii::$app->user->identity->id])->one();
            $favorites->delete();
           }
        }

        if(isset($_GET['like'])){
        $likes = Likes::find()->where(['video_id' => $id, 'profile_id' => Yii::$app->user->identity->id])->count();
        if($likes == 0){
        $model1 = new Likes();
        $model1->profile_id = Yii::$app->user->identity->id;
        $model1->video_id = $id;
        $model1->save();
           }else{
            $likes = Likes::find()->where(['video_id' => $id, 'profile_id' => Yii::$app->user->identity->id])->one();
            $likes->delete();
           }
        }
        $profile = Profile::find()->where(['id' => Yii::$app->user->id])->one();
        
    

        $model = Video::find()->where(['id' => $id])->with(['profile.videos', 'comments.profile', 'category.video.profile', 'favorites', 'view', 'likes', 'comments' => function (ActiveQuery $query){
                $query->where(['parent_id' => 0])->with('comments.profile');
            }])->one();
        // echo "<pre>";
        // print_r($model->likes);
        // echo "</pre>";
        return $this->render('view', compact('model', 'id', 'favorites', 'likes', 'comments', 'profile'));
    }
    public function actionSearch(){
            return $this->render('search');
    }
}
