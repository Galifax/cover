<?php  
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\Pjax;
  use yii\bootstrap\Modal;
   ?>


<div class="container">
    <div class="row">
        <div class="fb-profile">
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
                            Последние комментарии</a>
                    </li>
                    <li>
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
                    <div class="tab-pane" value="/profile/edit?id=1" id="tab_default_2">
                       <div id="load-profile">

                       </div>
                        



                    </div>
                    <div class="tab-pane" id="tab_default_3">
                        <p>
                            Family Details
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Highest Education:</label>
                                    <p> MBA/PGDM</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_default_4">
                        <p>
                            Lifestyle

                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Highest Education:</label>
                                    <p> MBA/PGDM</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Place of Birth:</label>
                                    <p> pune, maharashtra</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

