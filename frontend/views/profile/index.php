<?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
  use yii\bootstrap\ActiveForm;

   ?>


<div class="container">

    <div style="margin-top: 80px">

    <div class="row">
        <div class="fb-profile col-sm-4 text-center">
            <img style="height: 200px;width: 200px" class="fb-image-profile thumbnail" src="<?= $model->avatar ? $model->avatar : 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg'?>" alt="Profile image example"/>
            <button class="btn btn-default" style="margin: 20px 0px">Настройки профиля</button>
        </div>

        <div class="col-sm-8 text-center" style="margin-top: -60px;">

            <h2>Мой лучьшй ролик</h2>
            <div class="video-item col-sm-8 col-sm-push-2">
                <div>
                    <a class="video" data-pjax="0" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>
                    <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px">Video name</h2>
                            </a>
                        </div>
                    </div>

                </div>

        </div>
    </div>

    <div class="col-sm-12 content" style="padding: 0px">

        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs content-2 nav-center text-center">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">
                            Мои видео
                        </a>
                    </li>
                    <li class="load-profile">
                        <a href="#tab_default_2" data-toggle="tab">
                            Сообщения <span class="badge"><?=count($comments)?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#tab_default_3" data-toggle="tab">
                            Любимое
                        </a>
                    </li>
                    <li class="load-comments">
                        <a href="#tab_default_4" data-toggle="tab">
                            Про меня</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                        <h2 class="text-center" style="padding: 10px;font-size: 30px; margin: 0px;">Мои Видео</h2>
                        <?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>

                        <div class="video-item col-md-4 col-sm-6 col-xs-12">
                            <div>
                                <a class="video" data-pjax="0" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                                    <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                                        <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                                    </div>
                                </a>
                                <div class="content-title">
                                    <div class="text-center">
                                        <a style="color: black" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                                            <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px">Video name</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-footer">

                                    <img class="user-small-img"  src="<?=empty($to->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $to->profile->avatar?>" alt="Profile image example>">

                                    <p class="text-center">
                                        <?= $to->profile->nickname?>
                                        user name
                                        <br>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 99999</a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $to->views?>99999</a>
                                        <br>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span>999.999.9</span>
                                    </p>

                                </div>
                            </div>

                            <div class="proffile-edit-btn">
                                <button class="btn btn-success">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane" id="tab_default_2">
                        <?php if($comments):?>
                            <?php $form = ActiveForm::begin([
                                'method' => 'post',
                                'action' => '/profile/viewed'
                            ])?>
                            <?php foreach($comments as $com):?>
                                <li class="h<?=$com->id?> prof-com">
                                    <p> <input type="checkbox" name="viewed[<?=$com->id?>]" class="viewed">
                                        <a href="<?=Url::to(['/video/view', 'id' => $com->video->id])?>"><?=$com->video->name?></a></p>
                                    <p><?=$com->profile->nickname?></p> <p><?=$com->content?></p>
                                    <p><?=$com->date?></p>
                                </li>
                            <?php endforeach;?>
                            <?php ActiveForm::end();?>
                            <div id="results"></div>
                        <?php else:?>
                            <h2>Новых комментариев нету</h2>
                        <?php endif;?>
                    </div>

                    <div class="tab-pane" id="tab_default_3">

                    </div>

                    <div class="tab-pane" id="tab_default_4">


                        <p>

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

</div>
<div class="clearfix"></div>