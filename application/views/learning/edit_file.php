<h2> <?= $title; ?> </h2>

<br>

<?php echo validation_errors(); ?>



<?php echo form_open_multipart('learning/updatefile'); ?>

	

  <div class="form-group col-lg-6">

  	<label>Title</label>

   <input type="text" class="form-control" name="title" placeholder="example: How to make rich in 20 years" value="<?php echo $files['title']; ?>" autofocus required>

    <label>Image</label>

	    <input type="file" name="userfileimage"  size="20" />

    	<label>File</label>

   <label>File</label>

    <input type="file" name="userfile"  size="20" />
<label>Section</label>

	<select name="section" class="form-control" required>
  		<option value="<?php echo $files['section']; ?>"><?php echo $files['section']; ?></option>
  		<option value="A">A</option>
  		<option value="B">B</option>
  	</select>

    <input type="hidden" name="filenya" value="<?php echo $files['file']; ?>">

    <input type="hidden" name="imagenya" value="<?php echo $files['img']; ?>">

    <input type="hidden" name="id_file" value="<?php echo $files['id_file']; ?>">

    <br>

    <button type="submit" class="btn btn-default">Submit</button>

  </div>



  

  

</form>

