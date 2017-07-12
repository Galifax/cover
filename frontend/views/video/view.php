<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

$this->title = $model->name;
?>
<div class="container-fluid">

    <div class="col-md-8">

        <div class="padding-30 nopadding">
          <video src="/<?=$model->src?>" width="100%" height="400" controls="controls"></video>

         </div>
         <form method="POST">
             <input type="submit" name="like" value="like">
         </form>
        <div class="about-video  background-gray" style="padding: 15px">
            <h1><?=$model->name?></h1>
            <h2><p><?=$model->profile->nickname?></p></h2>
            <p><?=$model->date?></p>
            <p><?=$model->description?></p>
            <p><i class="glyphicon glyphicon-eye-open"></i> <?=$model->view->views?></p>
           
            <span class="vote plus" title="Нравится"><i class="fa fa-thumbs-up"></i></span>
        </div>

            <div class="comments padding-30 background-gray">

                <h4>Оставить комментарий</h4>

                <div class="clearfix">
                    <div class="col-md-2">

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

                    <div class="col-md-10">

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
                    <li class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-rounded img1" src="" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <div class="author">Дима</div>
                                <div class="metadata">
                                    <span class="date">16 ноября 2015, 13:43</span>
                                </div>
                            </div>
                            <div class="media-text text-justify">Lorem ipsum dolor sit amet. Blanditiis praesentium voluptatum deleniti atque. Autem vel illum, qui blanditiis praesentium voluptatum deleniti atque corrupti. Dolor repellendus cum soluta nobis. Corporis suscipit laboriosam, nisi ut enim. Debitis aut perferendis doloribus asperiores repellat. sint, obcaecati cupiditate non numquam eius. Itaque earum rerum facilis. Similique sunt in ea commodi. Dolor repellendus numquam eius modi. Quam nihil molestiae consequatur, vel illum, qui ratione voluptatem accusantium doloremque.</div>
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

                            <!-- Вложенный медиа-компонент (уровень 2) -->
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <div class="author">Пётр</div>
                                        <div class="metadata">
                                            <span class="date">19 ноября 2015, 10:28</span>
                                        </div>
                                    </div>
                                    <div class="media-text text-justify">Dolor sit, amet, consectetur, adipisci velit. Aperiam eaque ipsa, quae. Amet, consectetur, adipisci velit, sed quia consequuntur magni dolores. Ab illo inventore veritatis et quasi architecto. Quisquam est, omnis voluptas nulla. Obcaecati cupiditate non numquam eius modi tempora. Corporis suscipit laboriosam, nisi ut labore et aut reiciendis.</div>
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
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-rounded img1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNX-xxZ3amxzP0p9Yc7hCDZnw-bWtjyVk4WSHmKB-L0d2ORPGb" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <div class="author">Сергей</div>
                                        <div class="metadata">
                                            <span class="date">20 ноября 2015, 17:45</span>
                                        </div>
                                    </div>
                                    <div class="media-text text-justify">Ex ea voluptate velit esse, quam nihil impedit, quo minus id quod. Totam rem aperiam eaque ipsa, quae ab illo. Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid. Iste natus error sit voluptatem. Sunt, explicabo deleniti atque corrupti, quos dolores et expedita.</div>
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
                                </div>
                            </div>
                            <!-- Конец ещё одного вложенного комментария (уровень 2) -->

                        </div>
                    </li>
                    <!-- Конец комментария (уровень 1) -->

                    <!-- Комментарий (уровень 1) -->
                    <li class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-rounded img1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKqonfAYoCimbErSsS8nLSRsViLjtQ8RRxLYFhbp7504TiBnYe" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <div class="author">Иван</div>
                                <div class="metadata">
                                    <span class="date">Вчера в 17:34</span>
                                </div>
                            </div>
                            <div class="media-text text-justify">Eum iure reprehenderit, qui dolorem eum fugiat. Sint et expedita distinctio velit. Architecto beatae vitae dicta sunt, explicabo unde omnis. Qui aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto. Nemo enim ipsam voluptatem quia. Eos, qui ratione voluptatem sequi nesciunt, neque porro. A sapiente delectus, ut enim ipsam voluptatem, quia non recusandae architecto beatae.</div>
                            <div class="footer-comment">
        <span class="vote plus" title="Нравится">
          <i class="fa fa-thumbs-up"></i>
        </span>
                                <span class="rating">
          +2
        </span>

                                <span class="devide">
          |
        </span>
                                <span class="comment-reply">
          <a href="#" class="reply">ответить</a>
        </span>
                            </div>
                        </div>
                    </li>
                    <!-- Конец комментария (уровень 1) -->

                </ul>

            </div>

        </div>


    <div class="col-md-4 background-gray padding-30">
        <div class="padding-30"></div>
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