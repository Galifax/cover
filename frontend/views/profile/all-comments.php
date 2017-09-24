<?php 
use yii\helpers\Url;
foreach($model as $com):?>
                            <li class="prof-com">
                                <p>
                                <a href="<?=Url::to(['/video/view', 'id' => $com->video->id])?>"><?=$com->video->name?></a></p>
                                <p><?=$com->profile->nickname?></p> <p><?=$com->content?></p>
                                <p><?=$com->date?></p>
                            </li>
                        <?php endforeach;?>