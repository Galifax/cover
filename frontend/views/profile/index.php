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
                
                     <img src="http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg" style="width: 100%">
                    <a href="#" class="btn btn-default"> редактировать</a>
                    <a href="#" class="btn btn-default"> удалить</a>

                    <div class="">


                            <div class="row ">
                                <table style="border: solid 1px black">
                                    <tbody>
                                    <tr>
                                        <td>nickname</td>
                                        <td>valira</td>
                                    </tr>
                                    <tr>
                                        <td>name</td>
                                        <td>sered</td>
                                    </tr>
                                    <tr>
                                        <td>Пол</td>
                                        <td>???</td>
                                    </tr>
                                    <tr>
                                        <td>Страна</td>
                                        <td>2017-07-31</td>
                                    </tr>
                                    <tr>
                                        <td>Контакты</td>
                                        <td>2017-07-31</td>
                                    </tr>
                                    <tr>
                                        <td>Любимая музыка</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis fugit laborum perspiciatis quae quia ullam! Adipisci deleniti, explicabo hic impedit, maxime, numquam obcaecati odit quas quod sequi velit vero.</td>
                                    </tr>
                                    <tr>
                                         <td>О себе</td>
                                         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto dignissimos distinctio maxime numquam optio placeat possimus quisquam repudiandae ut? Adipisci amet error laudantium molestiae, quae quia quos tempora tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias, aspernatur consequuntur debitis dolorum enim hic id impedit itaque, laboriosam molestias neque numquam, officiis perspiciatis quae qui totam voluptatum.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                </div>
                <div class="col-md-8">
                            <?php Pjax::begin();?>
                            <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'enctype' => 'multipart/form-data']]); ?>
                            <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>  
                            <?= $form->field($model, 'nickname')->textinput()->label('nickname')  ?>
                            <?= $form->field($model, 'name')->textinput()->label('name')  ?>
                            <?= $form->field($model, 'surname')->textinput()->label('Фамилия') ?>
                            <?= $form->field($model, 'floor')->textinput()->label('Пол')  ?>
                            <?= $form->field($model, 'born')->textinput()->label('Страна')  ?>
                            <?= $form->field($model, 'favorites')->textArea()->label('Любимая музыка') ?>
                            <?= $form->field($model, 'about_myself')->textArea()->label('О себе')  ?>
                            <?= $form->field($model, 'contact')->textArea()->label('Контакты')  ?>   
                            
                            <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
                            <?php ActiveForm::end(); ?>
                             <?php Pjax::end();?>
                        </div>
    
    
                    
            </div>
            
        </div>
    </div>

    


