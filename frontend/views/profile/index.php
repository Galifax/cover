<?php
    use yii\widgets\Pjax;
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;
    $this->title = 'Профиль | '. $model->nickname ? $model->nickname : 1;
    ?>


        <div class="row profile container">

            <div class="tab-content">
    
                <div class="col-md-4">


                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="media">
                                <?php Pjax::begin(['enablePushState' => false]);?>
                                    <div class="profile-userpic" align="center">
                                        <img class="thumbnail" src="<?=empty($model->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->avatar?>" width="300px" height="300px">
                                      <a href="<?= Url::to(['/profile', 'ava' => $model->id])?>" class='btn btn-danger'>Delete</a>
                                    </div>
                                <?php Pjax::end();?>
                                <?php Pjax::begin();?>
                                    <div class="text-center">
                                        <?= Html::button('Редактировать', ['value' => Url::to(['/profile/edit', 'id'=>$model->id]) , 'class' => 'btn btn-success' , 'id' => 'modalButton2']) ?>
                                    </div>
                                    <div class="media-body">
                                        <hr>
                                        <h3><strong>nickname</strong></h3>
                                        <p><?= $model->nickname?></p>
                                        <hr>
                                        <h3><strong>name</strong></h3>
                                        <p><?= $model->name?></p>
                                        <hr>
                                        <h3><strong>Gender</strong></h3>
                                        <p><?= $model->floor?></p>
                                        <hr>
                                        <h3><strong>Страна</strong></h3>
                                        <p><?= $model->country?></p>
                                        <hr>
                                        <h3><strong>Контакты</strong></h3>
                                        <p><?= $model->contact?></p>
                                        <hr>
                                        <h3><strong>Любимая музыка</strong></h3>
                                        <p><?= $model->favorites?></p>
                                        <hr>
                                        <h3><strong>О себе</strong></h3>
                                        <p><?= $model->about_myself?></p>
                                    </div>
                                <?php Pjax::end();?>

                                </div>

                              </div>
                      </div>
                 </div>
                <div class="col-md-8" style="background-color: #f5f5f5">

                    <h2 class="text-center">Коментарии к моим видео</h2>

                    <h2 class="text-center">Коментариев нет (если коментов нет)</h2>
                      
                       <div class="row"><!-- Ров1-->
                       <?php foreach($comments as $comment):?>

                        <div class="media"><!-- Первый уровень коментов-->

                            <div class="media-heading">
                                 <span class="label label-info"><?= $comment->video->profile->nickname?></span> <?= $comment->date?>
                            </div>

                                <div class="media-left">
                                   <img class="media-object img-rounded img1" src="<?=empty($model->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->avatar?>" alt="">
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
                    </div><!-- Ров1-->
                    
            </div>
            
        </div>
    </div>