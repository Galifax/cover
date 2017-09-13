<?php 
	use yii\widgets\ListView;
	

	
	echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => '_view',
    'pager' => ['class' => \kop\y2sp\ScrollPager::className()],
    'viewParams' => [
    'video' => $model
	]
	

]);
	
?>