<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

$this->title = $model->name;
?>
<div class="container-fluid nopadding background-gray "   style=" padding: 60;margin-right: 60px;margin-left: 60px" >

    <div class="col-md-8 padding-30 " style="margin: 0px" >

        <div class=" ">
          <video src="/<?=$model->src?>" width="100%" height="100%" controls="controls"></video>
         </div>
<!--         <form method="POST">-->
<!--             <input type="submit" name="like" value="like">-->
<!--         </form>-->
        <div class="about-video " style="padding-top: -15px">
            <h1 style="margin: 0px"><?=$model->name?></h1>
            <h2><p><?=$model->profile->nickname?></p></h2>
            <p><?=$model->date?></p>
            <p><?=$model->description?></p>
            <p><i class="glyphicon glyphicon-eye-open"></i> <?=$model->view->views?></p>
           
            <span class="vote plus" title="Нравится"><i class="fa fa-thumbs-up"></i></span>
        </div>

            <div class="comments  background-gray padding-30" ">

                <h4 style="margin: 0px" ">Оставить комментарий</h4>

                <div class="clearfix">
                    <div class="col-md-2" >
                        <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="" class="img-responsive" alt="">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">
                                    Валера89
                                </div>
                                <div class="profile-usertitle-job">
                                    Нуб \ Донатер
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                        </div>

                    </div>

                    <div class="col-md-10 ">

                         <textarea class="form-control" style="height: 100px"></textarea>

                        <p>
                            <button type="submit" class="btn btn-default">Отмена</button>
                            <button type="submit" class="btn btn-default">Подтвердить</button>
                        </p>

                    </div>
                </div>


                <h3 class="title-comments">Комментарии (4)</h3>

                <ul class="media-list">
                    <!-- Комментарий (уровень 1) -->
                    <?php
                        foreach($model->comments as $comments): 
                    ?>
                    <li class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-rounded img1" src="" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <div class="author"><?= $comments->profile->nickname?></div>
                                <div class="metadata">
                                    <span class="date"><?= $comments->date?></span>
                                </div>
                            </div>
                            <div class="media-text text-justify"><?= $comments->content?></div>
                            <div class="footer-comment">

        <span class="vote plus" title="Нравится">
          <i class="fa fa-thumbs-up"></i>
        </span>
                                <span class="rating">
          +1
        </span>

                                <span class="devide">
         |
        </span>
                                <span class="comment-reply">
         <a href="#" class="reply">ответить</a>
        </span>
                            </div>
                    </li>
                     <!-- Вложенный медиа-компонент (уровень 2) -->
                     <ul>
                     <?php foreach($comments->comments as $com):?>
                     <li>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <div class="author"><?=$com->profile->nickname?></div>
                                        <div class="metadata">
                                            <span class="date"><?=$com->date?></span>
                                        </div>
                                    </div>
                                    <div class="media-text text-justify"><?=$com->content?></div>
                                    <div class="footer-comment">
            <span class="vote plus" title="Нравится">
              <i class="fa fa-thumbs-up"></i>
            </span>
                                        <span class="rating">
              +0
            </span>

                                        <span class="devide">
              |
            </span>
                                        <span class="comment-reply">
              <a href="#" class="reply">ответить</a>
            </span>
                                    </div>
                                </div>
                            </div> 
                            <!-- Конец вложенного комментария (уровень 2) -->

                            <!-- Ещё один вложенный медиа-компонент (уровень 2) -->
                            
                    <!-- Конец комментария (уровень 1) -->
                    </li>
                <?php endforeach;?>
                    </ul>
                        <?php endforeach; ?>
                           
                </ul>

            </div>

        </div>


    <div class="col-md-4 padding-30" style="margin: 0px">
        <div class=" background-gray">
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                  <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
    <div class="clearfix" >
        <div class="col-md-6 nopadding">
            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
        </div>
        <div class="col-md-6 ">
            <a href="">link on video + video name</a>
            <p>name user</p>
            <p>prosmotreno | data dobavlenia</p>
        </div>
    </div>
    <div class="clearfix" >
        <div class="col-md-6 nopadding">
            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
        </div>
        <div class="col-md-6 ">
            <a href="">link on video + video name</a>
            <p>name user</p>
            <p>prosmotreno | data dobavlenia</p>
        </div>
    </div>
    <div class="clearfix" >
        <div class="col-md-6 nopadding">
            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
        </div>
        <div class="col-md-6 ">
            <a href="">link on video + video name</a>
            <p>name user</p>
            <p>prosmotreno | data dobavlenia</p>
        </div>
    </div>
    <div class="clearfix" >
        <div class="col-md-6 nopadding">
            <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
        </div>
        <div class="col-md-6 ">
            <a href="">link on video + video name</a>
            <p>name user</p>
            <p>prosmotreno | data dobavlenia</p>
        </div>
    </div>
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
            <div class="clearfix" >
                <div class="col-md-6 nopadding">
                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;">
                </div>
                <div class="col-md-6 ">
                    <a href="">link on video + video name</a>
                    <p>name user</p>
                    <p>prosmotreno | data dobavlenia</p>
                </div>
            </div>
            

    </div>

</div>