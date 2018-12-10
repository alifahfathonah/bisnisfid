<h2><?php echo $post['name']; ?></h2>
<?php if($post['image'] != null){ ?>
       <img src="<?php echo site_url(); ?>assets/schedules/<?php echo $post['image']; ?>" class="imagedropshadow">
      <?php } ?><br>

<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<h2>Description</h2>
	<?php echo $post['desc']; ?>
</div>
<hr>
<div class="post-body">
	<h2>Material</h2>
	<?php echo $post['material']; ?>
</div>
<hr>
<div class="post-body">
	<h2>Objectives</h2>
	<?php echo $post['tujuan']; ?>
</div>
<hr>
<div class="post-body">
	<h2>Target</h2>
	<?php echo $post['target']; ?>
</div>
<hr>
<div class="post-body">
	<h2>Duration</h2>
	<?php echo $post['durasi']; ?>
</div>
