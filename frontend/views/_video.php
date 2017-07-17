<?php use yii\helpers\Url;?>
				<li class="col-lg-3 col-sm-4 col-xs-6">
  <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
   <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
   <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
   <span class="glyphicon glyphicon-play-circle"></span>
   <span class="duration">03:15</span>
  </a>
  	<a class="video-font" href="<?=Url::to(['video/view', 'id' => $video->id])?>"><?=$video->name?></a>
                           <p><?=$video->profile->nickname?></p>
                           <p><i class="glyphicon glyphicon-eye-open"></i>(количество просмотров)</p>
 </li>
                  
