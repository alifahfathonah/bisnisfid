<h2> <?= $title; ?> </h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('products/update'); ?>
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
      <option value="
      <?php echo $post['section']; ?>"><?php 
      if($post['section']=="AJ"){echo "Asuransi Jiwa";}
      elseif($post['section']=="AK"){echo "Asuransi Kesehatan";}
      elseif($post['section']=="APK"){echo "Asuransi Penyakit Kritis";}
      elseif($post['section']=="AKL"){echo "Asuransi Keluarga Lengkap";}
      elseif($post['section']=="AS"){echo "Asuransi Syariah";}
      elseif($post['section']=="ARJ"){echo "Asuransi Rawat Jalan";}
      elseif($post['section']=="AM"){echo "Asuransi Melahirkan";}
      else{echo"Asuransi Pendidikan";} ?>
      </option>
      <option value="AJ">Asuransi Jiwa</option>
      <option value="AK">Asuransi Kesehatan</option>
      <option value="APK">Asuransi Penyakit Kritis</option>
      <option value="AKL">Asuransi Keluarga Lengkap</option>
      <option value="AS">Asuransi Syariah</option>
      <option value="ARJ">Asuransi Rawat Jalan</option>
      <option value="AM">Asuransi Melahirkan</option>
      <option value="AP">Asuransi Pendidikan</option>
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