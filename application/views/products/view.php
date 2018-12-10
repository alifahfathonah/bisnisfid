<h2><?php echo $post['title']; ?></h2>

<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div>
<?php if($post['image'] != null){ ?>
			 <img src="<?php echo site_url(); ?>assets/products/<?php echo $post['image']; ?>">
			<?php } ?>
</div>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>
