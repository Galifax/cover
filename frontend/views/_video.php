<?php use yii\helpers\Url;?>
<?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>
 <ul class="list-unstyled video-list-thumbs row">
         <?php foreach($model as $video):?>
        <li class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    
            <a data-pjax="0" class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">

                <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                <span class="duration">03:15</span>
                <h2 class="text-transfer"><?= $video->name?></h2>
            </a>
            <div class="video-text">
                <a class="username-video" href="<?=Url::to(['/profile', 'id' => $video->profile->id, 'name' => $video->profile->nickname])?>"><?= $video->profile->nickname?></a>
                <?php 
                $date = new DateTime($video->date);        
                ?>
              <p><i class="fa fa-eye" aria-hidden="true"> <?= $video->views?></i> | <?=$date->format('j').' '. $months[date($date->format('n'))]?></p>
            </div>
        </li>
        <?php endforeach;?>
</ul>   