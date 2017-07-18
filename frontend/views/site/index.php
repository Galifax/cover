<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = 'My Yii Application';
?>
<div class=""   style="margin-right: 15px;margin-left: 15px" >
            <div class="video-blok row bg-img-1">
                <h2 class="index-h2">Топ видео</h2>
                <?php foreach($model as $video):?>
                  <div class="col-md-2">
                        <?=$this->render('../_video', compact('video'));?>
                  </div>
                <?php endforeach;?>
            </div>

</div>

