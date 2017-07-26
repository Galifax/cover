    <?php
    use yii\widgets\Pjax;
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;
    $this->title = 'Профиль | '. $model->nickname ? $model->nickname : 1;
    ?>
        <div class="row profile container">

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
                      <h2 class="text-center">Коментарии к моим видео</h2>
                    </div>

                    <ul class="list-unstyled video-list-thumbs row">
                        <?php foreach($random as $video):?>
                    <div class="col-md-12">
                        <li >

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                                        <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                                        <span class="glyphicon glyphicon-play-circle"></span>
                                        <span class="duration">03:15</span>
                                        <h2><?= $video->name?></h2>
                                    </a>
                                    <div class="video-text">
                                        <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                                        <p><?= $video->view->views?> <i class="fa fa-eye" aria-hidden="true"></i> | <?= $video->date?> </p>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >
                                    <h2 class="text-center">New comment</h2>



                                        <div class="media"><!-- Первый уровень коментов-->

                                            <div class="media-heading">
                                                <span class="label label-info"><?= $video->profile->nickname?></span> Ответил 12 часов назад
                                            </div>

                                            <div class="media-left">
                                                <img class="media-object img-rounded img1" src="http://cdn.newsapi.com.au/image/v1/5f0545ecda27bbf03078d36b8b721f6e" alt="">
                                            </div>
                                            <!-- media-left -->


                                            <div class="media-body"> <!-- комментарий пользователя не имеет ответа -->

                                                <p> 1yazmayın artık amk, görmeyeyim sol framede. insan bi meraklanıyor, ümitleniyor. sonra yine özlem dolu yazıları görüp hayal kırıklığıyla okuyorum.</p>
                                               <hr>
                                                <div class="comment-meta">
                                                    <span ><a href="#" style="float: right">Лайк!</a></span>
                                                    <a class="" role="button" data-toggle="collapse" href="#replyComment2" aria-expanded="false" aria-controls="collapseExample">Ответить</a>
                                                    </span>

                                                    <div class="collapse" id="replyComment2">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="comment">Your Comment</label>
                                                                <textarea name="comment" class="form-control" rows="3"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-default">Send</button>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div><!-- медиа боди-->

                                        </div><!-- Первый уровень коментов \/ вставлять ниже-->

                                </div>
                                <div class="clearfix"

                            </div>
                        </div>
                        </li>

                    </div>
                        <?php endforeach;?>
                    </ul>
                </div>
        </div>


    


