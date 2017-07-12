 <?php foreach($model as $video):?>
 <div class="col-md-4">
 <video src="uploads/1.mp4" width="100%" height="300" controls="controls"></video>
                       <?=$video->name?>
                           <p>name user</p>
                           <p>prosmotreno | data dobavlenia</p>
</div>
<?php endforeach;?>