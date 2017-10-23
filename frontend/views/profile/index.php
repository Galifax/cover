<?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
  use yii\bootstrap\ActiveForm;

   ?>


<div class="container">

    <div class="content" style="margin-top: 80px">

    <div class="row">
        <div class="fb-profile col-sm-4 text-center">
            <img style="height: 200px;width: 200px" class="fb-image-profile thumbnail" src="<?= $model->avatar ? $model->avatar : 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg'?>" alt="Profile image example"/>
            <button class="btn btn-default" style="margin: 20px 0px">Настройки профиля</button>
        </div>

        <div class="col-sm-6 text-center" style="margin-top: 20px">

            <div class="item1 center<?= $n?>">
                <a class="video" data-pjax="0" href="../video/view?id=<?= $to->id?>">
                    <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                        <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                    </div>
                </a>                <div class="content-title">
                    <div class="text-center">
                        <a style="color: black" href="../video/view?id=<?= $to->id?>">
                            <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">имя имя имя</h2>
                        </a>
                    </div>
                </div>

                <div class="content-footer">

                    <img class="user-small-img"  src="<?=empty($to->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $to->profile->avatar?>" alt="Profile image example>">

                    <p class="text-center">
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 999999</a>
                        <br>
                        <br>
                        <span>Имя пользователя</span></p>
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
                            Недавние просмотры</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                        <h2 class="text-center" style="padding: 10px;font-size: 30px; margin: 0px;">Мои Видео</h2>
                        <?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>

                        <div class="row" style="padding: 15px 5px">
                            <?php Pjax::begin(['enablePushState' => false]);?>
                            <?php foreach($model as $video):?>
                                <div class="video-item col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <div>
                                        <a class="video" data-pjax="0" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                                            <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                                                <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                                            </div>
                                        </a>
                                        <div class="content-title">
                                            <div class="text-center">
                                                <a style="color: black" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                                                    <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px"><?= $video->name?></h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-footer">
                                            <div class="content-footer__avatar">
                                                <img  class="user-small-img" src="<?=$video->profile->avatar?>">
                                            </div>
                                            <div>
                                                    <span style="color: #fff;">
                                                        <a style="font-size: 16px" class="username-video" href="<?=Url::to(['/profile', 'id' => $video->profile->id, 'name' => $video->profile->nickname])?>"><?= $video->profile->nickname?></a>
                                                    </span>
                                                    <p style="margin: 0px;font-size: 14px">
                                                    <?php $date = new DateTime($video->date); ?>
                                                    <i class="fa fa-eye" aria-hidden="true"> <?= $video->views?></i> | <?=$date->format('j').' '. $months[date($date->format('n'))]?>
                                                </p>
                                            </div>
                                            <a href="<?=Url::to(['/profile/update', 'id' => $video->id])?>" data-pjax="0" class="btn btn-success">Редактировать</a>

                                            <a href="<?=Url::to(['/profile/my-videos', 'del' => $video->id])?>" class="btn btn-danger">Удалить</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            <?php Pjax::end();?>
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

                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

</div>
<div class="clearfix"></div>