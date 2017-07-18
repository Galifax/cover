<?php use yii\helpers\Url;?>
  <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
   <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" width="100%" height="130px" />
   <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
   <span class="glyphicon glyphicon-play-circle"></span>
   <span class="duration">03:15</span>
  </a>
  	<a class="video-font" href="<?=Url::to(['video/view', 'id' => $video->id, 'name' => $video->name])?>"><?=$video->name?></a>
                           <p><?=$video->profile->nickname?></p>
                  
