<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
   
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['data-pjax' => true]]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => truem, 'style' => 'width: 540px']) ?>

                <?= $form->field($model, 'password')->passwordInput(['style' => 'width: 540px']) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                 <?= Html::a('Забыли пароль', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
          

</div>
