<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = 'My Yii Application';
?>

<div class="container">

    <div class="planet-block hidden-sm hidden-xs">
        <div class="container1">
            <div class="item1 img-earth"></div>

            <div class="carousel1">


                <?php $n = 0?>
                <?php foreach($newest as $new):?>
                <?php $n += 1?>
                <div class="item1 top<?= $n?>">

                    <a class="video" data-pjax="0" href="../video/view?id=<?= $new->id?>">
                        <div class="video-item__thumb" style="background-image: url(<?=$new->preloader?>)">
<!--                            <img style="border-bottom: 1px solid black" src="--><?//=$video->preloader?><!--" width="100%" >-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="../video/view?id=<?= $new->id?>">

                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px"><?= $new->name?></h2>

                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">

                        <img class="user-small-img"  src="<?=empty($to->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $to->profile->avatar?>" alt="Profile image example>">

                        <p class="text-center">
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $to->views?></a>
                            <br>
                            <span><?= $to->profile->nickname?></span></p>

                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>


            <?php $n = 0?>
            <?php foreach($top as $to):?>
            <?php $n += 1?>
                <div class="item1 center<?= $n?>">
                    <a class="video" data-pjax="0" href="../video/view?id=<?= $to->id?>">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="../video/view?id=<?= $to->id?>">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px"><?= $to->name?></h2>
                            </a>
                        </div>
                    </div>
                        <div class="content-footer2">

                            <img class="user-small-img"  src="<?=empty($to->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $to->profile->avatar?>" alt="Profile image example>">

                            <p class="text-center">
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $to->views?></a>
                                <br>
                            <span><?= $to->profile->nickname?></span></p>

                            <div class="user-ditels">
                                <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                                <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            </div>
                        </div>

                </div>
                <?php endforeach;?>


                <?php $n = 0?>
                <?php foreach($random as $rand):?>
                <?php $n += 1?>
                <div class="item1 bot<?= $n?>">
                    <a class="video" data-pjax="0" href="../video/view?id=<?= $rand->id?>">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="../video/view?id=<?= $rand->id?>">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px"><?= $rand->name?></h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">

                        <img class="user-small-img"  src="<?=empty($to->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $to->profile->avatar?>" alt="Profile image example>">

                        <p class="text-center">
                            <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $to->views?></a>
                            <br>
                            <span><?= $to->profile->nickname?></span></p>

                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
         </div>

        <div class="clearfix"></div>

            <div class="col-md-12">
                <p class="img-text" style="right: 80px;top: -160px;">
                    Новинки
                </p>
                <p class="img-text" style="right: 0px;top: 40px;">
                    Хиты
                </p>
                <p class="img-text" style="right: -30px;top: 280px;">
                    Рекомендованные
                </p>
                <a class="next1">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>

                <a class="prev1">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
            </div>
    </div>

    <div class="content hidden-md hidden-lg" style="margin-top: 20px; min-height: 800px">



<div class="hidden-md hidden-lg">
    <h2 style="padding: 10px; font-size: 30px; margin: 0px; text-align: center">Top viedo</h2>

   <?= $this->render('../_video', [
        'model' => $top,
        'lg' => 3,
        'md' => 3,
        'sm' => 3,
         'xs' => 12,
   ]);?>



<hr>

     <h2 style="padding: 10px; font-size: 30px; margin: 0px; text-align: center">Рандом</h2>

   <?= $this->render('../_video', [
        'model' => $random,
        'lg' => 2,
        'md' => 2,
        'sm' => 3,
         'xs' => 12,
   ]);?>


<hr>


    <h2 style="padding: 10px; font-size: 30px; margin: 0px; text-align: center">Новые</h2>

   <?= $this->render('../_video', [
        'model' => $newest,
        'lg' => 2,
        'md' => 2,
        'sm' => 3,
         'xs' => 12,
   ]);?>
</div>

</div>

</div>