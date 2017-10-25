<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\widgets\Pjax;
use frontend\models\Profile;
use frontend\models\Category;
use frontend\models\Comments;
use yii\bootstrap\Modal;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $profile = Profile::find()->where(['id' =>Yii::$app->user->id])->with('subscription.profile')->one();?>
    <?php $category = Category::find()->where(['parent_id' =>0])->all();?>
    <?php $count_comments = Comments::find()->where(['profile_id' => Yii::$app->user->id])->andWhere(['is_viewed' => Null])->count(); ?>
    </head>

<body>
<?php $this->beginBody() ?>

<div class="wrap color-1" style="padding-bottom: 0px;">


    <!-- Second navbar for sign in -->
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header text-center">

                <a id="sidebar-r" class="sidebar-toggle fa fa-user-o my-proffile-btn"></a>

                <a href="/" style="text-decoration: none">
                    <img class="logo-img" src="/img/logo.png">
                </a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="col-sm-6 col-sm-push-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>

                    <form class="col-md-6 col-sm-push-1"action="<?=Url::to(['/video/search'])?>">
                        <div class="row">
                            <div id="custom-search-input">
                                <div class="input-group ">
                                    <input type="text" class="search-query form-control" placeholder="Поиск" value="<?=$_GET['s']?>" name="s"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-my-search" type="submit">
                                            <span class=" glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
            </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->
    </nav>

    <!-- Material sidebar -->
    <aside id="sidebar" class="sidebar sidebar-default sidebar-fixed-left" role="navigation">
        <?php if(Yii::$app->user->id):?>
        <!-- Sidebar header -->
        <div class="sidebar-header header-cover" style="background-image: url(<?=empty($profile->background)? 'http://2.bp.blogspot.com/-2RewSLZUzRg/U-9o6SD4M6I/AAAAAAAADIE/voax99AbRx0/s1600/14%2B-%2B1%2B%281%29.jpg' : $profile->background?>);">
            <!-- Top bar -->
            <div class="top-bar">
                <button type="button" class="sidebar-toggle">
                    <i class="fa fa-times" aria-hidden="true"style="color: white"></i>
                </button>
            </div>

            <!-- SIDEBAR USERPIC -->
            <div class="sidebar-image">
                <img width='100%' src="<?=empty($profile->avatar)? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $profile->avatar?>" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->


                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle sidebar-brand">
                    <div class="profile-usertitle-name">
                         <p style="color: black"><?= $profile->nickname ?></p>
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->

        </div>

            <form action="<?=Url::to(['/video/search'])?>" class="visible-xs">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="search-query form-control" placeholder="Поиск" value="<?=$_GET['s']?>" name="s"/>
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit">
                                <span class=" glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </form>


            <!-- Sidebar navigation -->
        <ul class="nav sidebar-nav">
                    <li class="active">
                        <a href="/">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Главная </a>
                    </li>
                    <li >
                        <a href="<?=Url::to(['/profile'])?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Мой профиль </a>
                    </li>
                    <li>
                        <a  href="#" value="/profile/upload" id="upload">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Загрузить видео</a>
                    </li>


            <li class="divider"></li>
            <li>
                <a href="<?=Url::to(['/profile', '#' => 'tab_default_3'])?>" data-toggle="tab">
                    Новых комментариев
                    <span class="sidebar-badge"><?= $count_comments?></span>
                </a>
            </li>



                <ul class="nav navbar-nav visible-xs">
                    <li class="divider"></li>

                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>

            <li class="divider"></li>

            <li>
                <a href="<?=Url::to(['/site/logout'])?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    Выход</a>
            </li>



        </ul>


            <div class="profile-sidebar ">


            </div>
            <!-- SIDEBAR MENU -->
            <div id="proffile-menu" class="profile-usermenu " >


                <!-- SIDEBAR BUTTONS -->

            </div>
            <!-- END MENU -->
        <?php else:?>
                <div class="top-bar">
                    <button type="button" class="sidebar-toggle">
                        <i class="fa fa-times" aria-hidden="true"style="color: white"></i>
                    </button>
                </div>
                <form action="<?=Url::to(['/video/search'])?>" class="visible-xs">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="search-query form-control" placeholder="Поиск" value="<?=$_GET['s']?>" name="s"/>
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="submit">
                                    <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>



                <ul class="nav sidebar-nav">
                    <li>
                        <a  href="#" value="/site/login" id="modalButton"><i class="fa fa-upload" aria-hidden="true"></i>Войти</a>
                    </li>
                    <li>
                        <a  href="#" value="/site/signup" id="modalButton1"><i class="fa fa-upload" aria-hidden="true"></i>Регистрация</a>
                    </li>

                </ul>

            <ul class="nav navbar-nav visible-xs">
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        <?php endif;?>
        <!-- index SIDEBAR MENU -->
    </aside>







        <div class="main-bg">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>

<!--<footer style="height: 50px; background-color: black">-->
<!---->
<!--</footer>-->
<?php
       Modal::begin([
    'id' => 'modal',
    ]);
    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
