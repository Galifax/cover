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
use frontend\models\Subscription;
use yii\db\ActiveQuery;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

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
        if($comments->load(Yii::$app->request->post()))
        {
            $comments->content = iconv("UTF-8", "CP1252", $_POST['Comments']['content']);
            $comments->save();
            \Yii::$app->getSession()->setFlash('success', 'Сообщение отправлено');
            $comments = new Comments();
        }
        $profile = Profile::find()->where(['id' => Yii::$app->user->id])->one();


        if($_GET['idproflike']){
            $like = Likes::find()->where(['video_id' => $_GET['id'], 'profile_id' => $_GET['idproflike']])->count();
            if($like == 0){
                $like = new Likes();
                $like->video_id = $_GET['id'];
                $like->profile_id = $_GET['idproflike'];
                $like->save();
            }else{
                $like = Likes::find()->where(['video_id' => $_GET['id'], 'profile_id' => $_GET['idproflike']])->one();
                $like->delete();
            }
        }

        $likes = Likes::find()->where(['video_id' => $id, 'profile_id' => $profile->id])->count();


     

        
        

        $model = Video::find()->where(['id' => $id])->with(['profile.videos', 'category.video' 
            => function($query) use($id){
            $query->where(['!=', 'id', $id ])->limit(3)->with('profile');
        }, 'likes'])->one();


        

         if($_GET['idprofsub']){
            $sub = Subscription::find()->where(['my_profile_id' => $_GET['idprofsub'], 'user_profile_id' => $_GET['idsubuser']])->count();
            if($sub == 0){
                $sub = new Subscription();
                $sub->my_profile_id = $_GET['idprofsub'];
                $sub->user_profile_id = $_GET['idsubuser'];
                $sub->date = date("Y-m-d H:i:s ");
                $sub->save();
            }else{
              $sub = Subscription::find()->where(['my_profile_id' => $_GET['idprofsub'], 'user_profile_id' => $_GET['idsubuser']])->one();
                $sub->delete();
            }
        }
        $subs =   $sub = Subscription::find()->where(['my_profile_id' =>$profile->id, 'user_profile_id' => $model->profile->id])->count();


        $comm = Comments::find()->with(['comments.profile', 'profile'])->where(['video_id' => $id])->limit(2)->andWhere(['parent_id' => 0])->all();
        
        $dataProvider = new ActiveDataProvider([
            'query' => Comments::find()->with(['comments.profile', 'profile'])->where(['video_id' => $id])->andWhere(['parent_id' => 0])->orderBy(['id' => SORT_DESC]),
            'pagination' => [
            'pageSize' => 10,
            ]


            ]);
        
        $views = View::find()->where(['ip' => $_SERVER['REMOTE_ADDR'], 'video_id' => $id])->one();

        if(!$views){
            $views = new View();
            $views->video_id = $id;
            $views->ip = $_SERVER['REMOTE_ADDR'];
            $views->date = date('Y-m-d H:i:s');
            $views->save();
        }
        $views = View::find()->where(['video_id' => $id])->count();

        return $this->render('view', compact('dataProvider', 'model', 'comm', 'pages', 'id', 'likes', 'comments', 'profile', 'subscription', 'comm', 'subs', 'views'));
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

        public function actionComments($num, $id){
              $delcom = Yii::$app->request->post('delcom');
        if($delcom){
            Comments::find()->where(['id' => $delcom])->one()->delete();
            Comments::deleteAll(['parent_id' => $delcom]);
         
        }
            $comment = new Comments();
             if($comment->load(Yii::$app->request->post()))
            {
                $comment->content = $_POST['Comments']['content'];
                $comment->save();
                \Yii::$app->getSession()->setFlash('success', 'Сообщение отправлено');
                $comment = new Comments();
            }
             $model = Video::find()->where(['id' => $id])->with(['profile.videos'])->one();
             $profile = Profile::find()->where(['id' => Yii::$app->user->id])->one();
             $comm = Comments::find()->with(['comments.profile', 'profile'])->where(['video_id' => $id, 'parent_id' => 0])->offset($num)->limit(10)->all();
           
            return $this->renderAjax('comments', compact('model', 'comment', 'profile', 'comm'));
    }

    public function actionTest()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Comments::find()->where(['parent_id' => 0])->with('comments.profile', 'profile'),
            'pagination' => [
            'pageSize' => 20,
            ]


            ]);

        return $this->render('comments', compact('dataProvider'));
    }

}
