<h2><?= $title ?></h2>

 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Video</a></li>
    <li><a data-toggle="tab" href="#menu1">Document</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<br>
    	<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/learning/create'); ?>">+ Add more video</a>
		  </div>
		</div>
      	
      	<table class="table table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Posted on</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($videos as $video) : ?>
				<tr>
					<td class="col-lg-9"><?php echo substr($video['title'],0,130); if(strlen($video['title']) > 50 ){echo " ...";}else{}?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($video['created_at'])); ?></td>

					<td  class="col-lg-2">
						<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/learning/viewvideo/'.$video['id_video']); ?>">View</a> 
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/learning/editvideo/'.$video['id_video']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
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
      	<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/learning/createfile'); ?>">+ Add more document</a>
		  </div>
		</div>
      	
      	<table class="table table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Posted on</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($files as $file) : ?>
				<tr>
					<td class="col-lg-9"><?php echo substr($file['title'],0,130); if(strlen($file['title']) > 50 ){echo " ...";}else{}?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($file['created_at'])); ?></td>

					<td  class="col-lg-2">
						<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/learning/viewfile/'.$file['id_file']); ?>">View</a> 
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/learning/editfile/'.$file['id_file']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
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


