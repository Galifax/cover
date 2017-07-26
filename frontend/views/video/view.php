<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
$this->title = $model->name;
?>
<?php Pjax::begin();?>
<div style=" padding: 60;margin-right: 60px;margin-left: 60px;background-color: none" >

    <div class="col-md-8 padding-30 " style="margin: 0px" >

        <div class=" ">
                <img src="web/<?=$model->src?>" width="100%" >

           <!--   <video src="/<?=$model->src?>" width="100%" height="100%" controls="controls" preload="<?=$model->src?>">
                         <img src="<?=$model->src?>" width="100%" >
 -->
             </video>

        </div>

        <div class="about-video my-video-video border" style="padding-top: -15px; width: 100%">
            <h2 style="margin: 0;padding: 10px;font-size: 23px "><?=$model->name?></h2>
            <p style="padding-left: 10px;">Добавленно <?=$model->date?></p>
            <div class="btn-group btn-group-justified text-center" style="font-size: 18px; ">
                <div class="btn-group border" >
                    <p>
                        <?php if($favorites == 0):?>
                            <span class="vote plus" title="В понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">Добавить в избранное <i class="fa fa-plus" aria-hidden="true"></i></i></a></span>
                        <?php else:?>
                            <span  class="vote plus" title="Убрть из понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">Убрать из избранного <i  class="fa fa-minus" aria-hidden="true"></i></a></span>
                        <?php endif;?>
                    </p>
                </div>
                <div class="btn-group border">
                    <p>
                    <?php if($likes == 0):?>
                        <span class="vote plus" title="Поставить лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-up"></i></a> <?=count($model->likes)?></span>
                    <?php elseif($likes == 1):?>
                        <span class="vote plus" title="Убрать лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-o-up"></i></a> <?=count($model->likes)?></span>
                    <?php endif;?>
                    </p>
                </div>
                <div class="btn-group border">
                    <p>Просмотры
                        <i class="fa fa-eye" aria-hidden="true"></i> <?=$model->view->views?>
                    </p>
                </div>
            </div>


                 <div class="profile-sidebar col-md-4">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic text-center">
                        <img class="profile-img" src="https://s1.1zoom.ru/prev2/518/Big_cats_Lions_Canine_tooth_fangs_Closeup_Painting_517994_189x225.jpg">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle ">
                        <div class="profile-usertitle-name">
                            <a href="#"><?=$model->profile->nickname?></a>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                </div>

            <div class="col-md-8" style="font-size: 16px;margin-top: 20px">

<!--                <h3 class="text-center">Описание</h3>-->

            </div
                        <p style="padding: 5px"><?=$model->description?></lore></p>
        </div>

        <div class="my-video-video background-gray" style="width: 100%">



            <div class="" style="padding: 15px"><!-- стиль-->
                <div class="post-comments"><!-- Начало ковентов-->
                <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => 0])->label(false) ?>
                <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
                <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($comments, 'content')->textArea()->label('Текст') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>

                    <div class="comments-nav">
                        <ul class="nav nav-pills">
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    Всего <?=count($model->comments)?> комментария <span class="caret"></span>
                                </a>
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
                                        <span style="float:right"><a href="#">Лайк!</a></span>
                                        
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
   </div> <!-- col-md-8-->

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



    <div class="col-md-4 padding-30" style="margin: 0px">
            <ul class="list-unstyled video-list-thumbs row">
                <li class="col-xs-12">
                    <a class="video-list-thumbs-a" href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration">03:15</span>
                        <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    </a>
                    <div class="video-text">
                        <a class="username-video" href="#">Username</a>
                        <p>Просмотры | date</p>
                    </div>
                </li>
                <li class="col-xs-12">
                    <a class="video-list-thumbs-a" href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration">03:15</span>
                        <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    </a>
                    <div class="video-text">
                        <a class="username-video" href="#">Username</a>
                        <p>Просмотры | date</p>
                    </div>
                </li>
                <li class="col-xs-12">
                    <a class="video-list-thumbs-a" href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration">03:15</span>
                        <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    </a>
                    <div class="video-text">
                        <a class="username-video" href="#">Username</a>
                        <p>Просмотры | date</p>
                    </div>
                </li>
                <li class="col-xs-12">
                    <a class="video-list-thumbs-a" href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration">03:15</span>
                        <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    </a>
                    <div class="video-text">
                        <a class="username-video" href="#">Username</a>
                        <p>Просмотры | date</p>
                    </div>
                </li>
                <li class="col-xs-12">
                    <a class="video-list-thumbs-a" href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration">03:15</span>
                        <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    </a>
                    <div class="video-text">
                        <a class="username-video" href="#">Username</a>
                        <p>Просмотры | date</p>
                    </div>
                </li>
                <li class="col-xs-12">
                    <a class="video-list-thumbs-a" href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration">03:15</span>
                        <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                    </a>
                    <div class="video-text">
                        <a class="username-video" href="#">Username</a>
                        <p>Просмотры | date</p>
                    </div>
                </li>

            </ul>
        </div>
</div>
<?php Pjax::end();?>