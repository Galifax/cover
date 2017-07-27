<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$form = ActiveForm::begin([
    'options' => ['enctype' =>'multipart/form-data']
]) ?>
    <?= $form->field($model, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>
    <?= $form->field($model, 'name')->textInput()->label('Название')?>
    <?= $form->field($model, 'description')->textInput()->label('Описание') ?>
    <?= $form->field($model, 'file')->fileInput()->label('Загрузить видео')?>
    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
            <?= Html::submitButton('Редактировать', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 