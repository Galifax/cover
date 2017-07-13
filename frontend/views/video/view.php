<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
$this->title = $model->name;
?>
<div class="container-fluid nopadding background-gray "   style=" padding: 60;margin-right: 60px;margin-left: 60px" >

    <div class="col-md-8 padding-30 " style="margin: 0px" >

        <div class=" ">
          <video src="/<?=$model->src?>" width="100%" height="100%" controls="controls"></video>
         </div>
<!--         <form method="POST">-->
<!--             <input type="submit" name="like" value="like">-->
<!--         </form>-->
        <div class="about-video " style="padding-top: -15px">
            <h1 style="margin: 0px"></h1>
            <h2><p><?=$model->name?></p></h2>

            <p><?=$model->profile->nickname?></p>
            <p><?=$model->date?></p>
           
            <span class="vote plus" title="Нравится"><i class="fa fa-thumbs-up"></i></span>
        </div>
    <h2>Комментарии</h2>
    <ul>
           <?php foreach($model->comments as $com):?>
                <li><?=$com->profile->nickname?> <?=$com->content?> <?=$com->date?></li>
                <ul>
                    <?php foreach($com->comments as $comments):?>
                        <li><?=$comments->profile->nickname?> <?=$comments->content?> <?=$comments->date?></li>
                    <?php endforeach;?>
                </ul>
           <?php endforeach;?>
    </ul>
    </div>


    <div class="col-md-4 padding-30" style="margin: 0px">
        <div class=" background-gray">
        <?php foreach($model->profile->videos as $video):?>
                <div class="col-md-6 nopadding">
                  <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href=""></a>
                    <p><?=$video->name?></p>
                    <p>prosmotreno | <?=$video->date?></p>
                </div>
            <div class="clearfix"></div>
        <?php endforeach;?>
    </div>

</div>

</div>