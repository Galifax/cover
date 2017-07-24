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

        <div class="about-video my-video-video border" style="padding-top: -15px; width: 100%">
            <h2 style="margin: 0;padding: 10px;font-size: 23px "><?=$model->name?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequuntur debitis distinctio incidunt iste iure mollitia, non numquam officia officiis, pariatur porro quam quis repellat reprehenderit totam ut. Doloribus, fugiat.</h2>
            <p style="padding-left: 10px;">Добавленно <?=$model->date?></p>
            <div class="btn-group btn-group-justified text-center" style="font-size: 18px; ">
                <div class="btn-group border" >
                    <p>
                        <?php Pjax::begin();?>
                        <?php if($favorites == 0):?>
                            <span class="vote plus" title="В понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">Добавить в избранное <i class="fa fa-plus" aria-hidden="true"></i></i></a></span>
                        <?php else:?>
                            <span  class="vote plus" title="Убрть из понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>">Убрать из избранного <i  class="fa fa-minus" aria-hidden="true"></i></a></span>
                        <?php endif;?>
                        <?php Pjax::end();?>
                    </p>
                </div>
                <div class="btn-group border">
                    <p>
                    <?php Pjax::begin();?>
                    <?php if($likes == 0):?>
                        <span class="vote plus" title="Поставить лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-up"></i></a> <?=count($model->likes)?></span>
                    <?php elseif($likes == 1):?>
                        <span class="vote plus" title="Убрать лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-o-up"></i></a> <?=count($model->likes)?></span>
                    <?php endif;?>
                    <?php Pjax::end();?>
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

            </div>
            <p style="padding: 5px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores eveniet modi odio omnis rem repellendus sint unde. Cum debitis doloribus illum itaque nobis nulla quas quibusdam quidem unde veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dignissimos dolorem eius eligendi enim eos fugit ipsam magnam molestiae nam, quasi vel voluptatem. Aliquam ipsa molestiae odio placeat sed? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid et harum illum ipsam neque. A architecto aut cupiditate debitis enim, error explicabo illum incidunt, ipsa laudantium obcaecati quasi, quisquam quo? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem distinctio error fugiat illum odit optio, rem repellat sint totam? Amet consequuntur eveniet laudantium minima nemo quas quidem quod voluptas.</lore></p>
        </div>

        <div class="my-video-video background-gray" style="width: 100%">

