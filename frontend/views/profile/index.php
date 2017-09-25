<?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
  use yii\bootstrap\ActiveForm;

   ?>


<div class="container">

    <div class="row">
        <div class="fb-profile" style="max-height: 400px;width: 100%;">
            <img align="left" class="fb-image-lg " src="<?= $model->background ? $model->background : 'http://lorempixel.com/850/280/nightlife/5/'?>" alt="Profile image example"/>
            <img align="left" class="fb-image-profile thumbnail" src="<?= $model->avatar ? $model->avatar : 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg'?>" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1><?= $model->name?></h1>

            </div>
        </div>
    </div>
</div> <!-- /container fluid-->
<div class="container">
    <div class="col-sm-12">

        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">
                            О себе </a>
                    </li>
                    <li class="load-profile">
                        <a href="#tab_default_2" data-toggle="tab">
                            Редактировать</a>
                    </li>
                    <li>
                        <a href="#tab_default_3" data-toggle="tab">
                            Непрочитаные комментарии <span class="badge"><?=count($comments)?></span></a>
                    </li>
                    <li class="load-comments">
                        <a href="#tab_default_4" data-toggle="tab">
                            Все комментарии</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                            <p>
                                <?= $model->about_myself?>
                            </p>
                        <h4>Возраст</h4>
                            <p>
                                <?= $model->born?>
                            </p>
                        <h4>Страна </h4>
                            <p>
                                <?= $model->country?>
                            </p>
                        <h4>Контакты</h4>
                            <p>
                                <?= $model->contacts?>
                            </p>
                        <h4>Любимые группы</h4>
                            <p>
                                <?= $model->favorites?>
                            </p>

                    </div>
                    <div class="tab-pane" id="tab_default_2">
                       <div id="load-profile">

                       </div>
                        



                    </div>
                    <div class="tab-pane" id="tab_default_3">
                    <?php if($comments):?>
                      <?php $form = ActiveForm::begin([
                                'method' => 'post',
                                'action' => '/profile/viewed'
                            ])?>
                        <?php foreach($comments as $com):?>
                            <li class="h<?=$com->id?> prof-com">
                                <p> <input type="checkbox" name="viewed[<?=$com->id?>]" class="viewed">
                                <a href="<?=Url::to(['/video/view', 'id' => $com->video->id])?>"><?=$com->video->name?></a></p>
                                <p><?=$com->profile->nickname?></p> <p><?=$com->content?></p>
                                <p><?=$com->date?></p>
                            </li>
                        <?php endforeach;?>
                        <?php ActiveForm::end();?>
                        <div id="results"></div>
                    <?php else:?>
                        <h2>Новых комментариев нету</h2>
                    <?php endif;?>
                    </div>
                    <div class="tab-pane" id="tab_default_4">
                        <div id="load-comments"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
