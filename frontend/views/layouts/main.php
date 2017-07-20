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
    <?php $profile = Profile::find()->where(['user_id' =>Yii::$app->user->id])->one();?>
    <?php $category = Category::find()->where(['parent_id' =>0])->all();?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap color-1" style="padding-bottom: 0px;  ">
<!--    background-color: #f99500-->
    <!-- Second navbar for sign in -->

    <div class="">
            <div class="container color-3" >

                <nav class="navbar navbar-default" style="margin-top: 10px">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                            <a class="navbar-brand" href="#">Brand</a>
                            <a type="button" class="btn btn-primary  collapsed" data-toggle="collapse" data-target="#d1">
                                Профиль
                            </a>
                            <a type="button" class="btn btn-primary collapsed" data-toggle="collapse" data-target="#d2">
                                Тег поиска
                            </a>
                        </div>

                            <div class="col-md-8 col-md-push-3">
                            <form class="navbar-form navbar-left">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Найти видео" size="45">
                                    </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Найти</button>
                            </form>
                        </div>

                    </div><!-- /.container -->
                </nav><!-- /.navbar -->
                <div id="d1" class="collapse col-md-4 bg-img-3" style="position: absolute; z-index: 100">
                    <?php if(Yii::$app->user->id):?>
                    <div class="profile-sidebar col-md-6">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic text-center">
                            <img class="profile-img" src="<?= $profile->avatar ?>">
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
                                <a href="<?=Url::to(['/profile', 'name' => $profile->nickname ? $profile->nickname : $profile->user_id])?>">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Мой профиль </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    Настройки профиля </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
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
                                <a href="#" target="_blank">
                                    <a href="<?=Url::to(['/site/logout'])?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Выход</a></a>
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
                <div id="d2" class="collapse col-md-4 col-md-push-6 bg-img-3" style="position: absolute; z-index: 100">
                    <div class="sidebar-menu">
                        <h3 class="h-nav-music">Жанры музыки</h3>
                        <?php foreach($category as $cat): ?>

                        <a href='#' class='btn btn-default'><?= $cat->name?></a>
                       <?php endforeach; ?>
                    </div>
                    <!--index END MENU -->
                </div>
        </div>

        <div class="clearfix"></div>

        <div class="container nopadding bg-img-3">
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
