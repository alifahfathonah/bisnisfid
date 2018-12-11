<h2><?= $title ?></h2>

 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Buku yang Direkomendasi</a></li>
    <li><a data-toggle="tab" href="#menu1">E-pro</a></li>
    <li><a data-toggle="tab" href="#menu2">Pertemuan</a></li>
    <li><a data-toggle="tab" href="#menu3">ASN Digital Tools</a></li>
    <li><a data-toggle="tab" href="#menu4">Univision Go-mobile apps</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<br>
    	<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/book'); ?>">+ Create New Post</a>
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
			<?php foreach($books as $book) : ?>
				<tr>
					<td class="col-lg-8"><?php echo substr($book['title'],0,130); if(strlen($book['title']) > 50 ){echo " ...";}else{}?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($book['created_at'])); ?></td>

					<td  class="col-lg-3">
						<a class="btn btn-success btn-sm pull-left" href="<?php echo base_url();?>assets/book/<?=$book['doc'];?>">Download</a> 
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/toolaids/edit/book/'.$book['id']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
						<a class="btn btn-danger btn-sm" href="<?php echo site_url('toolaids/destroy/'.$book['id']);?>">Delete</a> 
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
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/epro'); ?>">+ Create New Post</a>
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
			<?php foreach($epros as $epro) : ?>
				<tr>
					<td class="col-lg-8"><?php echo substr($epro['title'],0,130); if(strlen($epro['title']) > 50 ){echo " ...";}else{}?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($epro['created_at'])); ?></td>

					<td  class="col-lg-3">
						<a class="btn btn-success btn-sm pull-left" href="<?php echo base_url();?>assets/epro/<?=$epro['doc'];?>">Download</a> 
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/toolaids/edit/epro/'.$epro['id']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
						<a class="btn btn-danger btn-sm" href="<?php echo site_url('toolaids/destroy/'.$epro['id']);?>">Delete</a> 
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
    </div>

    <div id="menu2" class="tab-pane fade">
      	<br>
      	<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/meeting/video'); ?>">+ Upload New Video</a>
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/meeting/photo'); ?>">+ Upload New Image</a>
		  </div>
		</div>
      	
      	<table class="table table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Type</th>
					<th>Posted on</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($meetings as $meeting) : ?>
				<tr>
					<td class="col-lg-7"><?php echo substr($meeting['title'],0,130); if(strlen($meeting['title']) > 50 ){echo " ...";}else{}?></td>
					<td class="col-lg-1"><?php echo $meeting['type']; ?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($meeting['created_at'])); ?></td>

					<td  class="col-lg-3">
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/toolaids/edit/meeting/'.$meeting['id'].'/'.$meeting['type']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
						<a class="btn btn-danger btn-sm" href="<?php echo site_url('toolaids/destroy/'.$meeting['id']);?>">Delete</a> 
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
    </div>

    <div id="menu3" class="tab-pane fade">
      	<br>
      	<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/asn/video'); ?>">+ Upload New Video</a>
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/asn/photo'); ?>">+ Upload New Image</a>
		  </div>
		</div>
      	
      	<table class="table table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Type</th>
					<th>Posted on</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($asns as $asn) : ?>
				<tr>
					<td class="col-lg-7"><?php echo substr($asn['title'],0,130); if(strlen($asn['title']) > 50 ){echo " ...";}else{}?></td>
					<td class="col-lg-1"><?php echo $asn['type']; ?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($asn['created_at'])); ?></td>

					<td  class="col-lg-3">
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/toolaids/edit/asn/'.$asn['id'].'/'.$asn['type']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
						<a class="btn btn-danger btn-sm" href="<?php echo site_url('toolaids/destroy/'.$asn['id']);?>">Delete</a> 
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
    </div>

    <div id="menu4" class="tab-pane fade">
      	<br>
      	<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/mobile/video'); ?>">+ Upload New Video</a>
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/toolaids/create/mobile/photo'); ?>">+ Upload New Image</a>
		  </div>
		</div>
      	
      	<table class="table table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Type</th>
					<th>Posted on</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($mobiles as $mobile) : ?>
				<tr>
					<td class="col-lg-7"><?php echo substr($mobile['title'],0,130); if(strlen($mobile['title']) > 50 ){echo " ...";}else{}?></td>
					<td class="col-lg-1"><?php echo $mobile['type']; ?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($mobile['created_at'])); ?></td>

					<td  class="col-lg-3">
						<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/toolaids/edit/mobile/'.$mobile['id'].'/'.$mobile['type']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
						<a class="btn btn-danger btn-sm" href="<?php echo site_url('toolaids/destroy/'.$mobile['id']);?>">Delete</a> 
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
    </div>
  </div>
