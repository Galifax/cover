<?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
  use yii\bootstrap\ActiveForm;


   ?>


<div class="container">

    <div style="margin-top: 30px">

    <div class="row">
        <div class="fb-profile col-sm-4 col-sm-push-1 text-center">
            <img style="height: 200px;width: 200px" class="fb-image-profile thumbnail" src="<?= $model->avatar ? $model->avatar : 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg'?>" alt="Profile image example"/>
            <button href="#" value="/profile/edit" id="upload" class="btn btn-my-default" style="margin: 20px 0px">Настройки профиля</button>
        </div>

        <div class="col-sm-6 col-sm-push-1 text-center">

            <div class="video-item col-sm-8 col-sm-push-2">
                <h2 class="my-best-video-h">Мой лучший ролик</h2>
                <div>
                    <a class="video" data-pjax="0" href="<?=Url::to(['video/view', 'id' => $top->id])?>" title="<?= $top->name?>">
                        <div class="video-item__thumb" style="background-image: url(<?=$top->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>
                    <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="<?=Url::to(['video/view', 'id' => $top->id])?>" title="<?= $top->name?>">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px"><?= $top->name?></h2>
                            </a>
                        </div>
                    </div>

                </div>

        </div>

    </div>


    <div class="col-sm-12 content" style="padding: 0px">

        <div data-spy="scroll" class="tabbable-panel">

            <div class="btn-group btn-group-justified">

                <a href="#tab_default_1" class="btn btn-prof-tab"  data-toggle="tab">
                    Мои видео
                </a>
                <a href="#tab_default_2" class="btn btn-prof-tab" data-toggle="tab">
                    Сообщения
                    <span class="badge"><?=count($comments)?></span>
                </a>
                <a href="#tab_default_3" class="btn btn-prof-tab" data-toggle="tab">
                    Любимое
                </a>
                <a href="#tab_default_4" class="btn btn-prof-tab" data-toggle="tab">
                    Про меня
                </a>
            </div>

            <div class="tabbable-line">

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">


                        <h2 class="text-center" style="padding: 10px;font-size: 30px; margin: 0px;">Мои Видео</h2>

                        <?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>
                        <?php foreach($my_video as $video):?>
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
                                            <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px"><?= $video->name?></h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-footer2">

                                    <img class="user-small-img"  src="<?= $model->avatar ? $model->avatar : 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg'?>" alt="Profile image example">

                                    <p class="text-center">
                                        <?= $video->profile->nickname?>
                                        <br>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 99999</a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $video->views?></a>
                                        <br>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span><?= $video->views?></span>
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
                        <?php endforeach;?>
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
                            <h2 class="text-center">Новых комментариев нету</h2>
                        <?php endif;?>
                    </div>

                    <div class="tab-pane" id="tab_default_3">

                        <h2 class="text-center" style="padding: 10px;font-size: 30px; margin: 0px;">Любимое</h2>

                        <?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>
                        <?php foreach($favorites as $fav):?>
                        <div class="video-item col-md-4 col-sm-6 col-xs-12">
                            <div>
                                <a class="video" data-pjax="0" href="<?=Url::to(['video/view', 'id' => $fav->id])?>" title="<?= $fav->name?>">
                                    <div class="video-item__thumb" style="background-image: url(<?=$fav->preloader?>)">
                                        <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                                    </div>
                                </a>
                                <div class="content-title">
                                    <div class="text-center">
                                        <a style="color: black" href="<?=Url::to(['video/view', 'id' => $fav->id])?>" title="<?= $fav->name?>">
                                            <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px"><?= $fav->name?></h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-footer2">

                                    <img class="user-small-img"  src="<?= $model->avatar ? $model->avatar : 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg'?>" alt="Profile image example">

                                    <p class="text-center">
                                        <?= $fav->profile->nickname?>
                                        <br>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 99999</a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $fav->views?></a>
                                        <br>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span><?= $fav->views?></span>
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
                        <?php endforeach;?>
                    </div>

                    <div class="tab-pane" id="tab_default_4">
                            <p>
                                <?= $model->about_myself?>
                            </p>
                        <h4>Возраст</h4>
                            <p>
                                <?= $model->born?>
                            </p>
                        <h4>Страна </h4>
                            <p>
                                <?= $model->country?>
                            </p>
                        <h4>Контакты</h4>
                            <p>
                                <?= $model->contacts?>
                            </p>
                        <h4>Любимые группы</h4>
                            <p>
                                <?= $model->favorites?>
                            </p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

</div>
<div class="clearfix"></div>