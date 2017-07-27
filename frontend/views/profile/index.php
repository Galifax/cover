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
                    <img width='100%' src="<?=empty($model->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $model->avatar?>" alt="">                    
                    <?= Html::button('Редактировать', ['value' => Url::to(['edit', 'id'=>$model->id]) , 'class' => 'btn btn-success' , 'id' => 'modalButton2']) ?>
                    <a href="<?= Url::to(['/profile',  'ava'=>$model->id])?>" class='btn btn-danger'>Delete</a>

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
                <div class="col-md-8" style="background-color: #f5f5f5">

                    <h2 class="text-center">Коментарии к моим видео</h2>

                    <h2 class="text-center">Коментариев нет (если коментов нет)</h2>
                    
                    
    
              </div>
                    
            </div>
            
        </div>
    </div>