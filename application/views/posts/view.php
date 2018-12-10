<h2><?php echo $post['title']; ?></h2>
<?php if($post['image'] != null){ ?>
       <img src="<?php echo site_url(); ?>assets/posts/<?php echo $post['image']; ?>">
      <?php } ?><br>

<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>
