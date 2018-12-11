<h2><?= $title ?></h2>

<div class ="row">
  <div class="col-lg-12 text-right">
	<a class="btn btn-info btn-sm" href="<?php echo site_url('/posts/create'); ?>">+ Create New Article</a>
  </div>
</div>
<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Produk</a></li>
    <li><a data-toggle="pill" href="#menu1">Bisnis</a></li>
    <li><a data-toggle="pill" href="#menu2">Tentang Allianz</a></li>
    <li><a data-toggle="pill" href="#menu3">Keuntungan</a></li>
<li><a data-toggle="pill" href="#menu4">Fakta Klaim</a></li>

  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
   <table class="table table-hover">
	<thead>
		<tr>
		<th>Title</th>
		<th>Body</th>
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($p as $post_p) : ?>

		<tr>

			<td class="col-lg-3"><?php echo substr($post_p['title'],0,50); if(strlen($post_p['title']) > 50 ){echo " ...";}else{}?></td>
			<td class="col-lg-6"><?php echo substr($post_p['title'],0,100); if(strlen($post_p['body']) > 100 ){echo " ...";}else{}?></td>
			
			<td class="col-lg-1"><?php echo date('M j, Y', strtotime($post_p['created_at'])); ?></td>

			<td  class="col-lg-2">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/posts/view/'.$post_p['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/posts/edit/'.$post_p['slug']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>

				<?php echo form_open('/posts/delete/'.$post_p['id']); ?>

					<input type="submit" value="Delete" class="btn btn-danger btn-sm" >

				</form>

			</td>

		</tr>

<?php endforeach; ?>

	</tbody>

</table>
    </div>
    <div id="menu1" class="tab-pane fade">
   <table class="table table-hover">
	<thead>
		<tr>
		<th>Title</th>
		<th>Body</th>
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($b as $post_b) : ?>

		<tr>

			<td class="col-lg-3"><?php echo substr($post_b['title'],0,50); if(strlen($post_b['title']) > 50 ){echo " ...";}else{}?></td>
			<td class="col-lg-6"><?php echo substr($post_b['title'],0,100); if(strlen($post_b['body']) > 100 ){echo " ...";}else{}?></td>
			
			<td class="col-lg-1"><?php echo date('M j, Y', strtotime($post_b['created_at'])); ?></td>

			<td class="col-lg-2">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/posts/view/'.$post_b['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/posts/edit/'.$post_b['slug']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>

				<?php echo form_open('/posts/delete/'.$post_b['id']); ?>

					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>

			</td>

		</tr>

<?php endforeach; ?>

	</tbody>

</table>

    </div>
    <div id="menu2" class="tab-pane fade">
   <table class="table table-hover">
	<thead>
		<tr>
		<th>Title</th>
		<th>Body</th>
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($t as $post_t) : ?>

		<tr>

			<td class="col-lg-3"><?php echo substr($post_t['title'],0,50); if(strlen($post_t['title']) > 50 ){echo " ...";}else{}?></td>
			<td class="col-lg-6"><?php echo substr($post_t['title'],0,100); if(strlen($post_t['body']) > 100 ){echo " ...";}else{}?></td>
			
			<td class="col-lg-1"><?php echo date('M j, Y', strtotime($post_t['created_at'])); ?></td>

			<td class="col-lg-2">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/posts/view/'.$post_t['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/posts/edit/'.$post_t['slug']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>

				<?php echo form_open('/posts/delete/'.$post_t['id']); ?>

					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>

			</td>

		</tr>

<?php endforeach; ?>

	</tbody>

</table>

    </div>
    <div id="menu3" class="tab-pane fade">
   <table class="table table-hover">
	<thead>
		<tr>
		<th>Title</th>
		<th>Body</th>
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($k as $post_k) : ?>

		<tr>

			<td class="col-lg-3"><?php echo substr($post_k['title'],0,50); if(strlen($post_k['title']) > 50 ){echo " ...";}else{}?></td>
			<td class="col-lg-6"><?php echo substr($post_k['title'],0,100); if(strlen($post_k['body']) > 100 ){echo " ...";}else{}?></td>
			
			<td class="col-lg-1"><?php echo date('M j, Y', strtotime($post_k['created_at'])); ?></td>

			<td class="col-lg-2">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/posts/view/'.$post_k['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/posts/edit/'.$post_k['slug']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>

				<?php echo form_open('/posts/delete/'.$post_k['id']); ?>

					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>

			</td>

		</tr>

<?php endforeach; ?>

	</tbody>

</table>

     </div>
     <div id="menu4" class="tab-pane fade">
   <table class="table table-hover">
	<thead>
		<tr>
		<th>Title</th>
		<th>Body</th>
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($f as $post_f) : ?>

		<tr>

			<td class="col-lg-3"><?php echo substr($post_f['title'],0,50); if(strlen($post_f['title']) > 50 ){echo " ...";}else{}?></td>
			<td class="col-lg-6"><?php echo substr($post_f['title'],0,100); if(strlen($post_f['body']) > 100 ){echo " ...";}else{}?></td>
			
			<td class="col-lg-1"><?php echo date('M j, Y', strtotime($post_f['created_at'])); ?></td>

			<td class="col-lg-2">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/posts/view/'.$post_f['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/posts/edit/'.$post_f['slug']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>

				<?php echo form_open('/posts/delete/'.$post_f['id']); ?>

					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>

			</td>

		</tr>

<?php endforeach; ?>

	</tbody>

</table>

     </div>

  </div>
</div>





