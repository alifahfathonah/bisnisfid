<h2> <?= $title; ?> </h2>

<div class="row">
  <div class="form-group col-lg-6 ">
    <?php echo form_open_multipart('toolaids/update/'); ?>
    	
      <?php
        switch($this->uri->segment(3)){
          case 'book':
            echo "<label>Title</label>
                  <input type='text' class='form-control' name='title' value='$post[title]' placeholder='example: How to make rich in 20 years' autofocus required  maxlength='255'>
                  <label>Document</label>
                  <input type='file' class='form-control-file' name='userfile'  size='20' />
                  <input type='hidden' name='section'  value='book' />
                  <input type='hidden' name='type'  value='doc' />
                  <input type='hidden' name='filenya' value='$post[doc]''>
                  <input type='hidden' name='id' value='$post[id]'>";
          break;
          case 'epro':
             echo "<label>Title</label>
                  <input type='text' class='form-control' name='title' value='$post[title]' placeholder='example: How to make rich in 20 years' autofocus required  maxlength='255'>
                  <label>Document</label>
                  <input type='file' class='form-control-file' name='userfile'  size='20' />
                  <input type='hidden' name='section'  value='epro' />
                  <input type='hidden' name='type'  value='doc' />
                  <input type='hidden' name='filenya' value='$post[doc]'>
                  <input type='hidden' name='id' value='$post[id]'>";
          break;
          case 'meeting':
            if($this->uri->segment(5) === "video") {
                echo "<label>Title</label>
                      <input type='text' class='form-control' name='title' value='$post[title]' placeholder='example: How to make rich in 20 years' autofocus required  maxlength='255'>
                      <input type='hidden' name='section' value='meeting' />
                      <input type='hidden' name='id' value='$post[id]'>
                      <label>URL</label>
                      <input type='url' class='form-control' name='url' value='https://www.youtube.com/watch?v=$post[url]' placeholder='example: https://www.youtube.com/watch?v=rz5oUbIv0ow' autofocus required maxlength='255'>
                      <input type='hidden' name='type' value='video' />";
            }
            else {
              echo "<input type='hidden' name='type'  value='photo' />
                    <input type='hidden' name='section' value='meeting' />
                    <input type='hidden' name='id_main' value='$post[id]' />
                    <label>Title</label>
                      <input type='text' class='form-control' name='title' value='$post[title]' placeholder='example: How to make rich in 20 years' autofocus required  maxlength='255' style='margin-bottom:5px;'>
                    <label>Images</label>
                    <br>
                    ";
             
             foreach($posts as $post) :

                echo "
                    <img src=".base_url()."assets/meeting/".$post['image']." style='padding-bottom:5px; height:120px;'>
                    <input type='text' class='form-control' name='caption[]' value='$post[caption]' placeholder='Caption' autofocus maxlength='255' style='margin-bottom:5px;'>

                    <input type='hidden' name='id[]' value='$post[id]'>";
             endforeach;
            }

          break;
          case 'asn':
            
            if($this->uri->segment(5) === "video") {
                echo "$title
                      <input type='hidden' name='section' value='asn' />
                      <input type='hidden' name='id' value='$post[id]'>
                      <label>URL</label>
                      <input type='url' class='form-control' name='url' value='https://www.youtube.com/watch?v=$post[url]' placeholder='example: https://www.youtube.com/watch?v=rz5oUbIv0ow' autofocus required maxlength='255'>
                      <input type='hidden' name='type' value='video' />";
            }
            else {
              echo "<input type='hidden' name='type'  value='photo' />
                    <input type='hidden' name='section' value='asn' />
                    <input type='hidden' name='id_main' value='$post[id]' />
                    <label>Title</label>
                      <input type='text' class='form-control' name='title' value='$post[title]' placeholder='example: How to make rich in 20 years' autofocus required  maxlength='255' style='margin-bottom:5px;'>
                    <label>Images</label>
                    <br>
                    ";
             
             foreach($posts as $post) :

                echo "
                    <img src=".base_url()."assets/asn/".$post['image']." style='padding-bottom:5px; height:120px;'>
                    <input type='text' class='form-control' name='caption[]' value='$post[caption]' placeholder='Caption' autofocus maxlength='255' style='margin-bottom:5px;'>

                    <input type='hidden' name='id[]' value='$post[id]'>";
             endforeach;
            }
            
          break;
          case 'mobile':
            if($this->uri->segment(5) === "video") {
                echo "$title
                      <input type='hidden' name='section' value='mobile' />
                      <input type='hidden' name='id' value='$post[id]'>
                      <label>URL</label>
                      <input type='url' class='form-control' name='url' value='https://www.youtube.com/watch?v=$post[url]' placeholder='example: https://www.youtube.com/watch?v=rz5oUbIv0ow' autofocus required maxlength='255'>
                      <input type='hidden' name='type' value='video' />";
            }
            else {
             echo "<input type='hidden' name='type'  value='photo' />
                    <input type='hidden' name='section' value='mobile' />
                    <input type='hidden' name='id_main' value='$post[id]' />
                    <label>Title</label>
                      <input type='text' class='form-control' name='title' value='$post[title]' placeholder='example: How to make rich in 20 years' autofocus required  maxlength='255' style='margin-bottom:5px;'>
                    <label>Images</label>
                    <br>
                    ";
             
             foreach($posts as $post) :

                echo "
                    <img src=".base_url()."assets/mobile/".$post['image']." style='padding-bottom:5px; height:120px;'>
                    <input type='text' class='form-control' name='caption[]' value='$post[caption]' placeholder='Caption' autofocus maxlength='255' style='margin-bottom:5px;'>

                    <input type='hidden' name='id[]' value='$post[id]'>";
             endforeach;
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
  

