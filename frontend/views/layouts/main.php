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
    <?php $profile = Profile::find()->where(['user_id' =>Yii::$app->user->id])->one();?>
    <?php $category = Category::find()->where(['parent_id' =>0])->all();?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap color-1" style="padding-bottom: 0px;  ">

    <!-- Second navbar for sign in -->

    <div id="navbar">
        <div class="container">
            <div class="row row1">
                <div class="col-sm-2">
                    <div class="primary-navigation" id="nav1">
                        <a class="navbar-button-2 text-center" href="#">
                            <span class="glyphicon glyphicon-chevron-down"></span> 
                            <strong>Профиль</strong>
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </div>
                </div>
                <div class="navbar-search smallsearch col-sm-8 col-xs-11">
                    <div class="row">
                        <input class="navbar-input col-xs-11" type="" placeholder="Поиск" name="">
                        <button class="navbar-button-1 col-xs-1">
                            <svg width="15px" height="15px">
                                <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                            </svg>
                        </button>
                    </div>
<!--                    <img  src="img/logo.png" style="display: block; margin: 0 auto; ">-->
                </div>
                <div class="col-sm-2">
                    <div class="primary-navigation" id="nav2">
                        <a class="navbar-button-2 text-center" href="#">
                            <span class="glyphicon glyphicon-music"></span> 
                            <strong>Жанры музыки</strong>
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <div class="secondary-navigation-a" id="nav1-2">

            <?php if(Yii::$app->user->id):?>
                <div class="profile-sidebar ">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic text-center">
                        <img class="profile-img" src="/img/<?= $profile->avatar ?>">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <P><?= $profile->nickname ?></P>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                </div>
                <!-- SIDEBAR MENU -->
                <div id="proffile-menu" class="profile-usermenu " >


                    <!-- SIDEBAR BUTTONS -->
                    <ul class="nav">
                        <li class="active">
                            <a href="<?=Url::to(['/profile'])?>">
                                <i class="glyphicon glyphicon-user"></i>
                                Мой профиль </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/profile/upload'])?>" target="_blank">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Загрузить видео </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['my-videos'])?>" target="_blank">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Мои видео </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/profile/favorites'])?>">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Понравившиеся </a>
                        </li>
                        <li>
                            <a href="<?=Url::to(['/site/logout'])?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                Выход</a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            <?php else:?>
                <div class="">
                    <a class="btn btn-default" href="<?=Url::to(['/site/login'])?>">Войти</a>
                    <a class="btn btn-default" href="<?=Url::to(['/site/signup'])?>">Зарегистрироваться</a>
                </div>
            <?php endif;?>
            <!-- index SIDEBAR MENU -->
        </div>
    <div class="secondary-navigation-b" id="nav2-2">
        <div class="sidebar-menu">
            <h3 class="h-nav-music">Жанры музыки</h3>
            <ul class="nav">
                <?php foreach($category as $cat): ?>
                    <li  class="" style="padding:0">
                        <a href='#' class=''><?= $cat->name?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <main id="main">




        <?php Pjax::begin();?>


        <div class="container nopadding bg-img-3" style="min-height: 92vh">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
</div>
<script>
    $(document).ready(function(){
        $("#nav1").click(function(){
            $("#nav1-2").toggleClass('opened');
            $("#main").toggleClass('slide-left');
            $("#main").toggleClass('animate-right');
    });
        $("#nav2").click(function(){
            $("#nav2-2").toggleClass('opened');
            $("#main").toggleClass('slide-left');
            $("#main").toggleClass('animate-left');
        });
    });
</script>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
