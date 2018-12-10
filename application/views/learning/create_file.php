<h2> <?= $title; ?> </h2>



<?php echo validation_errors(); ?>

<?= $error; ?>



<?php echo form_open_multipart('learning/docreatefile'); ?>

  	<div class="form-group col-lg-6 ">

	  	<label>Title</label>

	    <input type="text" class="form-control" name="title" placeholder="example: How to make rich in 20 years" autofocus required>



	    <label>Image</label>

	    <input type="file" name="userfileimage"  size="20" />

    	<label>File</label>

	    <input type="file" name="userfile"  size="20" />

	   
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