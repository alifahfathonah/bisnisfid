<h2> <?= $title; ?> </h2>

<br>

<?php echo validation_errors(); ?>



<?php echo form_open('learning/updatevideo'); ?>

	

  <div class="form-group col-lg-6">

  	<label>Title</label>

    <input type="text" class="form-control" name="title" value="<?= $videos['title'] ?>" placeholder="example: How to make rich in 20 years" autofocus required>

    <label>URL</label>

    <input type="url" class="form-control" name="url" value="https://www.youtube.com/watch?v=<?php echo $videos['url']; ?>" placeholder="example: https://www.youtube.com/watch?v=rz5oUbIv0ow" autofocus required>

<label>Section</label>

	<select name="section" class="form-control" required>
  		<option value="<?php echo $videos['section']; ?>"><?php echo $videos['section']; ?></option>
  		<option value="A">A</option>
  		<option value="B">B</option>
  	</select>   
 <input type="hidden" name="id_video" value="<?php echo $videos['id_video']; ?>">

    <br>

    <button type="submit" class="btn btn-default">Submit</button>

  </div>



  

  

</form>

