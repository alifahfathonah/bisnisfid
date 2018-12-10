<h2><?= $title; ?></h2>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
    	<?php echo validation_errors(); ?>

		<?php echo form_open('videos/update'); ?>
			<input type="hidden" name="id" value=" <?php echo $video['id']; ?>">
		  	<div class="form-group">
		    	<label>Title</label>
		    	<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $video['title']; ?>" required>
		  	</div>
		  	<div class="form-group">
		    	<label>Embeded Video URL</label>
		    	 <textarea class="form-control" name="url" placeholder="Add Embeded Video URL" required><?php echo $video['url']; ?></textarea>
		    	
		  	</div>
		  	<button type="submit" class="btn btn-default">Submit</button>
		</form>
    </div>
    <div class="col-lg-6"><?php echo $video['url']; ?></div>
  </div>
</div>