<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = 'My Yii Application';
?>
<div class=""   style=";margin-right: 15px;margin-left: 15px" >

            <div class="video-blok row bg-img-1">
                <h2 class="index-h2">Топ видео</h2>
                <?php foreach($model as $video):?>
                   <ul class="list-unstyled video-list-thumbs row">
                        <?=$this->render('../_video', compact('video'));?>
                    </ul>
                <?php endforeach;?>
            </div>



            <div class="video-blok row bg-img-2" >
                <h2 class="index-h2" >Недавно загруженные</h2>
                <?php foreach($recently as $video):?>
                    <div class="col-md-2 " >
                        <?=$this->render('../_video', compact('video'));?>
                    </div>
                <?php endforeach;?>
            </div>



            <div class="video-blok row bg-img-2">
                <h2 class="index-h2">Топ просмотров</h2>
                <?php foreach($recently as $video):?>
                    <div class="col-md-2" >
                        <?=$this->render('../_video', compact('video'));?>
                    </div>
                <?php endforeach;?>
            </div>

            <ul class="list-unstyled video-list-thumbs row">
 <li class="col-lg-3 col-sm-4 col-xs-6">
  <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
   <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
   <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
   <span class="glyphicon glyphicon-play-circle"></span>
   <span class="duration">03:15</span>
  </a>
 </li>
 <li class="col-lg-3 col-sm-4 col-xs-6">
  <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
   <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
   <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
   <span class="glyphicon glyphicon-play-circle"></span>
   <span class="duration">03:15</span>
  </a>
 </li>
 <li class="col-lg-3 col-sm-4 col-xs-6">
  <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
   <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
   <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
   <span class="glyphicon glyphicon-play-circle"></span>
   <span class="duration">03:15</span>
  </a>
 </li>
 <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
  <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
   <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
   <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
   <span class="glyphicon glyphicon-play-circle"></span>
   <span class="duration">03:15</span>
  </a>
 </li>
    <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
  <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
   <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
   <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
   <span class="glyphicon glyphicon-play-circle"></span>
   <span class="duration">03:15</span>
  </a>
 </li>
</ul>

</div>

