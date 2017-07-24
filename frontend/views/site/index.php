<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = 'My Yii Application';
?>

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
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
            <!-- Item 2 -->
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
            <!-- Item 3 -->
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
            <!-- Item 4 -->
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
            <!-- End Item 4 -->

        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--slider-end-->

<div class="bg-img-1 container">
    <h2>Top viedo</h2>     
    <ul class="list-unstyled video-list-thumbs row">
         <?php foreach($model as $video):?>
        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    
            <a class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">

                <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration">03:15</span>
                <h2><?= $video->name?></h2>
            </a>
            <div class="video-text">
                <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                <p><?= $video->view->views?> <i class="fa fa-eye" aria-hidden="true"></i> | Загружено <?= $video->date?></p>
            </div>
        </li>
        <?php endforeach;?>
    </ul>   
</div>

<div class="container">
    <h2>Недавно добавленные</h2>
    <ul class="list-unstyled video-list-thumbs row">
        <?php foreach($recently as $video):?>
        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <a class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration">03:15</span>
                <h2><?= $video->name?></h2>
            </a>
            <div class="video-text">
                <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                <p><?= $video->view->views?> <i class="fa fa-eye" aria-hidden="true"></i> | Загружено <?= $video->date?></p>
            </div>
        </li>
        <?php endforeach;?>
    </ul>
</div>

<div class="container">
    <h2>Случайные видео</h2>
    <ul class="list-unstyled video-list-thumbs row">
         <?php foreach($random as $video):?>
        <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <a class="video-list-thumbs-a" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                <img src="https://lh3.ggpht.com/AHE17IyTUhPeOst60dZcobobMDip8grLupjfUlNJCZHKulvTMI42A4UqO_jVUduFZOo=h310" alt="Barca" class="img-responsive" height="130px" />
                <span class="glyphicon glyphicon-play-circle"></span>
                <span class="duration">03:15</span>
                <h2><?= $video->name?></h2>
            </a>
            <div class="video-text">
                <a class="username-video" href="#"><?= $video->profile->nickname?></a>
                <p><?= $video->view->views?> <i class="fa fa-eye" aria-hidden="true"></i> | Загружено <?= $video->date?></p>
            </div>
        </li>
        <?php endforeach;?>
    </ul>   
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