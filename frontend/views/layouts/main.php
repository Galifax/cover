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
    <?php $profile = Profile::find()->where(['id' =>Yii::$app->user->id])->one();?>
    <?php $category = Category::find()->where(['parent_id' =>0])->all();?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap color-1" style="padding-bottom: 0px;  ">

    <!-- Second navbar for sign in -->

    <nav class="navbar navbar-default navbar-fixed-top">
    <div id="navbar">
        <div class="container">
            <div class="row row1">
                <div class="col-sm-2">

                </div>
                <div class="navbar-search smallsearch col-sm-8 col-xs-11 hidden-xs">
                <form action="<?=Url::to(['/video/search'])?>">
                    <div class="row">
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
                    </div>
                    </form>
<!--                    <img  src="img/logo.png" style="display: block; margin: 0 auto; ">-->
                </div>
<!--                <div class="col-sm-2">-->
<!--                    <div class="primary-navigation" id="nav2">-->
<!--                        <a class="navbar-button-2 text-center" href="#">-->
<!--                            <span class="glyphicon glyphicon-music"></span> -->
<!--                            <strong>Жанры музыки</strong>-->
<!--                            <span class="glyphicon glyphicon-chevron-down"></span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</nav>
    <a class="primary-navigation" id="nav2" href="/"><img src="/img/logo.png" height="30px" style="margin-top: -10px;"/></a>
    <div class="primary-navigation" id="nav1">
        <a style="font-size: 30px; color: black" class="btn fa fa-bars" href="#">
        </a>
    </div>
    <div class="secondary-navigation-a" id="nav1-2">

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
            <?php if(Yii::$app->user->id):?>
                <div class="profile-sidebar ">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic text-center">
                        <img width='100%' src="<?=empty($profile->avatar)? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $profile->avatar?>" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <p style="color: black"><?= $profile->nickname ?></p>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                </div>
                <!-- SIDEBAR MENU -->
                <div id="proffile-menu" class="profile-usermenu " >


                    <!-- SIDEBAR BUTTONS -->
                    <ul class="nav">
                        <li class="active">
                            <a href="<?=Url::to(['/profile', 'id'=>Yii::$app->user->id, 'name'=>$profile->nickname])?>">
                                <i class="glyphicon glyphicon-user"></i>
                                Мой профиль </a>
                        </li>
                        <li>
                          <a  href="#" value="/profile/upload" id="upload"><i class="fa fa-upload" aria-hidden="true"></i>Загрузить видео</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/profile/my-videos'])?>">
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
             <div id="proffile-menu" class="profile-usermenu " >

                 <ul class="nav" style="margin-top:0px;">
                        <li>
                          <a  href="#" value="/site/login" id="modalButton"><i class="fa fa-upload" aria-hidden="true"></i>Войти</a>
                        </li>
                           <li>
                          <a  href="#" value="/site/signup" id="modalButton1"><i class="fa fa-upload" aria-hidden="true"></i>Регистрация</a>
                        </li>
                        
                    </ul>
                </div>
            <?php endif;?>
            <!-- index SIDEBAR MENU -->
        </div>
<!--    <div class="secondary-navigation-b" id="nav2-2">-->
<!--        <div class="sidebar-menu">-->
<!--            <h3 class="h-nav-music">Жанры музыки</h3>-->
<!--            <ul class="nav">-->
<!--                --><?php //foreach($category as $cat): ?>
<!--                    <li  class="" style="padding:0">-->
<!--                        <a href='#' class=''>--><?//= $cat->name?><!--</a></li>-->
<!--                --><?php //endforeach; ?>
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->


    <!-- line modal -->


    <main id="main">






        <div class="container content" style="margin-top:50px; min-height: 94.5vh">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
</div>

<?php
       Modal::begin([
    'id' => 'modal',
    ]);
    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>
<script>
    $(document).ready(function(){
        $("#nav1").click(function(){
            $("#nav1-2").toggleClass('opened');
            $("#nav1").toggleClass('opened');
            $("#main").toggleClass('slide-left');
            $("#main").toggleClass('animate-right');
    });
//        $("#nav2").click(function(){
//            $("#nav2-2").toggleClass('opened');
//            $("#main").toggleClass('slide-left');
//            $("#main").toggleClass('animate-left');
//        });
    });
</script>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
