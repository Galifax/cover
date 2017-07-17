    <?php
    use yii\widgets\Pjax;
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    ?>

    <div class="container">

        <div class="row profile container">

            <div class="tab-content">



                <div id="home" class="tab-pane fade in active">

                    <div class="col-md-4">
                        <img class="profile-img" src="<?= $model->avatar ?>">
                           <div class="text-center">
                                <a href="#" class="btn btn-default">Редактировать</a>
                               <a href="#" class="btn btn-default">Удалить</a>
                                <a href="#" class="btn btn-default">Сменить пароль</a>

                           </div>
                        <div class="user-info">
                            <div class="col-md-6">
                                <P>Дата рождения</P>
                                <P>Пол</P>
                                <P>Любимый музыка</P>
                                <P>О себе</P>
                                <P>Контактная информация</P>
                            </div>
                            <div class="col-md-6">
                                <P><?= $model->born ?></P>
                                <P><?= $model->floor ?></P>
                                <P><?= $model->favorites ?></P>
                                <P><?= $model->about_myself ?></P>
                                <P><?= $model->contact ?></P>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>дата рождения</h3>
                        <p><?= $model->born ?></p>
                        <a href="#" class="">редактировать</a>
                        <ul>
                        <li>
                            <?php Pjax::begin();?>
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>  
    <?= $form->field($model, 'nickname')->textArea()->label('nickname')  ?>
    <?= $form->field($model, 'name')->textArea()->label('name')  ?>
    <?= $form->field($model, 'surname')->textArea()->label('Фамилия') ?>
    <?= $form->field($model, 'floor')->textArea()->label('Пол')  ?>
    <?= $form->field($model, 'born')->textArea()->label('Год призыва')  ?>
    <?= $form->field($model, 'avatar')->textArea()->label('Аватар')  ?>
    <?= $form->field($model, 'favorites')->textArea()->label('Любимая музыка') ?>
    <?= $form->field($model, 'about_myself')->textArea()->label('О себе')  ?>
    <?= $form->field($model, 'contact')->textArea()->label('Контакты')  ?>   
    
    <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>
     <?php Pjax::end();?>
                        </li>
                        </ul>
                        <h3>Пол</h3>
                        <p><?= $model->floor ?></p>
                        <a href="#" class="">редактировать</a>
                        <h3>любимая музыка</h3>
                        <P><?= $model->favorites ?></P>
                        <a href="#" class="">редактировать</a>
                        <h3>О себе</h3>
                        <P><?= $model->about_myself ?></P>
                        <a href="#" class="">редактировать</a>
                        <h3>Контактная информация</h3>
                        <P><?= $model->contact ?></P>
                        <a href="#" class="">редактировать</a>
                        <h3>Емейл</h3>
                        <P><?= $model->user->email ?></P>
                        <a href="#" class="">редактировать</a>

                    </div>


                </div>

                <div id="menu1" class="my-video tab-pane fade">

                    <div class="profile-content container-fluid" style="background-color: none">
                        <div class="col-md-8 col-md-push-4 clearfix">
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="найти моё видео" size="45">
                                </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Найти</button>
                            </form>
                        </div>

                        <div class="my-video-blok" style="padding-top: 30px;">

                            <h2 style="text-align: center">Мои видео</h2>
                            <div style="margin-left: 13%">
                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>
                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>
                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>
                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>

                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>

                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>

                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>


                            </div>
                            <div class="clearfix"></div>
                            <div style="text-align: center">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="menu2" class="my-video tab-pane fade">

                    <h2 style="text-align: center">Понравившееся</h2>
                    <div style="margin-left: 13%">
                        <div class="my-video-video background-gray">
                            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                            <a href="">link on video + video name</a>
                            <p>prosmotreno | data dobavlenia</p>
                            <a href="#" class="">Убарть из понравившегося</a>

                        </div>
                        <div class="my-video-video background-gray">
                            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                            <a href="">link on video + video name</a>
                            <p>prosmotreno | data dobavlenia</p>
                            <a href="#" class="">Убарть из понравившегося</a>

                        </div>
                        <div class="my-video-video background-gray">
                            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                            <a href="">link on video + video name</a>
                            <p>prosmotreno | data dobavlenia</p>
                            <a href="#" class="">Убарть из понравившегося</a>

                        </div>
                        <div class="my-video-video background-gray">
                            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                            <a href="">link on video + video name</a>
                            <p>prosmotreno | data dobavlenia</p>
                            <a href="#" class="">Убарть из понравившегося</a>

                        </div>
                        <div class="clearfix"></div>
                        <div style="text-align: center">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>

                    </div>


                    </div>


                </div>

                </div>

            </div>
        </div>
    </div>
