<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$form = ActiveForm::begin([
    'options' => ['enctype' =>'multipart/form-data']
]) ?>
    <?= $form->field($model, 'profile_id')->textInput(['value' => Yii::$app->user->id]) ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'description')->textInput() ?>
    <?= $form->field($model, 'file')->fileInput() ?>
    <?= $form->field($model, 'date')->textInput(['value' => date('Y-m-d H:i:s')]) ?>

    <div class="form-group">
            <?= Html::submitButton('Редактировать', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 