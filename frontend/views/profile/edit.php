<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$form = ActiveForm::begin([
    'options' => ['enctype' =>'multipart/form-data']
]) ?>
    <?= $form->field($model, 'nickname')->textInput() ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'surname')->textInput() ?>
    <?= $form->field($model, 'floor')->textInput() ?>
    <?= $form->field($model, 'country')->textInput() ?>
    <?= $form->field($model, 'file')->fileInput() ?>
    <?= $form->field($model, 'favorites')->textInput() ?>
    <?= $form->field($model, 'about_myself')->textInput() ?>
    <?= $form->field($model, 'contact')->textInput() ?>


    <div class="form-group">
            <?= Html::submitButton('Редактировать', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 