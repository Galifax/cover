<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$form = ActiveForm::begin([
    
    'options' => ['data-pjax' => true],
]) ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'description')->textInput() ?>
    <?= $form->field($model, 'src')->textInput() ?>
   

    <div class="form-group">
            <?= Html::submitButton('Редактировать', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 
