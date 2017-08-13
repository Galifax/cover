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
use frontend\models\Category;
use frontend\models\Favorites;
use yii\db\ActiveQuery;
use yii\data\Pagination;

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

        $delcom = Yii::$app->request->post('delcom');
        if($delcom){
            Comments::find()->where(['id' => $delcom])->one()->delete();
            Comments::deleteAll(['parent_id' => $delcom]);
         
        }
        $comments = new Comments();
        if($comments->load(Yii::$app->request->post()) && $comments->save())
        {
            \Yii::$app->getSession()->setFlash('success', 'Сообщение отправлено');
            $comments = new Comments();
        }

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
        $likes = Likes::find()->where(['video_id' => $id, '+profile_id' => Yii::$app->user->identity->id])->count();
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
        
        

        $model = Video::find()->where(['id' => $id])->with(['profile.videos', 'category.video' 
            => function($query) use($id){
            $query->where(['!=', 'id', $id ])->limit(6)->with('profile');
        }, 'favorites', 'likes'])->one();

        $query = Comments::find()->with('comments.profile', 'profile')->where(['video_id' => $id])->andWhere(['parent_id' => 0]);
        // делаем копию выборки
        $countQuery = clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 4]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $comm = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        
        $views = View::find()->where(['ip' => $_SERVER['REMOTE_ADDR']])->one();

        if(empty($views->date) or date('Y-m-d H:i:s', strtotime($views->date) + 1 * 24 * 3600) < date('Y-m-d H:i:s')){
                $model->views+=1;
                $model->save();
                if(!empty($views)){
                $views->date = date('Y-m-d H:i:s');
                $views->save();
            } 
                if(empty($views)){
                $view = new View();
                $view->video_id = $id;
                $view->ip = $_SERVER['REMOTE_ADDR'];
                $view->date = date('Y-m-d H:i:s');
                $view->save();
            }
        }

      

        // echo "<pre>";
        // print_r($model->likes);
        // echo "</pre>";
        return $this->render('view', compact('model', 'comm', 'pages','id', 'favorites', 'likes', 'comments', 'profile'));
    }
    public function actionSearch($id = Null, $s = Null, $name = Null){
               $model = Video::find()->with('profile')->andFilterWhere(['like', 'video.name', $s])->joinWith(['category' => function(ActiveQuery $query) use($id){
                    $query->andFilterwhere(['category.id' => $id]);
               }])->all();
               $video = Video::find()->andFilterWhere(['like', 'video.name', $s])->count();
            $category = Category::find()->joinWith(['video' => function(ActiveQuery $query) use($s){
                $query->andFilterWhere(['like', 'video.name', $s]);
            }])->all();
            return $this->render('search', compact('model', 'category', 'video', 'name'));
    }
}
