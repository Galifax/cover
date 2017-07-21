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
<!--    background-color: #f99500-->
    <!-- Second navbar for sign in -->

    <div class="">
            <?php Pjax::begin();?>
            <div class="container color-3" >

                <nav class="navbar navbar-default" style="margin-top: 10px">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                            <a class="navbar-brand" href="/">
                                <img src="/img/logo.png" style=";height: 150%">
                            </a>


                        </div>

                            <div class="navbar-middle">
                            <?php if(!Yii::$app->user->isGuest):?>
                                <a type="button" class="btn btn-primary  collapsed" data-toggle="collapse" data-target="#d1" style="margin-left:6%">
                                    Профиль
                                </a>

                                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="loginmodal-container">
                                                <h1>Login to Your Account</h1><br>
                                                <form>
                                                    <input type="text" name="user" placeholder="Username">
                                                    <input type="password" name="pass" placeholder="Password">
                                                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                                                </form>

                                                <div class="login-help">
                                                    <a href="#">Register</a> - <a href="#">Forgot Password</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <button type="button" class="btn btn-primary collapsed" data-toggle="collapse" data-target="#d2">
                                    Жанры музыки
                                </button>
                            <form class="navbar-form navbar-right" style="margin-right: 5%">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Найти видео" size="40">
                                    </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Найти</button>
                            </form>
                            <?php else:?>
                                  <p>
                                    <?= Html::button('Войти', ['value' => Url::to(['/site/login']) , 'class' => 'btn btn-success' , 'id' => 'modalButton']) ?>
                                        </p>

                                        <?php
                                        Modal::begin([
                                        'id' => 'modal',
                                        'header' => false,
                                        ]);
                                        echo "<div id='modalContent'></div>";

                                        Modal::end();
                                        ?>
                            <?php endif;?>
                        </div>

                    </div><!-- /.container -->
                </nav><!-- /.navbar -->
                <div id="d1" class="collapse col-xs-11 col-md-4 bg-img-3" style="position: absolute; z-index: 100">
                    <?php if(Yii::$app->user->id):?>
                    <div class="profile-sidebar col-md-6">
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
                    <div id="proffile-menu" class="profile-usermenu col-md-6" >


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
                     <div class="col-md-4">
                     <a class="btn btn-default" href="<?=Url::to(['/site/login'])?>">Войти</a>
                     <a class="btn btn-default" href="<?=Url::to(['/site/signup'])?>">Зарегистрироваться</a>
                     </div>
                     <?php endif;?>
                   <!-- index SIDEBAR MENU -->
                </div>
                <div id="d2" class="collapse col-xs-11 col-md-4 col-md-push-6 bg-img-3" style="position: absolute; z-index: 100">
                    <div class="sidebar-menu">
                        <h3 class="h-nav-music">Жанры музыки</h3>
                        <ul class="nav">
                        <?php foreach($category as $cat): ?>
                            <li  class="col-md-4" style="padding:0">
                                <a href='#' class=''><?= $cat->name?></a></li>
                       <?php endforeach; ?>
                       </ul>
                    </div>
                    <!--index END MENU -->
                </div>
        </div>


        <?php Pjax::begin();?>
        <div class="clearfix"></div>

        <div class="container nopadding bg-img-3" style="min-height: 92vh">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
