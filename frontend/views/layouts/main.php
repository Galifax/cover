<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" style="padding-bottom: 0px; background-color: #f99500 ">

    <!-- Second navbar for sign in -->
    <nav class="navbar navbar-default" style="margin-bottom: 60px">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <li><a href="">Войти</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->



    <div class="">
            <div class="container-fluid background-gray" style="margin-left: 60px;margin-right: 60px;">

                <div class="profile-sidebar col-md-2">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBPmJvUzzdHlQyir_4qt2L1EiKju-YHbgtq8_Q12evXA3p1yKK" class="img-responsive"  alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->

                </div>
                <!-- SIDEBAR MENU -->
                <div id="proffile-menu" class="profile-usermenu col-md-3" >

                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            Валера89
                        </div>
                        <div class="profile-usertitle-job">
                            Нуб \ Донатер
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Мои видео </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Настройки профиля </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Загрузить видео </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                Выход</a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
                <!-- index SIDEBAR MENU -->
                <div style="border-left: 1px solid black" class="sidebar-menu col-md-7">
                    <h3 class="h-nav-music">Жанры музыки</h3>
                    <ul class="nav col-md-4">
                        <li class="active">
                            <a href="#">menu1</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                    </ul>
                    <ul class="nav  col-md-4">
                        <li>
                            <a href="#">menu1</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                    </ul>
                    <ul class="nav  col-md-4">
                        <li>
                            <a href="#">menu1</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                        <li>
                            <a href="#">menu2</a>
                        </li>
                    </ul>
                </div>
                <!--index END MENU -->
        </div>

        <div class="clearfix" style="background-color: white"></div>

        <div class="container-fluid nopadding background-gray "   style=" padding: 60;margin-right: 60px;margin-left: 60px; margin-bottom: 60px" >
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
</div>


<footer class="footer">
    <div class="container">




        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cum dicta et laboriosam voluptas! Asperiores, quam quia! Aspernatur consequuntur fuga ipsa nemo, nisi rerum veritatis! Delectus error rem saepe totam?</p>







    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
