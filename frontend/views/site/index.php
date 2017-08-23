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
<div class="content" style="margin-top: 40px">
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