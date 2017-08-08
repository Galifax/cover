<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
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

        <div class="about-video my-video-video border" style="padding-top: -15px; width: 100%">
            <h2 style="margin: 0;padding: 10px;font-size: 23px "><?=$model->name?></h2>
            <h2 style="margin: 0;padding: 10px;font-size: 23px ">Категория: <?= $model->category->name?></h2>
            <p style="padding-left: 10px;">Добавленно <?=$model->date?></p>
            <ul class="btn-group btn-group-justified text-center" style="font-size: 18px; ">
                <li class="btn-group border" >
                    <p>
                    <?php Pjax::begin(['enablePushState' => false]);?>
                        <?php if($favorites == 0):?>
                            <span class="vote plus" title="В понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">Добавить в избранное <i class="fa fa-plus" aria-hidden="true"></i></i></a></span>
                        <?php else:?>
                            <span  class="vote plus" title="Убрть из понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">Убрать из избранного <i  class="fa fa-minus" aria-hidden="true"></i></a></span>
                        <?php endif;?>
                    <?php Pjax::end();?>
                    </p>
                </li>
                <div class="btn-group border">
                    <p>
                    <?php Pjax::begin(['enablePushState' => false]);?>

                    <?php if($likes == 0):?>
                        <span class="vote plus" title="Поставить лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-up"></i></a> <?=count($model->likes)?></span>
                    <?php elseif($likes == 1):?>
                        <span class="vote plus" title="Убрать лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-o-up"></i></a> <?=count($model->likes)?></span>
                    <?php endif;?>
                    <?php Pjax::end();?>

                    </p>
                </div>
                <div class="btn-group border" style="padding-top: 10px">
                    <p><i class="fa fa-eye" aria-hidden="true"></i> <?= $model->views?></p>
                </div>
            </ul>

                 <div class="profile-sidebar col-md-4">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img class="media-object img-rounded img1" src="<?=empty($model->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->profile->avatar?>" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle ">
                        <div class="profile-usertitle-name">
                            <a href="<?=Url::to(['/profile', 'id' => $model->profile->id, 'name' => $model->profile->nickname])?>"><?=$model->profile->nickname?></a>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                </div>

            <div class="" style="padding:5px;font-size: 16px">

                <p><?=$model->description?></lore></p>

            </div

        </div>
        <?php Pjax::begin();?>
        <div class="my-video-video " style="width: 100%">



            <div class="" style="padding: 15px"><!-- стиль-->
                <div class="post-comments"><!-- Начало ковентов-->
                <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => 0])->label(false) ?>
                <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
                <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($comments, 'content')->textArea()->label('Оставить комментарий') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>

                    <div class="comments-nav">
                        <ul class="nav nav-pills">
                            <li role="presentation" class="dropdown">
                                <p style="padding-top: 10px">
                                    Всего <?=count($model->comments)?> комментария <span class="caret"></span>
                                </p>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Best</a></li>
                                    <li><a href="#">Hot</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                       <div class="row"><!-- Ров1-->
                       <?php foreach($model->comments as $comments):?>

                        <div class="media"><!-- Первый уровень коментов-->

                            <div class="media-heading">
                                 <span class="label label-info"><?= $comments->profile->nickname?></span> <?= $comments->date?>
                            </div>

                                <div class="media-left">
                                   <img class="media-object img-rounded img1" src="http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg" alt="">
                                </div>
                                <!-- media-left -->


                                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                    <p><?= $comments->content?></p>
                                    <div class="comment-meta">
                                          <span>
                                        <a class="" role="button" data-toggle="collapse" href="#collapse1<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                                        </span>
                                        <span><a href="#">Удалить</a></span>
                                        <span><a href="#">Редактировать</a></span>
                                        <a data-toggle="collapse" data-target="#collapse<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Показать коментарии (<?=count($comments->comments)?>)</a>
                                        <span class="vote plus" title="Поставить лайк" style="float: right"><a href="#"><i class="fa fa-thumbs-up"></i> 100500</a></span>
                                        
                                      <div class="collapse" id="collapse1<?=$comments->id?>">
                <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => $comments->id])->label(false) ?>
                <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
                <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($comments, 'content')->textArea()->label('Текст') ?>
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
                                   <img class="media-object img-rounded img1" src="<?=empty($comments->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : '/'.$comments->profile->avatar?>" alt="">
                                </div>
                                <!-- media-left -->


                                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                    <p><?= $comments->content?></p>
                                    <div class="comment-meta">
                                              <span>
                                        <a class="" role="button" data-toggle="collapse" href="#collapse<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                                        </span>
                                        <span><a href="#">Удалить</a></span>
                                        <span><a href="#">Редактировать</a></span>
                                        <a data-toggle="collapse" data-target="#collapse<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Показать коментарии (<?=count($comments->comments)?>)</a>
                                        <span style="float:right"><a href="#">Лайк!</a></span>
                                        
                                      <div class="collapse" id="collapse<?=$comments->id?>">
                 <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => $comments->parent_id])->label(false) ?>
                <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
                <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($comments, 'content')->textArea()->label('Текст') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                                      </div>
                                                            <!-- comment-meta -->

                                     
                                      
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
                    </div><!-- Ров1-->
            

                
                </div><!-- Начало ковентов-->
            </div><!-- стиль-->

        </div> <!-- мои видео задник-->
        <?php Pjax::end();?>
   </div> <!-- col-md-8-->

</div>

    <div class="col-sm-4 padding-30" style="margin: 0px">
            <ul class="list-unstyled video-list-thumbs">
                <?php foreach($model->category->video as $video):?>
                <li class="col-xs-12">
                    <a class="video-list-thumbs-a" href="<?= Url::to(['/video/view', 'id'=>$video->id])?>" title="<?= $video->name?>">
                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                        <span class="duration">03:15</span>
                        <h2 class="text-transfer"><?= $video->name?></h2>
                    </a>
                    <div class="video-text">
                        <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                        <p><?= $video->date?></p>
                    </div>
                </li>
            <?php endforeach;?>
            </ul>
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
