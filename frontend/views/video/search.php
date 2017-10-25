<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
$this->title = $name ? $name : 'Все категории';
?>
<?php Pjax::begin();?>
  <div class="row">

      <div class="container">
          <div class="search-nav text-center">

              <div id="sidebar-wrapper">

                  <div class="category-tab">

                      <a id="add-col-3" class="btn btn-my-default hidden-xs"><i class="fa fa-bars" aria-hidden="true"></i> col-3 </a>

                      <a id="add-col-4" class="btn btn-my-default"><i class="fa fa-bars" aria-hidden="true"></i> col-4 </a>

                      <a id="add-col-6" class="btn btn-my-default"><i class="fa fa-bars" aria-hidden="true"></i> col-6 </a>

<!--                      <a id="menu-close" href="#" class="btn btn-my-default pull-right"><i class="glyphicon glyphicon-remove"></i></a>-->
                      <ul class="list-group">
                          <h3 class="text-center" style="margin: 0px">Категории</h3>
                          <a href="<?=Url::to(['video/search', 's' => $_GET["s"]])?>">
                              <li class="list-group-item justify-content-between">
                                  Все категории
                                  <span class="badge badge-default badge-pill"><?=$video?></span>
                              </li>
                          </a>
                          <?php foreach($category as $cat):?>
                              <a href="<?=Url::to(['video/search', 'id' => $cat->id, 'name' => str_replace('-', '_', $cat->name), 's' => $_GET["s"]])?>">
                                  <li class="list-group-item justify-content-between">
                                      <?=$cat->name?>
                                      <span class="badge badge-default badge-pill"><?=count($cat->video)?></span>
                                  </li>
                              </a>
                          <?php endforeach;?>
                      </ul>
                  </div>

                  <div class="toggle-category">
                      <a id="menu-toggle" href="#" class="btn btn-my-default"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  </div>

              </div>

          </div>

          <div class="content col-xs-12" style="min-height: 90vh" >

              <div class="row" style="padding: 15px 5px">
                  <?php foreach($model as $video):?>
                      <div class="video-item add-col col-sm-4 col-xs-6">
                          <div>
                              <a class="video" data-pjax="0" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                                  <div class="video-item__thumb" style="background-image: url(<?=$video->preloader?>)">
                                      <!--img style="border-bottom: 1px solid black" src="<?=$video->preloader?>" width="100%" /-->
                                  </div>
                              </a>
                              <div class="content-title">
                                  <div class="text-center">
                                      <a style="color: black" href="<?=Url::to(['video/view', 'id' => $video->id])?>" title="<?= $video->name?>">
                                          <h2 class="text-transfer" style="margin: 0px; text-align: start; font-size: 17px"><?= $video->name?></h2>
                                      </a>
                                  </div>
                              </div>
                              <div class="content-footer2">

                                  <img class="user-small-img"  src="<?=empty($to->profile->avatar) ? 'http://www.nykhas.ru/wp-content/uploads/2017/02/mister-x-jpg.jpg' : $to->profile->avatar?>" alt="Profile image example>">

                                  <p class="text-center">
                                      <?= $to->profile->nickname?>
                                      <br>
                                      <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                      <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?= $to->views?></a>
                                      <br>
                                      <i class="fa fa-eye" aria-hidden="true"></i>
                                      <span>999.999.9</span>
                                  </p>

                              </div>
                          </div>
                      </div>
                  <?php endforeach;?>
              </div>

          </div>
      </div>
</div>


<?php Pjax::end();?>

