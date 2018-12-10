<h2><?= $title ?></h2>


<div class ="row">
  <div class="col-lg-12 text-right">
	<a class="btn btn-info btn-sm" href="<?php echo site_url('/success/create'); ?>">+ Create New Story</a>
  </div>
</div>
<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Emerald BP</a></li>
    <li><a data-toggle="pill" href="#menu1">Diamond BP</a></li>
    <li><a data-toggle="pill" href="#menu2">Executive BP</a></li>
    <li><a data-toggle="pill" href="#menu3"> Double Diamond BP</a></li>
<li><a data-toggle="pill" href="#menu4"> Triple Diamond BP</a></li>
</ul>

 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
   <table class="table table-hover">
	<thead>
		<tr>
		<th>Title</th>
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($em as $post_p) : ?>

		<tr>

			<td><?php echo substr($post_p['title'],0,50); if(strlen($post_p['title']) > 50 ){echo " ...";}else{}?></td>

			
			<td><?php echo $post_p['created_at']; ?></td>

			<td width="25%">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/success/view/'.$post_p['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/success/edit/'.$post_p['slug']); ?>">Edit</a>

				<?php echo form_open('/success/delete/'.$post_p['id']); ?>

					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

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
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($di as $post_b) : ?>

		<tr>

			<td><?php echo substr($post_b['title'],0,50); if(strlen($post_b['title']) > 50 ){echo " ...";}else{}?></td>

			
			<td><?php echo $post_b['created_at']; ?></td>

			<td width="25%">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/success/view/'.$post_b['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/success/edit/'.$post_b['slug']); ?>">Edit</a>

				<?php echo form_open('/success/delete/'.$post_b['id']); ?>

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
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($ex as $post_t) : ?>

		<tr>

			<td><?php echo substr($post_t['title'],0,50); if(strlen($post_t['title']) > 50 ){echo " ...";}else{}?></td>

			
			<td><?php echo $post_t['created_at']; ?></td>

			<td width="25%">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/success/view/'.$post_t['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/success/edit/'.$post_t['slug']); ?>">Edit</a>

				<?php echo form_open('/success/delete/'.$post_t['id']); ?>

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
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($dd as $post_k) : ?>

		<tr>

			<td><?php echo substr($post_k['title'],0,50); if(strlen($post_k['title']) > 50 ){echo " ...";}else{}?></td>

			
			<td><?php echo $post_k['created_at']; ?></td>

			<td width="25%">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/success/view/'.$post_k['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/success/edit/'.$post_k['slug']); ?>">Edit</a>

				<?php echo form_open('/success/delete/'.$post_k['id']); ?>

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
		<th>Posted on</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($td as $post_f) : ?>

		<tr>

			<td><?php echo substr($post_f['title'],0,50); if(strlen($post_f['title']) > 50 ){echo " ...";}else{}?></td>

			
			<td><?php echo $post_f['created_at']; ?></td>

			<td width="25%">

				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/success/view/'.$post_f['slug']); ?>">View</a> 

				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/success/edit/'.$post_f['slug']); ?>">Edit</a>

				<?php echo form_open('/success/delete/'.$post_f['id']); ?>

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

