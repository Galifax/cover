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

                    <div class="">


                            <div class="row ">
                                <table style="border: solid 1px black">
                                    <tbody>
                                    <tr>
                                        <td>nickname</td>
                                        <td><?= $model->nickname?></td>
                                    </tr>
                                    <tr>
                                        <td>name</td>
                                        <td><?= $model->name?></td>
                                    </tr>
                                    <tr>
                                        <td>Пол</td>
                                        <td><?= $model->floor?></td>
                                    </tr>
                                    <tr>
                                        <td>Страна</td>
                                        <td><?= $model->country?></td>
                                    </tr>
                                    <tr>
                                        <td>Контакты</td>
                                        <td><?= $model->contact?></td>
                                    </tr>
                                    <tr>
                                        <td>Любимая музыка</td>
                                        <td><?= $model->favorites?></td>
                                    </tr>
                                    <tr>
                                         <td>О себе</td>
                                         <td><?= $model->about_myself?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
                </div>
                <div class="col-md-8" style="background-color: #f5f5f5">

                    <h2 class="text-center">Коментарии к моим видео</h2>

                    <h2 class="text-center">Коментариев нет (если коментов нет)</h2>

                    <?php foreach($comments as $comment):?>
                    <li><?=$comment->video->profile->nickname?> : <?=$comment->content?> : <?=$comment->video->name?></li>
                    <?php endforeach;?>
                    
                    
    
              </div>
                    
            </div>
            
        </div>
    </div>