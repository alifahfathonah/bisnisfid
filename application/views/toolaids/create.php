<h2> <?= $title; ?> </h2>

<div class="row">
  <div class="form-group col-lg-6 ">
    <?php echo form_open_multipart('toolaids/store/'); ?>
    	
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="example: How to make rich in 20 years" autofocus required maxlength="255">
      
      <?php
        switch($this->uri->segment(3)){
          case 'book':
            echo "<label>Document</label>
                  <input type='file' class='form-control-file' name='userfile'  size='20' />
                  <input type='hidden' name='section'  value='book' />
                  <input type='hidden' name='type'  value='doc' />";
          break;
          case 'epro':
             echo "<label>Document</label>
                  <input type='file' class='form-control-file' name='userfile'  size='20' />
                  <input type='hidden' name='section'  value='epro' />
                  <input type='hidden' name='type'  value='doc' />";
          break;
          case 'meeting':
            echo "<input type='hidden' name='section'  value='meeting' />";
            if($this->uri->segment(4) === "video") {
                echo "<label>URL</label>
                      <input type='url' class='form-control' name='url' placeholder='example: https://www.youtube.com/watch?v=rz5oUbIv0ow' autofocus required maxlength='255'>
                      <input type='hidden' name='type'  value='video' />";
            }
            else {
              echo "<label>Photo</label>
                    <input type='file' class='form-control-file' name='userfile'  size='20' />
                    <input type='hidden' name='type'  value='photo' />";
            }
          break;
          case 'asn':
            echo "<input type='hidden' name='section'  value='asn' />";
            if($this->uri->segment(4) === "video") {
                echo "<label>URL</label>
                      <input type='url' class='form-control' name='url' placeholder='example: https://www.youtube.com/watch?v=rz5oUbIv0ow' autofocus required maxlength='255'>
                      <input type='hidden' name='type'  value='video' />";
            }
            else {
              echo "<label>Photo</label>
                    <input type='file' class='form-control-file' name='userfile'  size='20' />
                    <input type='hidden' name='type'  value='photo' />";
            }
          break;
          case 'mobile':
            echo "<input type='hidden' name='section'  value='mobile' />";
            if($this->uri->segment(4) === "video") {
                echo "<label>URL</label>
                      <input type='url' class='form-control' name='url' placeholder='example: https://www.youtube.com/watch?v=rz5oUbIv0ow' autofocus required maxlength='255'>
                      <input type='hidden' name='type'  value='video' />";
            }
            else {
              echo "<label>Photo</label>
                    <input type='file' class='form-control-file' name='userfile'  size='20' />
                    <input type='hidden' name='type'  value='photo' />";
            }
          break;
          default:
          
          break;
        }
      ?>
      <br>
	     <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</div>
  

