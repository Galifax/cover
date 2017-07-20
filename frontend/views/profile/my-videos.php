  <?php  use yii\helpers\Url; ?>

      <div class="profile-content container-fluid" style="background-color: none">
                        <div class="col-md-8 col-md-push-4 clearfix">
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="найти моё видео" size="45">
                                </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Найти</button>
                            </form>
                        </div>

                        <div class="my-video-blok" style="padding-top: 30px;">

                            <h2 style="text-align: center">Мои видео</h2>
                            <div style="margin-left: 13%">
                            <?php foreach($model as $video):?>
                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href="">link on video + video name</a>
                                    <p>prosmotreno | data dobavlenia</p>
                                    <p><a href="">Редактировать</a> | <a href="">Удалить</a></p>
                                </div>
                             <?php endforeach;?>
                            </div>
                         
                        </div>

                    </div>