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
    <?= $form->field($model, 'nickname')->textInput()->label('Никнейм')?>
    <?= $form->field($model, 'name')->textInput()->label('Имя')?>
    <?= $form->field($model, 'surname')->textInput()->label('Фамилия')?>
    <?= $form->field($model, 'born')->textInput(['id' =>'input-born'])->label('Дата рождения')?>
    <?= $form->field($model, 'floor')->dropDownList([
    'Мужской' => 'Мужской',
    'Женский' => 'Женский',
    ])->label('Пол') ?>
    <?= $form->field($model, 'country')->textInput()->label('Страна')?>
    <?= $form->field($model, 'file')->fileInput()->label('Аватар')?>

    <a class="btn btn-danger" href="<?=Url::to(['edit', 'ava' => $model->id])?>">Удалить</a>

    <?= $form->field($model, 'file2')->fileInput()->label('Задник')?>
   
    <a class="btn btn-danger" href="<?=Url::to(['edit', 'zad' => $model->id])?>">Удалить</a>

    <?= $form->field($model, 'favorites')->textInput()->label('Нравится')?>
    <?= $form->field($model, 'about_myself')->textInput()->label('О себе')?>
    <?= $form->field($model, 'contacts')->textInput()->label('Контакты')?>


    <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 
?>
<script>$('#input-born').dateDropper();</script>