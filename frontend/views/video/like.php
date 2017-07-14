 <?php use yii\helpers\Url;?>
 <span class="vote plus" title="Нравится"><a href="<?=Url::to(['video/like', 'id' => $id])?>"><i class="fa fa-thumbs-up"></i></a> <?=count($model->likes)?></span>