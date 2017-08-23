<?php  
use yii\helpers\Url;
use yii\widgets\Pjax; ?>

 <div class="my-video-blok content" style="padding-top: 30px;min-height: 80vh;">
     <div class="container">
         <h2 class="text-center" style="padding: 10px;font-size: 30px; margin: 0px;">Понравившиеся</h2>
   <?= $this->render('../_video', [
        'model' => $model,
        'lg' => 3,
        'md' => 4,
        'sm' => 4,
         'xs' => 12,
   ]);?>
           
     </div>
</div>
