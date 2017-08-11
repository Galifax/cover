<?php use yii\helpers\Url;?>
<?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>
 <ul class="list-unstyled video-list-thumbs">
         <?php foreach($model as $video):?>
        <li class="col-lg-<?=$lg?> col-md-<?=$lg?> col-sm-<?=$lg?> col-xs-<?=$lg?>" style=" padding: 7px;">
        <div class="content">
            <a data-pjax="0" class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">

                <img src="<?=$video->preloader?>" width="100%" />
                <h2 class="text-transfer"><?= $video->name?></h2>
            </a>
            <div class="video-text">
                <a class="username-video" href="<?=Url::to(['/profile', 'id' => $video->profile->id, 'name' => $video->profile->nickname])?>"><?= $video->profile->nickname?></a>
                <?php 
                $date = new DateTime($video->date);        
                ?>
              <p><i class="fa fa-eye" aria-hidden="true"> <?= $video->views?></i> | <?=$date->format('j').' '. $months[date($date->format('n'))]?></p>
            </div>
            </div>
        </li>
        <?php endforeach;?>
</ul>   