<h2><?= $title ?></h2>
<br>
    <div class="row">
        <?php foreach($files as $file) : ?>
        <div class="col-lg-4">
            <div class="text-center">
            <img src="<?php echo base_url();?>assets/learning/<?php echo $file['img'];?>" height="128px">
            </div>
            <div class="text-center">
            <a href="<?php echo base_url();?>assets/learning/<?php echo $file['file'];?>">
                <img src="<?php echo base_url();?>assets/img/down.png" width="128px">
            </a>
            </div>
            <div class="text-center">
            <h3><?php echo $file['title']; ?></h3>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
 	
  


