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
            <h2 class="nopadding" style="border-bottom: solid 1px #cccccc;margin: 0 "><?=$model->name?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h2>
                 <div class="profile-sidebar col-md-4">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic text-center">
                        <img class="profile-img" src="https://i.ytimg.com/vi/P_zOxS2hYOw/maxresdefault.jpg">
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
            <div class="col-md-8 text-center" style="font-size: 20px;margin-top: 20px">
            <p style="float: left">Добавленно<br>
                <?=$model->date?></p>
            <p style="float: right">Просмотры <br>
                <i class="fa fa-eye" aria-hidden="true"></i><?=$model->view->views?></p>

                <p style="float: left">
                    <?php Pjax::begin();?>
                    <?php if($favorites == 0):?>
                        <span class="vote plus" title="В понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>"><i class="fa fa-heart-o"></i></a></span>
                    <?php else:?>
                        <span class="vote plus" title="Убрть из понравившиеся видео"><a href="<?=Url::to(['video/view', 'id' => $id, 'favorites' => 'favorites'])?>"><i class="fa fa-heart"></i></a></span>
                    <?php endif;?>
                    <?php Pjax::end();?>
                </p>

                <p style="float: right">
                    <?php Pjax::begin();?>
                    <?php if($likes == 0):?>
                        <span class="vote plus" title="Поставить лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-up"></i></a> <?=count($model->likes)?></span>
                    <?php elseif($likes == 1):?>
                        <span class="vote plus" title="Убрать лайк"><a href="<?=Url::to(['video/view', 'id' => $id, 'like' => 'like'])?>"><i class="fa fa-thumbs-o-up"></i></a> <?=count($model->likes)?></span>
                    <?php endif;?>
                    <?php Pjax::end();?>
                </p>
            </div>

        </div>

        <div class="my-video-video background-gray" style="width: 100%">
            <h2 style="color: #3a2222">Комментарии</h2>
            <style type="text/css">
                .comments li{
                    list-style-type: none;
                }
            </style>
            <?php Pjax::begin();?>
            <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
            <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => 0])->label(false); ?>
            <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false); ?>
            <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>
            <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y:m:d H:i:s')])->label(false);?>
            <?= $form->field($comments, 'content')->textArea()->label('') ?>
            <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
            <ul class="comments my-video-video" style="width: 100%;background-color: white">
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
                                          <a class="collapsed" data-toggle="collapse" data-target="#d1" style="padding-left:25px";>
                           Ответить
                        </a>
                                    </div>

                                  <ul>
                                    <li>

                                      <div id="d1" class="collapse">
                              <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                              <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => $com->id])->label(false); ?>
                              <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false); ?>
                              <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>
                              <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y:m:d H:i:s')])->label(false);?>
                              <?= $form->field($comments, 'content')->textArea()->label('') ?>
                              <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
                              <?php ActiveForm::end(); ?>
                                      </div>
                                    </li>

                                  </ul>
                            </li>

                            <ul>
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
                                 <ul>
                                    <li>
                              <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                              <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => $com->id])->label(false); ?>
                              <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false); ?>
                              <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>
                              <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y:m:d H:i:s')])->label(false);?>
                              <?= $form->field($comments, 'content')->textArea()->label('') ?>
                              <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
                              <?php ActiveForm::end(); ?>
                                    </li>
                                  </ul>
                        <?php endforeach;?>
                        </ul>
                   <?php endforeach;?>
            </ul>
            <?php Pjax::end();?>
        </div>
    </div>

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



