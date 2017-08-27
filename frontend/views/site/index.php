<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = 'My Yii Application';
?>

<!--<img src="/img/123.jpg" style="width: 100%">-->

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active slide1">
                <div class="row"><div class="container">
                        <div class="col-md-3 text-right">
                            <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png">
                        </div>
                        <div class="col-md-9 text-left">
                            <h3 data-animation="animated bounceInDown">Add images, or even your logo!</h3>
                            <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>
                        </div>
                    </div></div>
            </div>
            <div class="item slide2">
                <div class="row"><div class="container">
                        <div class="col-md-7 text-left">
                            <h3 data-animation="animated bounceInDown"> 50 animation options A beautiful</h3>
                            <h4 data-animation="animated bounceInUp">Create beautiful slideshows </h4>
                        </div>
                        <div class="col-md-5 text-right">
                            <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png">
                        </div>
                    </div></div>
            </div>
            <div class="item slide3">
                <div class="row"><div class="container">
                        <div class="col-md-7 text-left">
                            <h3 data-animation="animated bounceInDown">Simple Bootstrap Carousel</h3>
                            <h4 data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
                        </div>
                        <div class="col-md-5 text-right">
                            <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">
                        </div>
                    </div></div>
            </div>
            <div class="item slide4">
                <div class="row"><div class="container">
                        <div class="col-md-7 text-left">
                            <h3 data-animation="animated bounceInDown">We are creative</h3>
                            <h4 data-animation="animated bounceInUp">Get start your next awesome project</h4>
                        </div>
                        <div class="col-md-5 text-right">
                            <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">
                        </div>
                    </div></div>
            </div>

        </div>
    </div>
</div>

                    <!--slider-end-->
<div class="content" style="margin-top: 20px; min-height: 800px">

    <div class="hidden-sm hidden-xs">
        <div class="container1">
            <div class="carousel1" style="background: ">
                <div class="item1 top1">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 top2">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 top3">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 top4">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 top5">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 top6">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item1 center1">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                        <div class="content-footer2">
                            <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                            <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                            <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                            <div class="user-ditels">
                                <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                                <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                    <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="item1 center2">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 center3">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 center4">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 center5">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 center6">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 center7">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 center8">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 center9">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

    <!--            <div class="item1 center12"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center22"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center32"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center42"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center52"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center62"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center72"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center82"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->
    <!--            <div class="item1 center92"><img src="http://s1.iconbird.com/ico/2013/6/353/w256h2561372333145microphoneicon.png" style="height: 700px;"></div>-->

                <div class="item1 bot1">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 bot2">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 bot3">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 bot4">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 bot5">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item1 bot6">
                    <a class="video" data-pjax="0" href="https://lh3.googleusercontent.com/-ndZJOGgvYQ4/WM1ZI8dH86I/AAAAAAAADeo/l67ZqZnRUO8QXIQi38bEXuxqHfVX0TV2gCJoC/w424-h318-n-rw/thumbnail8.jpg">
                        <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                            <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                        </div>
                    </a>                <div class="content-title">
                        <div class="text-center">
                            <a style="color: black" href="/">
                                <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 14px;bottom: 30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda atque beatae delectus, error eveniet fuga fugit illum iusto odit omnis perferendis, quaerat, repellendus saepe voluptatibus. Id nostrum officia quia?</h2>
                            </a>
                        </div>
                    </div>
                    <div class="content-footer2">
                        <img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
                        <span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
                        <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                    </span>
                        <div class="user-ditels">
                            <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                            <span class="user-full-ditels">
                            <h3>Sumit Kumar</h3>
                            <p>Web & Graphics Disigner</p>
                            </span>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="next1">
            <a class="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="prev1">
        <a class="prev">
            <i class="fa fa-chevron-leftt" aria-hidden="true"></i>
        </a>
    </div>
    </div>





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

<script>
    (function( $ ) {

        //Function to animate slider captions
        function doAnimations( elems ) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';

            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic'),
            $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Pause carousel
        $myCarousel.carousel('pause');


        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
            interval:3000,
            pause: "false"
        });

    })(jQuery);

</script>