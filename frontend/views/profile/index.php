    <?php
    use yii\widgets\Pjax;
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;
    $this->title = 'Профиль | '. $model->nickname ? $model->nickname : 1;
    ?>
    <div class="container">

        <div class="row profile container">

            <div class="tab-content">
    
                <div class="col-md-4">
                    <img width='100%' src="<?=empty($model->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->avatar?>" alt="">
                    
                    <?= Html::button('Редактировать', ['value' => Url::to(['edit', 'id'=>$model->id]) , 'class' => 'btn btn-success' , 'id' => 'modalButton2']) ?>
                    <a href="#" class="btn btn-default"> Аватар</a>
                    <a href="<?= Url::to(['del'=>$model->avatar])?>" class='btn btn-danger'>Delete</a>

                    <div class="">


                            <div class="row ">
                                <table style="border: solid 1px black">
                                    <tbody>
                                    <tr>
                                        <td>nickname</td>
                                        <td><?= $model->nickname?></td>
                                    </tr>
                                    <tr>
                                        <td>name</td>
                                        <td><?= $model->name?></td>
                                    </tr>
                                    <tr>
                                        <td>Пол</td>
                                        <td><?= $model->floor?></td>
                                    </tr>
                                    <tr>
                                        <td>Страна</td>
                                        <td><?= $model->country?></td>
                                    </tr>
                                    <tr>
                                        <td>Контакты</td>
                                        <td><?= $model->contact?></td>
                                    </tr>
                                    <tr>
                                        <td>Любимая музыка</td>
                                        <td><?= $model->favorites?></td>
                                    </tr>
                                    <tr>
                                         <td>О себе</td>
                                         <td><?= $model->about_myself?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                </div>
                <div class="col-md-8" style="background-color: #f5f5f5">

                    <h2 class="text-center">Коментарии к моим видео</h2>

                    <h2 class="text-center">Коментариев нет (если коментов нет)</h2>

                    <ul style="padding: 10px" class="list-unstyled video-list-thumbs row">
                        <?php foreach($random as $video):?>
                        <li >

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                                        <span class="glyphicon glyphicon-play-circle"></span>
                                        <span class="duration">03:15</span>
                                        <h2><?= $video->name?></h2>
                                    </a>
                                    <div class="video-text">
                                        <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                                        <p><?= $video->view->views?> <i class="fa fa-eye" aria-hidden="true"></i> | <?= $video->date?> </p>
                                    </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >
                             <div class="row"><!-- Ров1-->

                            <div class="media"><!-- Первый уровень коментов-->

                                <div class="media-heading">
                                    <span class="label label-info"><?= $video->profile->nickname?></span> Ответил 12 часов назад
                                </div>

                                <div class="media-left">
                                    <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                </div>
                                <!-- media-left -->


                                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                    <p> 1yazmayın artık amk, görmeyeyim sol framede. insan bi meraklanıyor, ümitleniyor. sonra yine özlem dolu yazıları görüp hayal kırıklığıyla okuyorum.</p>
                                    <div class="comment-meta">
                                        <span ><a href="#" style="float: right">Лайк!</a></span>
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

                                    </div>

                                </div><!-- медиа боди-->

                            </div><!-- Первый уровень коментов \/ вставлять ниже-->
                        </div>
                        </div>
                            <div class="clearfix"
                        </li>
                            <?php endforeach;?>
                    </ul>

<!--                            --><?php //Pjax::begin();?>
<!--                            --><?php //$form = ActiveForm::begin(['options' => ['data-pjax' => true, 'enctype' => 'multipart/form-data']]); ?>
<!--                            --><?//= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>
<!--                            --><?//= $form->field($model, 'nickname')->textinput()->label('nickname')  ?>
<!--                            --><?//= $form->field($model, 'name')->textinput()->label('name')  ?>
<!--                            --><?//= $form->field($model, 'surname')->textinput()->label('Фамилия') ?>
<!--                            --><?//= $form->field($model, 'floor')->textinput()->label('Пол')  ?>
<!--                            --><?//= $form->field($model, 'country')->textinput()->label('Страна')  ?>
<!--                            --><?//= $form->field($model, 'favorites')->textArea()->label('Любимая музыка') ?>
<!--                            --><?//= $form->field($model, 'about_myself')->textArea()->label('О себе')  ?>
<!--                            --><?//= $form->field($model, 'contact')->textArea()->label('Контакты')  ?>
<!---->
<!--                            --><?//= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
<!--                            --><?php //ActiveForm::end(); ?>
<!--                             --><?php //Pjax::end();?>
                        </div>
    
    
                    
            </div>
            
        </div>
    </div>

    


