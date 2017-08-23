<?php
    use yii\widgets\Pjax;
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;
    $this->title = 'Профиль | '. $model->nickname ? $model->nickname : 1;
    ?>
    <?php if ($id==Yii::$app->user->id):?>

        <div class="row profile ">

            <div class="fb-profile">
                <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
                <img align="left" class="fb-image-profile thumbnail"  src="<?=empty($model->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->avatar?>" alt="Profile image example"/>
                 <div class="fb-profile-text">
                    <h1>Профиль: <?= $model->nickname?></h1>
                </div>
            </div>
            <hr>
         
            <div class="clearfix"></div>
            
                <div class="col-md-3">

                        <div class="panel-default">
                            <div class="panel-body">
                                <div class="media">

                                    <div style="height: 30px">

                                            <?= Html::button('Редактировать', ['value' => Url::to(['/profile/edit', 'id'=>$model->id]) , 'style' => 'width: 100%', 'class' => 'btn btn-success' , 'id' => 'modalButton2']) ?>

                                    </div>
                                    <ul class="list-group">
                                        <hr>
                                        <li class="list-group-item text-right"><span class="pull-left">Имя</span> <?= $model->name?></li>
                                        <hr>
                                        <li class="list-group-item text-right"><span class="pull-left">Пол</span> <?= $model->floor?></li>
                                        <hr>
                                        <li class="list-group-item text-right"><span class="pull-left">Страна</span> <?= $model->country?></li>
                                        <hr>
                                        <li class="list-group-item text-right"><span class="pull-left">Контакты</span> <?= $model->contacts?></li>
                                        <hr>
                                        <li class="list-group-item"><span class="">Любимая музыка</span><br><?= $model->favorites?> </li>
                                        <hr>
                                        <li class="list-group-item"><span class="pull-left">О себе</span><br> <?= $model->about_myself?></li>
                                        <hr>
                                    </ul>

                              </div>
                       </div>
                    </div>
                </div>
                <div class="col-md-9">

                    <h2 class="text-center">Коментарии к моим видео</h2>

                    <h2 class="text-center">Коментариев нет (если коментов нет)</h2>
                      
                       <div class="row"><!-- Ров1-->
                         <?php Pjax::begin();?>
                       <?php foreach($comments as $comment):?>

                        <div class="media"><!-- Первый уровень коментов-->

                            <div class="media-heading">
                                 <span class="label label-info"><?= $comment->profile->nickname?></span> <?= $comment->date?>
                            </div>

                                <div class="media-left">
                                  <?php $form = ActiveForm::begin([
                                        'options' => ['data-pjax' => true]
                                    ]);?>
                                       <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                       <input type="hidden" name="name" value="<?=$_GET['name']?>">
                                       <input type="checkbox" name="is_view" id="is<?=$comment->id?>" value="<?=$comment->id?>" >
                                       <input type="submit">
                                   <?php ActiveForm::end();?>
                                   <img class="media-object img-rounded img1" src="<?=empty($comment->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $comment->profile->avatar?>" alt="">
                                </div>
                                <!-- media-left -->


                                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                    <p><?= $comment->content?></p>
                                    <div class="comment-meta">
                                          <span>
                                        <a class="" role="button" data-toggle="collapse" href="#collapse1<?=$comment->id?>" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                                        </span>
                                        <span><a href="#">Удалить</a></span>
                                        <span><a href="#">Редактировать</a></span>
                                  
                                        <span style="float:right"><a href="#">Лайк!</a></span>
                                        
                                      <div class="collapse" id="collapse1<?=$comment->id?>">
                <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($com, 'parent_id')->hiddenInput(['value' => $comment->id])->label(false) ?>
                <?= $form->field($com, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($com, 'profile_id')->hiddenInput(['value' => $comment->video->profile->id])->label(false) ?>
                <?= $form->field($com, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($com, 'content')->textArea()->label('Текст') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                                      </div>
                                        

                                    </div>

                                </div><!-- медиа боди-->

                        </div><!-- Первый уровень коментов \/ вставлять ниже-->
                    <?php endforeach;?>
                      <?php Pjax::end();?>
                    </div><!-- Ров1-->
                  
                    
            </div>

    <?php else:?>
    <div class="row profile">

        <div class="fb-profile">
            <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
            <img align="left" class="fb-image-profile thumbnail"  src="<?=empty($model->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->avatar?>" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1>Профиль: <?= $model->nickname?></h1>
            </div>
        </div>
        <hr>
        <div class="clearfix"></div>

                <div class="col-md-3">


                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="media"style="border: none;">

                                <ul class="list-group">
                                    <hr>
                                    <li class="list-group-item text-right"><span class="pull-left">Имя</span> <?= $model->name?></li>
                                    <hr>
                                    <li class="list-group-item text-right"><span class="pull-left">Пол</span> <?= $model->floor?></li>
                                    <hr>
                                    <li class="list-group-item text-right"><span class="pull-left">Страна</span> <?= $model->country?></li>
                                    <hr>
                                    <li class="list-group-item text-right"><span class="pull-left">Контакты</span> <?= $model->contacts?></li>
                                    <hr>
                                    <li class="list-group-item"><span class="">Любимая музыка</span><br><?= $model->favorites?> </li>
                                    <hr>
                                    <li class="list-group-item"><span class="pull-left">О себе</span><br> <?= $model->about_myself?></li>
                                    <hr>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
    </div>

                <div class="col-md-9">
                    <h2 class="text-center">Видео пользователя</h2>
 <ul class="list-unstyled video-list-thumbs row">
         <?php foreach($model->videos as $video):?>
        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    
            <a data-pjax="0" class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">

                <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration">03:15</span>
                <h2><?= $video->name?></h2>
            </a>
            <div class="video-text">
                <p><?= $video->date?></p>
            </div>
        </li>
        <?php endforeach;?>
</ul>   
            </div>
            
        </div>

    <?php endif;?>