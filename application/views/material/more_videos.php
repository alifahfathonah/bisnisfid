<h2><?php echo $title; ?></h2>

<br>

    <div class="row">
        <?php foreach($videos as $video) : ?>
        <div class="col-lg-4">
            <div class="text-center">
            <iframe  id="embed" src="https://www.youtube.com/embed/<?php echo $video['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            
            <div class="text-center">
            <h3><?php echo $video['title']; ?></h3>
            </div>
        </div>
       
        <?php endforeach; ?>
    </div>
    
 	
  


