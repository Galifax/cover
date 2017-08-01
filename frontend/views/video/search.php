<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
?>
<?php Pjax::begin();?>
  <div class="row">

  <div class="col-md-10">
    <?= $this->render('../_video', compact('model'));?>
</div>
<div class="col-md-2">
<ul class="list-group">
  <a href="<?=Url::to(['video/search', 's' => $_GET["s"]])?>">
  <li class="list-group-item justify-content-between">
   Все категории
    <span class="badge badge-default badge-pill"><?=$video?></span>
  </li>
  </a>
  	<?php foreach($category as $cat):?>
  <a href="<?=Url::to(['video/search', 'id' => $cat->id, 'name' => $cat->name, 's' => $_GET["s"]])?>">
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

