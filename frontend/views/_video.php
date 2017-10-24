<?php use yii\helpers\Url;?>
<?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>

<div class="row" style="padding: 15px 5px">
<?php foreach($model as $video):?>
<div class="video-item col-lg-<?=$lg?> col-md-<?=$md?> col-sm-<?=$sm?> col-xs-<?=$xs?>">
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

            <img class="user-small-img"  src="<?=empty($to->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $to->profile->avatar?>" alt="Profile image example>">

            <p class="text-center">
                <?= $to->profile->nickname?>
                <br>
                <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $to->views?></a>
                <br>
                <i class="fa fa-eye" aria-hidden="true"></i>
                <span>999.999.9</span>
            </p>

        </div>
    </div>
</div>
<?php endforeach;?>
</div>
