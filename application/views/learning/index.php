<h2><?= $title ?></h2>
<?php 
	if($this->session->flashdata('upload_file')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('upload_file')."</p></div> ";
	}
	if($this->session->flashdata('upload_video')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('upload_video')."</p></div> ";
	}
	if($this->session->flashdata('failed_upload_file')){
		echo "<div class='alert alert-danger'><p>".$this->session->flashdata('failed_upload_file')."</p></div> ";
	}
	if($this->session->flashdata('update_file')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('update_file')."</p></div> ";
	}
	if($this->session->flashdata('update_video')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('update_video')."</p></div> ";
	}
	if($this->session->flashdata('delete_file')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('delete_file')."</p></div> ";
	}
	if($this->session->flashdata('delete_video')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('delete_video')."</p></div> ";
	}
?>
 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Video</a></li>
    <li><a data-toggle="tab" href="#menu1">Document</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<br>
      	<a class="btn btn-info btn-sm" href="<?php echo site_url('/learning/create'); ?>">Add more video</a>
      	<table class="table table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($videos as $video) : ?>
				<tr>
					<td><?php echo $video['title']; ?></td>
					<td width="30%">
						<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/learning/viewvideo/'.$video['id_video']); ?>">View</a> 
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/learning/editvideo/'.$video['id_video']); ?>">Edit</a>
						<?php echo form_open('/learning/delete_video/'.$video['id_video']); ?>
							<input type="submit" value="Delete" class="btn btn-danger btn-sm">
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
    </div>
    <div id="menu1" class="tab-pane fade">
      	<br>
      	<a class="btn btn-info btn-sm" href="<?php echo site_url('/learning/createfile'); ?>">Add more document</a>
      	<table class="table table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($files as $file) : ?>
				<tr>
					<td><?php echo $file['title']; ?></td>
					<td width="30%">
						<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/learning/viewfile/'.$file['id_file']); ?>">View</a> 
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/learning/editfile/'.$file['id_file']); ?>">Edit</a>
						<?php echo form_open('/learning/delete_file/'.$file['id_file']); ?>
							<input type="submit" value="Delete" class="btn btn-danger btn-sm">
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
    </div>
  </div>


