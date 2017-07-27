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
                <div class="col-md-8">

                    <div class="panel panel-default">
                        <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;">Text Вот шаблон</h1>
                    </span>
                            <br><br>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut consequatur dolorum ea eaque eligendi enim ex iure laudantium, molestiae necessitatibus omnis quisquam quos, saepe sed ullam unde veniam voluptate?</p>
                            <hr>
                            <span class="pull-left">
                        <a href="#" class="btn btn-link" style="text-decoration:none;">text <i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"> text <i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"> text <i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i></a>
                    </span>
                            <span class="pull-right">
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i> text</a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i> text</a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i> text</a>
                    </span>
                        </div>
                    </div>
                    
    
              </div>
                    
            </div>
            
        </div>
    </div>