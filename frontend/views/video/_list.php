   <?php
use frontend\models\Comments;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
 ?>  	
        <div class="media"><!-- Первый уровень коментов-->
        <div class="media-heading">
            <span class="label label-info"><?= $model->profile->nickname?></span> <?= $model->date?>
        </div>
        <div class="media-left">
            <img class="media-object img-rounded img1" src="<?=empty($model->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->profile->avatar?>" alt="">
        </div>
        <!-- media-left -->
        <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->
        <pre class="pre1"><?= $model->content?></pre>
        <div class="comment-meta">
            <span style="float: left">
                <a class="" role="button" data-toggle="collapse" href="#collapse1<?=$model->id?>" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
            </span>

            <?php if($video->profile_id == Yii::$app->user->id or $model->profile_id == Yii::$app->user->id):?>
            <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'style' => 'float: left']]); ?>
            <input type="hidden" name="delcom" value="<?=$model->id?>">
            <input type="submit" name="" value="Удалить" style="font-size: 11.4px;">
            <?php ActiveForm::end();?>
            <?php endif;?>
            <a data-toggle="collapse" data-target="#collapse<?=$model->id?>" aria-expanded="false" aria-controls="collapseExample">Показать коментарии (<?=count($model->comments)?>)</a>
            <div class="clearfix"></div>

            <div class="collapse" id="collapse1<?=$model->id?>">
                <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
                <?= $form->field($comment, 'parent_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                <?= $form->field($comment, 'video_id')->hiddenInput(['value' => $video->id])->label(false) ?>
                <?= $form->field($comment, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
                <?= $form->field($comment, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
                <?= $form->field($comment, 'content')->textArea()->label('Текст') ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="panel-collapse collapse" id="collapse<?=$model->id?>">
                <div class="row"><!-- Ров1-->
                <?php foreach($model->comments as $comments):?>
                <div class="media"><!-- Первый уровень коментов-->
                <div class="media-heading">
                    <span class="label label-info"><?= $comments->profile->nickname?></span> <?= $comments->date?>
                </div>
                <div class="media-left">
                    <img class="media-object img-rounded img1" src="<?=empty($comments->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $comments->profile->avatar?>" alt="">
                </div>
                <!-- media-left -->
                <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->
                <p><?= $comments->content?></p>
                <div class="comment-meta">
                    <span>
                        <span style="float: left">
                            <a class="" role="button" data-toggle="collapse" href="#collapse1<?=$comments->id?>" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                        </span>

                        <?php if($video->profile_id == Yii::$app->user->id or $comments->profile_id == Yii::$app->user->id):?>
                        <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'style' => 'float: left']]); ?>
                        <input type="hidden" name="delcom" value="<?=$comments->id?>">
                        <input type="submit" name="" value="Удалить">
                        <?php ActiveForm::end();?>
                        <?php endif;?>

                        <div class="clearfix"></div>

                    </div>
                    </div><!-- медиа боди-->
                    </div><!-- Первый уровень коментов \/ вставлять ниже-->
                    <?php endforeach;?>
                    </div><!-- Ров1-->
                </div>
            </div>
            </div><!-- медиа боди-->
            </div><!-- Первый уровень коментов \/ вставлять ниже-->
           
        