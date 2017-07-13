<?php use yii\helpers\Url;?>

          <video src="/uploads/1.mp4" width="100%" height="300" controls="controls"></video>
                       <a class="video-font" href="<?=Url::to(['video/view', 'id' => $video->id])?>"><?=$video->name?></a>
                           <p><?=$video->profile->nickname?></p>
                           <p>(количество просмотров) | <?=$video->date?></p>
