  <?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
   ?>

<?php Pjax::begin()?>
<div class="profile-content" style="background-color: none">

              <h2>Мои Видео</h2>
              <ul class="list-unstyled video-list-thumbs row">
                <?php foreach($model as $video):?>
                  <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <a data-pjax="0" class="video-list-thumbs-a" href="<?=Url::to(['/video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                          <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                          <span class="duration">03:15</span>
                          <h2><?= $video->name?></h2>
                      </a>
                      <div class="video-text">
                          <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                          <p><?= $video->views?> <i class="fa fa-eye" aria-hidden="true"></i> | Загружено <?= $video->date?></p>

                               <a href="<?= Url::to(['update', 'id'=>$video->id])?>">Редактировать</a>
                               <a href="<?= Url::to(['profile/my-videos', 'del'=>$video->id])?>">Удалить</a>

                      </div>
                  </li>
                <?php endforeach;?>  
              </ul>

</div>

<?php Pjax::end()?>