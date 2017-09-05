<?php
use yii\widgets\ListView;
echo ListView::widget([
     'dataProvider' => $model,
     'itemOptions' => ['class' => 'item'],
     'itemView' => '_item_view',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);