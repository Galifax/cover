<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$form = ActiveForm::begin([
    'options' => ['enctype' =>'multipart/form-data',
    'data-pjax' => true,
    ]
     
]) ?>
    <?= $form->field($model, 'nickname')->textInput() ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'surname')->textInput() ?>
    <?= $form->field($model, 'floor')->dropDownList([
    'Мужской' => 'Мужской',
    'Женский' => 'Женский',
    ])->label('Пол') ?>
    <?= $form->field($model, 'country')->textInput() ?>
    <?= $form->field($model, 'file')->fileInput() ?>
   
    <a class="btn btn-danger" href="<?=Url::to(['edit', 'ava' => $model->id])?>">Удалить</a>

    <?= $form->field($model, 'favorites')->textInput() ?>
    <?= $form->field($model, 'about_myself')->textInput() ?>
    <?= $form->field($model, 'contact')->textInput() ?>


    <div class="form-group">
            <?= Html::submitButton('Редактировать', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 
