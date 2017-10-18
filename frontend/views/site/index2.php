<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = 'My Yii Application';
?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<style type="text/css">
    button {
        z-index: 102;
    }
    section {
        position: relative;
        background: #FAFAFA;

    }
    .slick-slide {
        transform: scale(1);
    //opacity: .5;
        transition: .3s ease-in-out all;
    }
    .slick-slide.slick-center {
        opacity: 1;
        transform: scale(1.08);
    }

    .switch {
        background: #000;
    }
    .slider {
        max-width: 1024px;
        margin: 0 auto;
        border: 1px solid;
        position: relative;
    }

    .img-box {
        padding: 0;
        height: 150px;
        width: 250px;
    }
</style>

<section class="container">
    <div class="img-earth">
        <div class="slider ">
            <div>
                <article>
                    <div class="img-box top">
                        <img src="http://ww2.hdnux.com/photos/22/43/57/4865017/3/920x920.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box top">
                        <img src="http://mirgif.com/humor/prikol104.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box top">
                        <img src="http://www.neumeka.ru/images/stat/int/skachat_kartinki/04.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box top">
                        <img src="http://cdn.fishki.net/upload/post/2017/03/19/2245758/tn/01-beautiful-white-cat-imagescar-wallpaper.jpg" alt="" />
                    </div>
                </article>
            </div>
        </div>

        <div class="slider center">
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://ww2.hdnux.com/photos/22/43/57/4865017/3/920x920.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://mirgif.com/humor/prikol104.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://www.neumeka.ru/images/stat/int/skachat_kartinki/04.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://cdn.fishki.net/upload/post/2017/03/19/2245758/tn/01-beautiful-white-cat-imagescar-wallpaper.jpg" alt="" />
                    </div>
                </article>
            </div>
        </div>

        < <div class="slider bot">
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://ww2.hdnux.com/photos/22/43/57/4865017/3/920x920.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://mirgif.com/humor/prikol104.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://www.neumeka.ru/images/stat/int/skachat_kartinki/04.jpg" alt="" />
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <div class="img-box">
                        <img src="http://cdn.fishki.net/upload/post/2017/03/19/2245758/tn/01-beautiful-white-cat-imagescar-wallpaper.jpg" alt="" />
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    //Playing with Ken Wheeler Slick carousel
    $('.slider').slick({
        //dots: true,
        infinite: true,
        centerMode: true,
        centerPadding: '12%',
        slidesToShow: 3,
        speed: 500,
        responsive: [{

            breakpoint: 992,
            settings: {
                slidesToShow: 1
            }

        }]
    });
</script>