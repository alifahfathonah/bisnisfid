<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/update'); ?>
  <input type="hidden" name="id" value=" <?php echo $post['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>" required>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" required><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Section</label>
    <select name="section" class="form-control" required>
      <option value="<?php echo $post['section']; ?>">
      <?php if($post['section']=="b"){echo "Business";}
      elseif($post['section']=="t"){echo"Tentang Allianz";}
      elseif($post['section']=="u"){echo"Tentang Univision";}
      elseif($post['section']=="k"){echo"Keuntungan";}
      elseif($post['section']=="f"){echo"Fakta Klaim";}
      else{echo"Product";} ?></option>
      <option value="b">Bisnis</option>
      <option value="p">Produk</option>
      <option value="t">Tentang Allianz</option>
      <option value="u">Tentang Univision</option>
      <option value="k">Keuntungan</option>
      <option value="f">Fakta Klaim</option>
    </select>
  </div>
  <div class="form-group">
    <label>Image</label>
    <font size="1"><br>(for best views, upload a landscape oriented photo. Make sure it is less than 1024 x 1024 pixels and no bigger than 2MB)</font>
    <input type="hidden" name="image" value="<?= $post['image'];?>">
    <input type="file" name="userfile"  size="20" />
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>