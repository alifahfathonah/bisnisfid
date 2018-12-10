<h2> <?= $title; ?> </h2>



<?php echo validation_errors(); ?>

<?= $error; ?>



<?php echo form_open_multipart('learning/createvideo'); ?>

  <div class="form-group col-lg-6 ">

  	<label>Title</label>

    <input type="text" class="form-control" name="title" placeholder="example: How to make rich in 20 years" autofocus required>

    <label>URL</label>

    <input type="url" class="form-control" name="url" placeholder="example: https://www.youtube.com/watch?v=rz5oUbIv0ow" autofocus required>
<label>Section</label>
  	<select name="section" class="form-control" required>
  		<option value=""></option>
  		<option value="A">A</option>
  		<option value="B">B</option>
  	</select>
    <br>
	
    <button type="submit" class="btn btn-default">Submit</button>

  </div>

  

</form>