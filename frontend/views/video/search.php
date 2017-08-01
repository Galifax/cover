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
Категории
<form data-pjax="true">
   <p><input data-pjax="true" class="navbar-input col-md-10" type="" placeholder="Поиск" name="s"></p>
                      
   
   	<div class="clearfix"></div>
	<?php foreach($category as $cat):?>
    <p><input data-pjax="true" name="id" type="radio" value="<?=$cat->id?>" onclick="$('#subcar').trigger('click')"
    <?php if($_GET['id'] == $cat->id){
    	echo 'checked';
    }?>
    ><?=$cat->name?></p>
	<?php endforeach;?>
    <p><input id="subcat" type="submit" value="Выбрать" name="category"></p>
<form>
</div>
</div>
<?php Pjax::end();?>

