<h2> <?= $title; ?> </h2>

<?php echo validation_errors(); ?>
<?= $error; ?>

<?php echo form_open_multipart('products/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" required autofocus>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" required></textarea>
  </div>
  <div class="form-group">
  	<label>Section</label>
  	<select name="section" class="form-control" required>
  		<option value=""></option>
  		<option value="AJ">Asuransi Jiwa</option>
  		<option value="AK">Asuransi Kesehatan</option>
      <option value="APK">Asuransi Penyakit Kritis</option>
      <option value="AKL">Asuransi Keluarga Lengkap</option>
      <option value="AS">Asuransi Syariah</option>
      <option value="AP">Asuransi Pendidikan</option>
   	</select>
  </div>
  <div class="form-group">
  	<label>Image</label>
  	<font size="1"><br>(for best views, upload a landscape oriented photo. Make sure it is less than 1024 x 1024 pixels and no bigger than 2MB)</font>
  	<input type="file" name="userfile"  size="20" />
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>