<?php use yii\helpers\Url;?>
 <ul class="list-unstyled video-list-thumbs row">
         <?php foreach($model as $video):?>
        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    
            <a data-pjax="0" class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">

                <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration">03:15</span>
                <h2><?= $video->name?></h2>
            </a>
            <div class="video-text">
                <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                <p><?= $video->view->views?> <i class="fa fa-eye" aria-hidden="true"></i> | Загружено <?= $video->date?></p>
            </div>
        </li>
        <?php endforeach;?>
</ul>   