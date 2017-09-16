  <?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
   ?>

<div class="profile-content content" style="min-height: 80vh">

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
