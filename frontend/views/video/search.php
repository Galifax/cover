<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = $name ? $name : 'Все категории';
?>
<?php Pjax::begin();?>
  <div class="row">

  <div class="col-sm-8 col-md-9" style="float:left">
      <div class="content" style="min-height: 90vh" >
    <?= $this->render('../_video', [
        'model' => $model,
        'lg' => 3,
        'md' => 4,
        'sm' => 6,
         'xs' => 12,
   ]);?>
      </div>
</div>
<div class="col-md-3 col-sm-4" style="float: right">
<ul class="list-group content">
    <h3 class="text-center" style="margin: 0px">Категории</h3>
  <a href="<?=Url::to(['video/search', 's' => $_GET["s"]])?>">
  <li class="list-group-item justify-content-between">
   Все категории
    <span class="badge badge-default badge-pill"><?=$video?></span>
  </li>
  </a>
  	<?php foreach($category as $cat):?>
  <a href="<?=Url::to(['video/search', 'id' => $cat->id, 'name' => str_replace('-', '_', $cat->name), 's' => $_GET["s"]])?>">
  <li class="list-group-item justify-content-between">
     <?=$cat->name?>
    <span class="badge badge-default badge-pill"><?=count($cat->video)?></span>
  </li>
  </a>
<?php endforeach;?>
 
</ul>
</div>
</div>
<?php Pjax::end();?>

