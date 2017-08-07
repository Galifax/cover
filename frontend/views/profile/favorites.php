<?php  
use yii\helpers\Url;
use yii\widgets\Pjax; ?>

<?php Pjax::begin()?>
 <div class="my-video-blok" style="padding-top: 30px;">
     <div class="container">
         <h2>Понравившиеся</h2>
   <?= $this->render('../_video', [
        'model' => $model,
        'lg' => 3,
        'md' => 4,
        'sm' => 4,
         'xs' => 12,
   ]);?>
           
     </div>
</div>
<?php Pjax::end()?>