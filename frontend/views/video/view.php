<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
$this->title = $model->name;
?>
<div style=" padding: 60;margin-right: 60px;margin-left: 60px;background-color: none" >

    <div class="col-md-8 padding-30 " style="margin: 0px" >

        <div class=" ">
          <video src="/<?=$model->src?>" width="100%" height="100%" controls="controls"></video>
         </div>

        <div class="about-video my-video-video background-gray" style="padding-top: -15px; width: 100%">
            <h1 style="margin: 0px"></h1>
            <h2><p><?=$model->name?></p></h2>

            <p><?=$model->profile->nickname?></p>
            <p><?=$model->date?></p>
            <p>Просмотры <?=$model->view->views?></p>
               <?php Pjax::begin(); ?>
              <?= Html::beginForm(['video/view', 'id' => $id, 'favorites' => 'favorites'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
                <input type="submit" name="favorites">
              <?= Html::endForm() ?>
              <h3><?=count($model->favorites)?></h3>
              <?php Pjax::end(); ?>
            <?php Pjax::begin(); ?>
              <?= Html::beginForm(['video/view', 'id' => $id, 'like' => 'like'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
                <input type="submit" name="like">
              <?= Html::endForm() ?>
              <h3><?=count($model->likes)?></h3>
              <?php Pjax::end(); ?>
            <?php Pjax::begin();?>
            <span class="vote plus" title="Нравится"><a href="<?=Url::to(['video/like', 'id' => $id])?>"><i class="fa fa-thumbs-up"></i></a> <?=count($model->likes)?></span>
            <?php Pjax::end();?>

        </div>
    <h2 style="color: #3a2222">Комментарии</h2>
    <style type="text/css">
        .comments li{
            list-style-type: none;
        }
    </style>


    <ul class="comments my-video-video background-gray" style="width: 100%">
           <?php foreach($model->comments as $com):?>
            <li>
                       <div class="media my-comments ">
                                  <div class="media-left">
                                      <a href="#">
                                          <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                      </a>
                                  </div>
                                  <div class="media-body">
                                      <div class="media-heading">
                                         <div class="author"><?=$com->profile->nickname?></div>
                                          <div class="metadata">
                                           <span class="date"><?=$com->date?></span>
                                          </div>
                                      </div>
                                   <div class="media-text text-justify"><?=$com->content?></div>
                                    <div class="footer-comment">
                                      <span class="vote plus" title="Нравится">
                                        <i class="fa fa-thumbs-up"></i>
                                      </span>
                                      </div>
                                  </div>
                            </div>  
                         
                    </li>                <ul>
                    <?php foreach($com->comments as $comments):?>
                        <li>
                       <div class="media my-comments">
                                  <div class="media-left" >
                                      <a href="#">
                                          <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                      </a>
                                  </div>
                                  <div class="media-body">
                                      <div class="media-heading">
                                         <div class="author"><?=$comments->profile->nickname?></div>
                                          <div class="metadata">
                                            <span class="date"><?=$comments->date?></span>
                                          </div>
                                      </div>
                            
                                   <div class="media-text text-justify"><?=$comments->content?></div>
                                      <div class="footer-comment">
                                          <span class="vote plus" title="Нравится">
                                            <i class="fa fa-thumbs-up"></i>
                                          </span>
                                      </div>
                                  </div>
                            </div>  
                         
                    </li>                    
                <?php endforeach;?>
                </ul>
           <?php endforeach;?>
    </ul>

    </div>

    <div class="col-md-4 padding-30 background-gray" style="margin: 0px">
        <div class=" ">
        <?php foreach($model->profile->videos as $video):?>

                <div class="col-md-6 nopadding">
                 <a href="<?=Url::to(['video/view', 'id' => $video->id])?>"><img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;"></a>
                </div>
                <div class="col-md-6">
                    <a href="<?=Url::to(['video/view', 'id' => $video->id])?>"><p><?=$video->name?></p></a>
                    <p>prosmotreno | <?=$video->date?></p>
                </div>

            <div class="clearfix"></div>
        <?php endforeach;?>
        </div>
    </div>

</div>