<!--            <h2 style="color: #3a2222">Комментарии</h2>-->
<!--            <style type="text/css">-->
<!--                .comments li{-->
<!--                    list-style-type: none;-->
<!--                }-->
<!--            </style>-->
<!--            --><?php //Pjax::begin();?>
<!--            --><?php //$form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
<!--            --><?//= $form->field($comments, 'parent_id')->hiddenInput(['value' => 0])->label(false); ?>
<!--            --><?//= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false); ?>
<!--            --><?//= $form->field($comments, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>
<!--            --><?//= $form->field($comments, 'date')->hiddenInput(['value' => date('Y:m:d H:i:s')])->label(false);?>
<!--            --><?//= $form->field($comments, 'content')->textArea()->label('') ?>
<!--            --><?//= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
<!--            --><?php //ActiveForm::end(); ?>
<!--            <ul class="comments my-video-video" style="width: 100%;background-color: white">-->
<!--                   --><?php //foreach($model->comments as $com):?>
<!--                    <li>-->
<!--                               <div class="media my-comments ">-->
<!--                                          <div class="media-left">-->
<!--                                              <a href="#">-->
<!--                                                  <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">-->
<!--                                              </a>-->
<!--                                          </div>-->
<!--                                          <div class="media-body">-->
<!--                                              <div class="media-heading">-->
<!--                                                 <div class="author">--><?//=$com->profile->nickname?><!--</div>-->
<!--                                                  <div class="metadata">-->
<!--                                                   <span class="date">--><?//=$com->date?><!--</span>-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!--                                           <div class="media-text text-justify">--><?//=$com->content?><!--</div>-->
<!--                                            <div class="footer-comment">-->
<!--                                              <span class="vote plus" title="Нравится">-->
<!--                                                <i class="fa fa-thumbs-up"></i>-->
<!--                                              </span>-->
<!--                                              </div>-->
<!--                                          </div>-->
<!--                                          <a class="collapsed" data-toggle="collapse" data-target="#d1" style="padding-left:25px";>-->
<!--                           Ответить-->
<!--                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                  <ul>-->
<!--                                    <li>-->
<!---->
<!--                                      <div id="d1" class="collapse">-->
<!--                              --><?php //$form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
<!--                              --><?//= $form->field($comments, 'parent_id')->hiddenInput(['value' => $com->id])->label(false); ?>
<!--                              --><?//= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false); ?>
<!--                              --><?//= $form->field($comments, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>
<!--                              --><?//= $form->field($comments, 'date')->hiddenInput(['value' => date('Y:m:d H:i:s')])->label(false);?>
<!--                              --><?//= $form->field($comments, 'content')->textArea()->label('') ?>
<!--                              --><?//= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
<!--                              --><?php //ActiveForm::end(); ?>
<!--                                      </div>-->
<!--                                    </li>-->
<!---->
<!--                                  </ul>-->
<!--                            </li>-->
<!---->
<!--                            <ul>-->
<!--                            --><?php //foreach($com->comments as $comments):?>
<!--                                <li>-->
<!--                               <div class="media my-comments">-->
<!--                                          <div class="media-left" >-->
<!--                                              <a href="#">-->
<!--                                                  <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">-->
<!--                                              </a>-->
<!--                                          </div>-->
<!--                                          <div class="media-body">-->
<!--                                              <div class="media-heading">-->
<!--                                                 <div class="author">--><?//=$comments->profile->nickname?><!--</div>-->
<!--                                                  <div class="metadata">-->
<!--                                                    <span class="date">--><?//=$comments->date?><!--</span>-->
<!--                                                  </div>-->
<!--                                              </div>-->
<!---->
<!--                                           <div class="media-text text-justify">--><?//=$comments->content?><!--</div>-->
<!--                                              <div class="footer-comment">-->
<!--                                                  <span class="vote plus" title="Нравится">-->
<!--                                                    <i class="fa fa-thumbs-up"></i>-->
<!--                                                  </span>-->
<!--                                              </div>-->
<!--                                          </div>-->
<!--                                    </div>-->
<!---->
<!--                            </li>-->
<!--                                 <ul>-->
<!--                                    <li>-->
<!--                              --><?php //$form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
<!--                              --><?//= $form->field($comments, 'parent_id')->hiddenInput(['value' => $com->id])->label(false); ?>
<!--                              --><?//= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false); ?>
<!--                              --><?//= $form->field($comments, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>
<!--                              --><?//= $form->field($comments, 'date')->hiddenInput(['value' => date('Y:m:d H:i:s')])->label(false);?>
<!--                              --><?//= $form->field($comments, 'content')->textArea()->label('') ?>
<!--                              --><?//= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
<!--                              --><?php //ActiveForm::end(); ?>
<!--                                    </li>-->
<!--                                  </ul>-->
<!--                        --><?php //endforeach;?>
<!--                        </ul>-->
<!--                   --><?php //endforeach;?>
<!--            </ul>-->
<!--            --><?php //Pjax::end();?>
<!--        </div>-->
<!--    </div>-->


            <div class="" style="padding: 15px"><!-- стиль-->
                <div class="post-comments"><!-- Начало ковентов-->

                    <form>
                        <div class="form-group">
                            <label for="comment">Оставить ваш комментарий</label>
                            <textarea name="comment" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </form>

                    <div class="comments-nav">
                        <ul class="nav nav-pills">
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    Всего 3 комментария <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Best</a></li>
                                    <li><a href="#">Hot</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="row"><!-- Ров1-->

                        <div class="media"><!-- Первый уровень коментов-->

                            <div class="media-heading">
                                 <span class="label label-info">Валера89</span> Ответил 12 часов назад
                            </div>

                                <div class="media-left">
                                   <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                </div>
                                <!-- media-left -->


                                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                    <p> 1yazmayın artık amk, görmeyeyim sol framede. insan bi meraklanıyor, ümitleniyor. sonra yine özlem dolu yazıları görüp hayal kırıklığıyla okuyorum.</p>
                                    <div class="comment-meta">
                                        <span><a href="#">Удалить</a></span>
                                        <span><a href="#">Редактировать</a></span>
                                        <span style="float:right"><a href="#">Лайк!</a></span>
                                        <span>

                                    <!-- comment-meta -->

                                        <a data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">Показать коментарии (1)</a>
                                        <div class="panel-collapse collapse" id="collapse1">
                                            <div class="media"><!-- второй уровень коментов-->

                                                <div class="media-heading">
                                                    <span class="label label-info">Ололош</span> Ответил 1 часов назад
                                                </div>

                                                <div class="media-left">
                                                    <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                                </div>

                                                <div class="media-body"><!-- Медиа боди-->
                                                    <p>2yazmayın artık amk, görmeyeyim sol framede. insan bi meraklanıyor, ümitleniyor. sonra yine özlem dolu yazıları görüp hayal kırıklığıyla okuyorum.</p>
                                                    <div class="comment-meta">
                                                        <span style="float: right"><a href="#">Лайк!</a></span>
                                                        <span>
                        <a class="" role="button" data-toggle="collapse" href="#replyComment2" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                      </span>

                                                        <div class="collapse" id="replyComment2">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="comment">Your Comment</label>
                                                                    <textarea name="comment" class="form-control" rows="3"></textarea>
                                                                </div>
                                                                <button type="submit" class="btn btn-default">Send</button>
                                                            </form>
                                                        </div>

                                                        <!-- comment-meta -->

                                                        <a data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">Показать коментарии (0)</a>
                                                        <div class="panel-collapse collapse in" id="collapse2">
                                                            <!-- Пихать третий уровень туту -->

                                                        </div>
                                                        <!-- comments -->

                                                    </div><!-- комент мета -->
                                                </div><!-- медиа боди-->

                                            </div><!-- второй уровень коментов-->
                                        </div>

                                    </div>

                                </div><!-- медиа боди-->

                        </div><!-- Первый уровень коментов \/ вставлять ниже-->

                        <div class="media">
                            <!-- first comment -->

                            <div class="media-heading">
                                <span class="label label-info">Мышаня232</span> Ответил 2 часов назад
                            </div>



                            <div class="media-left">
                                <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">

                            </div>
                            <!-- media-left -->


                            <div class="media-body">
                                <p>3yazmayın artık amk, görmeyeyim sol framede. insan bi meraklanıyor, ümitleniyor. sonra yine özlem dolu yazıları görüp hayal kırıklığıyla okuyorum.</p>
                                <div class="comment-meta">
                                    <span style="float: right"><a href="#">Лайк!</a></span>
                                    <span>
                        <a class="" role="button" data-toggle="collapse" href="#replyComment3" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                      </span>

                                    <div class="collapse" id="replyComment3">
                                        <form>
                                            <div class="form-group">
                                                <label for="comment">Your Comment</label>
                                                <textarea name="comment" class="form-control" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default">Send</button>
                                        </form>
                                    </div>

                                    <!-- comment-meta -->

                                    <a data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">Показать коментарии (0)</a>
                                    <div class="panel-collapse collapse in" id="collapse3">
                                    </div>
                                    <!-- post-comments -->
                                </div>
                            </div>
                        </div>

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
