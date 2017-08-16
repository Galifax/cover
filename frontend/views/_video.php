<?php use yii\helpers\Url;?>
<?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>

<div class="row" style="padding: 15px">
<?php foreach($model as $video):?>
<div class="col-lg-<?=$lg?> col-md-<?=$md?> col-sm-<?=$sm?> col-xs-<?=$xs?>">
    <aside>
        <a data-pjax="0" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
            <img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" />
        </a>
        <div class="content-title">
            <div class="text-center">
                <a style="color: black" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px"><?= $video->name?></h2>
                </a>
            </div>
        </div>
        <div class="content-footer">
            <img  class="user-small-img" src="<?=$video->profile->avatar?>">
            <span style="color: #fff;">
                <a style="font-size: 16px" class="username-video" href="<?=Url::to(['/profile', 'id' => $video->profile->id, 'name' => $video->profile->nickname])?>"><?= $video->profile->nickname?></a>

            <p style="margin: 0px;font-size: 14px">
                    <?php
                    $date = new DateTime($video->date);
                    ?>
                    <i class="fa fa-eye" aria-hidden="true"> <?= $video->views?></i> | <?=$date->format('j').' '. $months[date($date->format('n'))]?>
                                    </p>
            </span>
            <div class="user-ditels">
                <div class="user-img"><img src="<?=$video->profile->avatar?>" class="img-responsive"></div>
                <span class="user-full-ditels">
                        <h3><?= $video->profile->nickname?></h3>
                        <p>МеснІЬй сторож</p>
                        </span>
                <div class="social-icon">
                    <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                    <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
<!--                    <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>-->
                </div>
            </div>
        </div>
    </aside>
</div>
<?php endforeach;?>
</div>
