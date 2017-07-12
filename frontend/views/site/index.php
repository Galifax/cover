<?php
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<div class="body-content">

        <div class="index-video">

            <div class="video-blok ">
                <h2 class="">Топ видео</h2>
                <?php foreach($model as $video):?>
                    <div class="col-md-4 ">
                        <?=$this->render('../_video', compact('video'));?>
                    </div>
                <?php endforeach;?>
            </div>



            <div class="video-blok ">
                <h2 class="">Недавно загруженные</h2>
                <?php foreach($recently as $video):?>
                    <div class="col-md-3 ">
                        <?=$this->render('../_video', compact('video'));?>
                    </div>
                <?php endforeach;?>
            </div>



            <div class="video-blok ">
                <h2 class="">Топ просмотров</h2>
                <?php foreach($recently as $video):?>
                    <div class="col-md-3" >
                        <?=$this->render('../_video', compact('video'));?>
                    </div>
                <?php endforeach;?>
            </div>


        </div>

</div>

