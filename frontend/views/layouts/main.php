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
        <div class="container-fluid">
            <div class="row row1">
                <div class="col-xs-3 col-sm-1">
                    <button id="sidebar-r" class="sidebar-toggle fa fa-bars " style="font-size: 30px; color: black"></button>
                </div>
                <div class="col-sm-3 col-md-2 col-xs-6 text-center">
                    <img  src="/img/logo.png" style=" margin: 0 auto; width: 100%;max-width: 180px ">
                </div>
                <div class="navbar-search smallsearch col-sm-7 col-md-6 hidden-xs">
                <form action="<?=Url::to(['/video/search'])?>">
                    <div class="row">
                           <div id="custom-search-input">
                                            <div class="input-group ">
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
                </div>
                <div class="col-md-2"></div>
                <div class="col-xs-3 col-sm-1 text-right">
                    <button id="sidebar-l" class="sidebar-toggle fa fa-bars hidden" style="font-size: 30px; color: black"></button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!--    <button class="sidebar-toggle fa fa-bars primary-navigation" style="font-size: 30px; color: black"></button>-->

    <!-- Material sidebar -->
    <aside id="sidebar" class="sidebar sidebar-default sidebar-fixed-left" role="navigation">
        <?php if(Yii::$app->user->id):?>
        <!-- Sidebar header -->
        <div class="sidebar-header header-cover" style="background-image: url(<?=empty($profile->background)? 'http://2.bp.blogspot.com/-2RewSLZUzRg/U-9o6SD4M6I/AAAAAAAADIE/voax99AbRx0/s1600/14%2B-%2B1%2B%281%29.jpg' : $profile->background?>);"
            <!-- Top bar -->
            <div class="top-bar">
                <img  src="img/logo.png" style="display: block; margin: 0 auto; ">
            </div>
            <!-- Sidebar toggle button -->
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>

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

            <li class="divider"></li>
            <li>
                <a href="#">
                    Новых комментариев
                    <span class="sidebar-badge">3</span>
                </a>
            </li>

            <li class="divider"></li>

                <li>
                   <a data-toggle="collapse" href="#menu-setings" >Настройки меню</a>

                    <ul class="constructor  collapse out" id="menu-setings">

                        <li>
                            <label for="sidebar-position">Позиция</label>
                            <br>
                            <select id="sidebar-position" name="sidebar-position">
                                <option value="sidebar-fixed-left">Меню с лева</option>
                                <option value="sidebar-fixed-right">Меню с права</option>
                            </select>
                        </li>

                        <li>
                            <label for="sidebar-theme">Стиль</label>
                            <br>
                            <select id="sidebar-theme" name="sidebar-theme">
                                <option value="sidebar-default">Стандарт</option>
                                <option value="sidebar-inverse">Стиль 1</option>
                                <option value="sidebar-colored">Стил 2</option>
                                <option value="sidebar-colored-inverse">Стиль 3</option>
                            </select>
                        </li>


                    </ul>

                </li>

            <li class="divider"></li>





        </ul>


            <div class="profile-sidebar ">


            </div>
            <!-- SIDEBAR MENU -->
            <div id="proffile-menu" class="profile-usermenu " >


                <!-- SIDEBAR BUTTONS -->

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
    </aside>







        <div class="container" style="margin-top:50px; min-height: 94.5vh">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>


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
