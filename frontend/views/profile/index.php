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



                <div id="home" class="tab-pane fade in active">
                    <div class="col-md-8">
        
                        <ul>
                        <li>
                            <?php Pjax::begin();?>
    <?php if($model->avatar != null):?>
    <img src="/uploads/<?=$model->avatar?>" width="200px;">
    <?php endif;?>
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'avatar')->textInput() ?>
    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false); ?>  
    <?= $form->field($model, 'nickname')->textinput()->label('nickname')  ?>
    <?= $form->field($model, 'name')->textinput()->label('name')  ?>
    <?= $form->field($model, 'surname')->textinput()->label('Фамилия') ?>
    <?= $form->field($model, 'floor')->textinput()->label('Пол')  ?>
    <?= $form->field($model, 'born')->textinput()->label('Год призыва')  ?>
    <?= $form->field($model, 'favorites')->textArea()->label('Любимая музыка') ?>
    <?= $form->field($model, 'about_myself')->textArea()->label('О себе')  ?>
    <?= $form->field($model, 'contact')->textArea()->label('Контакты')  ?>   
    
    <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>
     <?php Pjax::end();?>
                        </li>
                        </ul>
                      
                    </div>


              </div>

               


        </div>

     </div>

</div>
