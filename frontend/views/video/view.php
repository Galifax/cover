<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use frontend\models\Comments;

$this->title = $model->name;
// echo substr(md5(uniqid()), 0, 20);
?>

<div class="container">
<div class="col-sm-8 col-xs-12 padding-30 " style="margin: 0px" >
    <div style="width: 100%;" >
        
        <video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto"
            poster="<?= $model->preloader?>" data-setup="{}"
            style="width: 100%">
            <source src="<?= $model->src?>" type='video/mp4'>
            <p class="vjs-no-js">
                Ты что не видишь - видео загружается
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){
    $('.video-js').height($('.video-js').width() * 0.6 + 'px');
    });
    $(window).resize(function(){
    $('.video-js').height($('.video-js').width() * 0.6 + 'px');
    });
    
    </script>

    <div class="about-video my-video-video" style="padding-top: -15px; width: 100%;">

        <h1 style="margin: 0;padding: 10px;font-size: 23px "><?=$model->name?></h1>

        <img style="width: 90px; float: left" src="http://minionomaniya.ru/wp-content/uploads/2016/01/%D0%9A%D0%B5%D0%B2%D0%B8%D0%BD.jpg" alt="">

        <a href="" class="video-username">
            Name user
        </a>

        <a href="" class="btn btn-add-to-favor">
            Добавить в избранное
        </a>

        <div style="margin-left: 112px; text-align: center;max-width: 100px;">


            <a href="">
                <i class="fa fa-hand-peace-o" style="color: red;" aria-hidden="true"></i>
            </a>
            <?=count($model->likes);?>

            <i class="fa fa-eye" aria-hidden="true" style="padding: 8px"> <?=$views?></i>

        </div>



        </div>

    <?php $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );?>
    <div class="description content" style="margin-top: 10px; padding: 20px;">
        <?php
        $date = new DateTime($video->date);
        ?>
        <p>Опубликовано <?=$date->format('j').' '. $months[date($date->format('n'))]?></p>
        <p><?=$model->description?></p>
        <p>Категория: <?=$model->category->name?></p>
    </div>


    <div class="col-sm-4 content col-xs-12 visible-xs" style="margin-top: 15px;">
        <?= $this->render('../_video', [
            'model' => $model->category->video,
            'lg' => 12,
            'md' => 12,
            'sm' => 12,
            'xs' => 12,
        ]);?>
    </div>
    <?php Pjax::begin();?>

    <div class="my-video-video content" style="width: 100%; margin-top: 16px;border: none">
        <div class="" style="padding: 15px"><!-- стиль-->
        <div class="post-comments"><!-- Начало ковентов-->
        <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
        <?= $form->field($comments, 'parent_id')->hiddenInput(['value' => 0])->label(false) ?>
        <?= $form->field($comments, 'video_id')->hiddenInput(['value' => $model->id])->label(false) ?>
        <?= $form->field($comments, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>
        <?= $form->field($comments, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>
        <?= $form->field($comments, 'content', ['template' => "{input}"
        ])->textArea(['placeholder' =>
        Yii::$app->session->getFlash('success') ? Yii::$app->session->getFlash('success') : 'Введите текст','onkeyup'=>'textAreaAdjust(this)','style'=>'overflow:hidden; border-radius: 20px;'])
        ->label('Оставить комментарий') ?>




        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-post']) ?>
        </div>
        <?php ActiveForm::end(); ?>

        <div class="comments-nav">
            <ul class="nav nav-pills">
                <li role="presentation" class="dropdown">
                    <p style="padding-top: 10px">
                        Всего комментариев: <?=Comments::find()->where(['video_id' => $id])->count()?><span class="caret"></span>
                    </p>
                    <ul class="dropdown-menu">
                        <li><a href="#">Best</a></li>
                        <li><a href="#">Hot</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php $comment = new Comments();?>
        <div class="row"><!-- Ров1-->
        <div class="comments-load">
            <?php
        echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => '_list',
    'pager' => ['class' => \kop\y2sp\ScrollPager::className()],
    'viewParams' => [
    'video' => $model,
    'comment' => $comment,
    'profile' => $profile
    ]
    

    ]);
    ?>
             </div>
            </div><!-- Ров1-->


            </div><!-- Начало ковентов-->
            </div><!-- стиль-->
            </div> <!-- мои видео задник-->
        <?php Pjax::end();?>


      
</div> <!-- col-md-8-->


            <div class="col-sm-4 content hidden-xs" style="margin-top: 15px;">
                <?= $this->render('../_video', [
                'model' => $model->category->video,
                'lg' => 12,
                'md' => 12,
                'sm' => 12,
                'xs' => 12,
                ]);?>
            </div>

        <script>
        
        $('[data-toggle="collapse"]').on('click', function() {
        var $this = $(this),
        $parent = typeof $this.data('parent')!== 'undefined' ? $($this.data('parent')) : undefined;
        if($parent === undefined) { /* Just toggle my  */
        $this.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
        return true;
        }
        /* Open element will be close if parent !== undefined */
        var currentIcon = $this.find('.glyphicon');
        currentIcon.toggleClass('glyphicon-plus glyphicon-minus');
        $parent.find('.glyphicon').not(currentIcon).removeClass('glyphicon-minus').addClass('glyphicon-plus');
        });
        </script>
</div>