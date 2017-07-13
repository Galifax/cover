<?php use yii\helpers\Url;?>

                 <a class="video-font" href="#">
                     <img style="border: 6px solid white" src="http://insideok.ru/p/source/Blog/avto-video_shapka.jpg" width="100%" height=150">
                 </a>

                  <a class="video-font" href="<?=Url::to(['video/view', 'id' => $video->id])?>"><?=$video->name?></a>
                           <p><?=$video->profile->nickname?></p>
                           <p><i class="glyphicon glyphicon-eye-open"></i>(количество просмотров)</p>
