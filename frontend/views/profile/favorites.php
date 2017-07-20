 
 <div class="my-video-blok" style="padding-top: 30px;">

                            <h2 style="text-align: center">Понравившиеся</h2>
                            <div style="margin-left: 13%">
                            <?php foreach($model as $video):?>
                                <div class="my-video-video background-gray">
                                    <img src="https://cdn.kyivstar.ua/sites/default/files/divan-video.jpg" style="width: 100%;padding: 10px">
                                    <a href=""><?=$video->name?></a>
                                    <p><?= $video->profile->nickname?>  </p>
                                    <p><?= $video->date?> | <a href="">Удалить</a></p>
                                </div>
                             <?php endforeach;?>
                            </div>
                         
                        </div>