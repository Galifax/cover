  <?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
   ?>

<div class="profile-content" style="background-color: none">

              <h2>Мои Видео</h2>
   <?= $this->render('../_video', [
        'model' => $model,
        'lg' => 3,
        'md' => 4,
        'sm' => 4,
         'xs' => 12,
   ]);?>
                       
</div>

