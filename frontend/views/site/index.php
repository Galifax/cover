<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
    <div class="body-content">

       <div class="">



           <div class="col-md-10 index-video">

               <div class="video-blok">
                   <h2>Топ видео</h2>
                   <?php foreach($model as $video):?>
                       <div class="col-md-4" >
                          <?=$this->render('../_video', compact('video'));?>
                       </div>
                    <?php endforeach;?>
               </div>
               <div class="clearfix"></div>
               <div class="video-blok">
                   <h2>Недавно загруженные</h2>
                    <?php foreach($recently as $video):?>
                       <div class="col-md-3" >
                          <?=$this->render('../_video', compact('video'));?>
                       </div>
                    <?php endforeach;?>
                   </div>
                  
               <div class="clearfix"></div>
               <div class="video-blok">
                   <h2>Топ просмотров</h2>
                            <?php foreach($recently as $video):?>
                       <div class="col-md-3" >
                          <?=$this->render('../_video', compact('video'));?>
                       </div>
                            <?php endforeach;?>
               </div>
                       
               </div>


           </div>


       </div>

    </div>
<div class="clearfix"></div>
