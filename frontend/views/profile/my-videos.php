  <?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
   ?>

<?php Pjax::begin()?>
<div class="profile-content container-fluid" style="background-color: none">
          <div class="container">
              <h2>Мои Видео</h2>
              <ul class="list-unstyled video-list-thumbs row">
                <?php foreach($model as $video):?>
                  <li class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <a class="video-list-thumbs-a" href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                          <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                          <span class="glyphicon glyphicon-play-circle"></span>
                          <span class="duration">03:15</span>
                          <h2><?= $video->name?></h2>
                      </a>
                      <div class="video-text">
                          <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                          <p>1000000 <i class="fa fa-eye" aria-hidden="true"></i><?= $video->view->views?> | Загружено <?= $video->date?></p>
                          <p>
        <?= Html::button('Редактировать', ['value' => Url::to(['update', 'id'=>$video->id]) , 'class' => 'btn btn-success' , 'id' => 'modalButton']) ?>
     <a href="<?= Url::to(['profile/my-videos', 'del'=>$video->id])?>" class='btn btn-danger'>Delete</a> </p>
                      </div>
                  </li>
                <?php endforeach;?>  
              </ul>
          </div>
</div>
<?php
       Modal::begin([
    'header' => '<h2>Редактировать видео</h2>',
    'id' => 'modal',
    'size' => 'modal-lg',
    ]);
    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>
<?php Pjax::end()?>