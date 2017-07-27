<?php
    use yii\widgets\Pjax;
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;
    $this->title = 'Профиль | '. $model->nickname ? $model->nickname : 1;
    ?>
    <div class="container">

        <div class="row profile container">

            <div class="tab-content">
    
                <div class="col-md-4">



                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="profile-userpic" align="center">
                                        <img class="thumbnail" src="<?=empty($model->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->avatar?>" width="300px" height="300px">
                                    </div>
                                    <hr>
                                    <div class="text-center">

                                        <?= Html::button('Редактировать', ['value' => Url::to(['edit', 'id'=>$model->id]) , 'class' => 'btn btn-success' , 'id' => 'modalButton2']) ?>
                                        <a href="#" class="btn btn-default"> Аватар</a>
                                        <a href="<?= Url::to(['del'=>$model->avatar])?>" class='btn btn-danger'>Delete</a>

                                    </div>
                                    <div class="media-body">
                                        <hr>
                                        <h3><strong>nickname</strong></h3>
                                        <p><?= $model->nickname?></p>
                                        <hr>
                                        <h3><strong>name</strong></h3>
                                        <p><?= $model->name?></p>
                                        <hr>
                                        <h3><strong>Gender</strong></h3>
                                        <p><?= $model->floor?></p>
                                        <hr>
                                        <h3><strong>Страна</strong></h3>
                                        <p><?= $model->country?></p>
                                        <hr>
                                        <h3><strong>Контакты</strong></h3>
                                        <p><?= $model->contact?></p>
                                        <hr>
                                        <h3><strong>Любимая музыка</strong></h3>
                                        <p><?= $model->favorites?></p>
                                        <hr>
                                        <h3><strong>О себе</strong></h3>
                                        <p><?= $model->about_myself?></p>
                                    </div>
                                </div>

                    </div> 
                    </div>     
                    </div>
              
                <div class="col-md-8" style="background-color: #f5f5f5">

                    <h2 class="text-center">Коментарии к моим видео</h2>

                    <h2 class="text-center">Коментариев нет (если коментов нет)</h2>
                    <?php foreach($comments as $comment):?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;"><?=$comment->video->name?></h1>
                    </span>
                            <br>
                            <hr>
                            <p>Последние сообщение <?=$comment->video->profile->nickname?>: <?=$comment->date?></p>
                            <hr>
                            <p><?=$comment->content?></p>
                            <hr>
                            <span><a href="#">Ответить</a> <a href="#">Скрыть</a></span>
                                        
                        </div>
                    </div>
                    <?php endforeach;?>
                    
    
              </div>
                    
            </div>
            
        </div>
    </div>