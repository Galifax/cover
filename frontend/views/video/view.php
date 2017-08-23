<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use frontend\models\Comments;
$this->title = $model->name;
// echo substr(md5(uniqid()), 0, 20);
?>
<div class="col-sm-8 padding-30 " style="margin: 0px" >

        <div style="width: 100%;" >
          
            <video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto"
                   poster="<?= $model->preloader?>" data-setup="{}"
                   style="width: 100%">
                <source src="<?= $model->src?>" type='video/mp4'>
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>

     
        <script type="text/javascript">
     $(document).ready(function(){
        $('.video-js').height($('.video-js').width() * 0.6 + 'px');
    });
    $(window).resize(function(){
        $('.video-js').height($('.video-js').width() * 0.6 + 'px');
    });
    
        </script>

        <div class="about-video my-video-video" style="padding-top: -15px; width: 100%;">
            <h1 style="margin: 0;padding: 10px;font-size: 23px "><?=$model->name?></h1>
              <img style="width: 70px; float: left" src="<?=empty($model->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->profile->avatar?>" alt="">
                   <div style="margin-left: 10px; float: left">
                    <a href="<?=Url::to(['/profile', 'id' => $model->profile->id, 'name' => $model->profile->nickname])?>"><?=$model->profile->nickname?></a>
                    <?php Pjax::begin(['enablePushState' => false]);?>
                        <?php if($favorites == 0):?>
                            <span class="vote plus" title="В понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">В избранное <i class="fa fa-plus" aria-hidden="true"></i></a></span>
                        <?php else:?>
                            <span  class="vote plus" title="Убрть из понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">Убрать из избранного <i  class="fa fa-minus" aria-hidden="true"></i></a></span>
                        <?php endif;?>
                    <?php Pjax::end();?>

                    <?php Pjax::begin(['enablePushState' => false]);?>

                    <?php if($likes == 0):?>
                        <span class="vote plus" title="Поставить лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-up"></i></a> <?=count($model->likes)?></span>
                    <?php elseif($likes == 1):?>
                        <span class="vote plus" title="Убрать лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-o-up"></i></a> <?=count($model->likes)?></span>
                    <?php endif;?>
                    <?php Pjax::end();?>
                </div>
                <p style="float: right;">Просмотры<br><i class="fa fa-eye" style="float: right" aria-hidden="true"> <?=$model->views?></i></p>
                
                    <a href="<?= Url::to(['/video/view', 'id'=>$id, 'user_id' => $model->profile_id])?>">Подписатся</a>
                
        </div>

          

        
         <?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>
            <div class="description content" style="margin-top: 10px; padding: 20px;">
                 <?php 
                $date = new DateTime($video->date);        
                ?>
              <p>Опубликовано <?=$date->format('j').' '. $months[date($date->format('n'))]?></p>
              <p><?=$model->description?></p>
              <p>Категория: <?=$model->category->name?></p>
            </div>


            <?php Pjax::begin(['enablePushState' => false]);?>
        <div class="my-video-video content" style="width: 100%; margin-top: 16px;border: none">



            <div class="" style="padding: 15px"><!-- стиль-->
                <div class="post-comments"><!-- Начало ковентов-->
                <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => 0])->label(false) ?>
                <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
                <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($comments, 'content', ['template' => "{input}"
                    ])->textArea(['placeholder' => 
                    Yii::$app->session->getFlash('success') ? Yii::$app->session->getFlash('success') : 'Введите текст'])
                    ->label('Оставить комментарий') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                

                    <div class="comments-nav">
                        <ul class="nav nav-pills">
                            <li role="presentation" class="dropdown">
                                <p style="padding-top: 10px">
                                    Всего комментариев: <?=Comments::find()->where(['video_id' => $id])->count()?><span class="caret"></span>
                                </p>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Best</a></li>
                                    <li><a href="#">Hot</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                                                <?php $comment = new Comments();?>

                       <div class="row"><!-- Ров1-->

                       <?php foreach($comm as $comments):?>

                        <div class="media"><!-- Первый уровень коментов-->

                            <div class="media-heading">
                                 <span class="label label-info"><?= $comments->profile->nickname?></span> <?= $comments->date?>
                            </div>

                                <div class="media-left">
                                   <img class="media-object img-rounded img1" src="<?=empty($comments->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $comments->profile->avatar?>" alt="">
                                </div>
                                <!-- media-left -->


                                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                    <p><?= $comments->content?></p>
                                    <div class="comment-meta">
                                          <span style="float: left">
                                        <a class="" role="button" data-toggle="collapse" href="#collapse1<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                                        </span>
                                        
                                        <?php if($model->profile_id == Yii::$app->user->id or $comments->profile_id == Yii::$app->user->id):?>
                                        <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'style' => 'float: left']]); ?>
                                        <input type="hidden" name="delcom" value="<?=$comments->id?>">
                                        <input type="submit" name="" value="Удалить" style="font-size: 11.4px;">
                                        <?php ActiveForm::end();?>
                                        <?php endif;?>
                                        <a data-toggle="collapse" data-target="#collapse<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Показать коментарии (<?=count($comments->comments)?>)</a>
                                       <div class="clearfix"></div>
                                        
                                      <div class="collapse" id="collapse1<?=$comments->id?>">

                <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($comment, 'parent_id')->hiddenInput(['value' => $comments->id])->label(false) ?>
                <?= $form->field($comment, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($comment, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
                <?= $form->field($comment, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($comment, 'content')->textArea()->label('Текст') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                                      </div>
                                        <div class="panel-collapse collapse" id="collapse<?=$comments->id?>">

                       <div class="row"><!-- Ров1-->
                       <?php foreach($comments->comments as $comments):?>

                        <div class="media"><!-- Первый уровень коментов-->

                            <div class="media-heading">
                                 <span class="label label-info"><?= $comments->profile->nickname?></span> <?= $comments->date?>
                            </div>

                                <div class="media-left">
                                   <img class="media-object img-rounded img1" src="<?=empty($comments->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $comments->profile->avatar?>" alt="">
                                </div>
                                <!-- media-left -->


                                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                    <p><?= $comments->content?></p>
                                    <div class="comment-meta">
                                              <span>
                                         <span style="float: left">
                                        <a class="" role="button" data-toggle="collapse" href="#collapse1<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                                        </span>
                                        
                                        <?php if($model->profile_id == Yii::$app->user->id or $comments->profile_id == Yii::$app->user->id):?>
                                        <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'style' => 'float: left']]); ?>
                                        <input type="hidden" name="delcom" value="<?=$comments->id?>">
                                        <input type="submit" name="" value="Удалить">
                                        <?php ActiveForm::end();?>
                                        <?php endif;?>
                                      
                                       <div class="clearfix"></div>
                                      
                                    </div>

                                </div><!-- медиа боди-->

                        </div><!-- Первый уровень коментов \/ вставлять ниже-->
                    <?php endforeach;?>
                    </div><!-- Ров1-->
                                        </div>

                                    </div>

                                </div><!-- медиа боди-->

                        </div><!-- Первый уровень коментов \/ вставлять ниже-->
                    <?php endforeach;?>
                   <?php 
                   echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                    </div><!-- Ров1-->
            

                
                </div><!-- Начало ковентов-->
            </div><!-- стиль-->

        </div> <!-- мои видео задник-->
        <?php Pjax::end();?>
   </div> <!-- col-md-8-->

    <div class="col-sm-4" style="margin-top: 15px;">
              <?= $this->render('../_video', [
        'model' => $model->category->video,
        'lg' => 12,
        'md' => 12,
        'sm' => 12,
         'xs' => 12,
   ]);?>
    </div>
    </div>


<script>
   
    $('[data-toggle="collapse"]').on('click', function() {
        var $this = $(this),
            $parent = typeof $this.data('parent')!== 'undefined' ? $($this.data('parent')) : undefined;
        if($parent === undefined) { /* Just toggle my  */
            $this.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
            return true;
        }

        /* Open element will be close if parent !== undefined */
        var currentIcon = $this.find('.glyphicon');
        currentIcon.toggleClass('glyphicon-plus glyphicon-minus');
        $parent.find('.glyphicon').not(currentIcon).removeClass('glyphicon-minus').addClass('glyphicon-plus');

    });


</script>
