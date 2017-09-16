<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>

<div class="container">
<h1 class="text-center">Редактирование: <?=$model->name?></h1>
<?php $form = ActiveForm::begin([
    'options' => ['data-pjax' => true],
]) ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'description')->textInput() ?>
   

    <div class="form-group">
            <?= Html::submitButton('Редактировать', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>
</div>
