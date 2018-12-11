<h2><?= $title ?></h2>

<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/schedule/create'); ?>">Create New Schedule</a>
		  </div>
		</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($posts as $post) : ?>
		<tr>
			<td class="col-lg-5"><?php echo substr($post['name'],0,50); if(strlen($post['name']) > 50 ){echo " ...";}else{}?></td>
			<td class="col-lg-3"><?php echo $post['location']; ?></td>
			<td class="col-lg-2"><?php echo $post['date']; ?></td>
			<td class="col-lg-2">
				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/schedule/view/'.$post['id']); ?>">View</a> 
				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/schedule/edit/'.$post['id']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
				<?php echo form_open('/schedule/delete/'.$post['id']); ?>
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">
				</form>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>