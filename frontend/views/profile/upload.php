<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use frontend\models\Category;
$category = Category::find()->all();
 $items = ArrayHelper::map($category,'id','name');
    $params = [
        'prompt' => 'Укажите атегорию'
    ];
$form = ActiveForm::begin([
    'options' => ['enctype' =>'multipart/form-data']
]) ?>
    <?= $form->field($model, 'profile_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>
    <?= $form->field($model, 'file')->fileInput()->label('Загрузить видео')?>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto consectetur deserunt doloremque expedita fuga, impedit labore ratione tempora temporibus! Blanditiis consectetur ipsa natus perferendis porro quae repellat tempore? Velit!</p>
    <?= $form->field($model, 'file2')->fileInput()->label('Прелоадер')?>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores assumenda dolor earum impedit, iste libero minima natus neque perspiciatis provident quo recusandae, repudiandae saepe, sequi tenetur ullam vero voluptate.</p>
    <?= $form->field($model, 'name')->textInput()->label('Название')?>
    <?= $form->field($model, 'description')->textArea(['rows' => 6])->label('Описание') ?>
    <?= $form->field($model, 'category_id')->dropDownList($items,$params)->label('Категория') ?>
    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 