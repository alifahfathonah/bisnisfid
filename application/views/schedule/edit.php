<h2> <?= $title; ?> </h2>



<?php echo validation_errors(); ?>





<?php echo form_open_multipart('schedule/update'); ?>

  <input type="hidden" name="id" value=" <?php echo $post['id']; ?>">

  <div class="form-group col-lg-12">

    <label>Training Title</label>

    <input type="text" class="form-control" name="name" placeholder="Enter training title" value="<?php echo $post['name']; ?>" required autofocus>

  </div>

  <div class="form-group col-lg-12">

    <label>Training Description</label>

    <textarea class="form-control" id="body1" name="desc" placeholder="Enter the training description"><?php echo $post['desc']; ?></textarea>

  </div>
  <script type="text/javascript">
      	CKEDITOR.replace( 'body1' );
  	CKEDITOR.add
  </script> 
  <div class="form-group col-lg-12">

    <label>Training Material</label>

    <textarea class="form-control" id="body2" name="material" placeholder="Enter your training material" required><?php echo $post['material']; ?></textarea>

  </div>
  <script type="text/javascript">
      	CKEDITOR.replace( 'body2' );
  	CKEDITOR.add
  </script> 
  <div class="form-group col-lg-12">

    <label>Training Objectives</label>

    <textarea class="form-control" id="body3" name="tujuan" placeholder="Enter your training objectives" required><?php echo $post['tujuan']; ?></textarea>

  </div>
  <script type="text/javascript">
      	CKEDITOR.replace( 'body3' );
  	CKEDITOR.add
  </script> 
  <div class="form-group col-lg-12">

    <label>Target Participants</label>

    <textarea class="form-control" id="body4" name="target" placeholder="Enter your target participants" required><?php echo $post['target']; ?></textarea>

  </div>
  <script type="text/javascript">
      	CKEDITOR.replace( 'body4' );
  	CKEDITOR.add
  </script> 
  <div class="form-group col-lg-3">

    <label>Duration</label>

    <input type="text" class="form-control" name="durasi" placeholder="Enter duration of training" value="<?php echo $post['durasi']; ?>" required autofocus>

  </div>

  <div class="form-group col-lg-12">

    <label>Training Location</label>

    <textarea class="form-control" id="body5" name="location" placeholder="Enter training location" required><?php echo $post['location']; ?></textarea>

  </div>
  <script type="text/javascript">
      	CKEDITOR.replace( 'body5' );
  	CKEDITOR.add
  </script> 
  <div class="form-group col-lg-3">

    <label>Training Date</label>

    <input type="text" class="form-control" name="date" placeholder="Enter training date" value="<?php echo $post['date']; ?>" required autofocus>

  </div>

<div class="form-group col-lg-12">
    <label>Image</label>
    <font size="1"><br>(for best views, upload a landscape oriented photo. Make sure it is less than 1024 x 1024 pixels and no bigger than 2MB)</font>
    <input type="hidden" name="image" value="<?= $post['image'];?>">
    <input type="file" name="userfile"  size="20" />
  </div>

  <div class="form-group col-lg-12">

  <button type="submit" class="btn btn-default">Submit</button>

  </div>

</form>