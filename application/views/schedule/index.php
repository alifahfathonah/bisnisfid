<h2><?= $title ?></h2>
<?php 
	if($this->session->flashdata('create_success')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('create_success')."</p></div> ";
	}
	if($this->session->flashdata('update_success')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('update_success')."</p></div> ";
	}
	if($this->session->flashdata('delete_success')){
		echo "<div class='alert alert-success'><p>".$this->session->flashdata('delete_success')."</p></div> ";
	}
?>
<a class="btn btn-info" href="<?php echo site_url('/schedule/create'); ?>">Create</a>

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
			<td><?php echo $post['name']; ?></td>
			<td><?php echo $post['location']; ?></td>
			<td><?php echo $post['date']; ?></td>
			<td width="30%">
				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/schedule/view/'.$post['id']); ?>">View</a> 
				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/schedule/edit/'.$post['id']); ?>">Edit</a>
				<?php echo form_open('/schedule/delete/'.$post['id']); ?>
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">
				</form>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>