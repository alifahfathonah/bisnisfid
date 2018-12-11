<h2><?= $title; ?></h2>

<div class="row">
	<div class="col-lg-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Agent Number</th>
					<th>Full Name</th>
					<th>Status</th>
					<th>Valid until</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($users as $user) : ?>
				<tr>
					<td class="col-lg-2"><?php echo $user['polis_no']; ?></td>
					<td class="col-lg-5"><?php echo $user['name']; ?></td>
					<td class="col-lg-1"><?php if($user['valid']==1){echo "valid";}else{ echo "not valid";}?></td>
					<td class="col-lg-1"><?php echo date('M j, Y', strtotime($user['valid_until'])); ?></td>
					<td class="col-lg-3">
						<a class="btn btn-info btn-sm pull-left" href="<?php echo site_url('/admin/view/'.$user['id']); ?>">View</a>  
						<?php echo form_open('/admin/accept/'.$user['username']); ?>
							<input type="submit" value="Active" class="btn btn-success btn-sm pull-left" style="margin-left: 4px;">
						</form>
						<?php echo form_open('/admin/deactive/'.$user['username']); ?>
							<input type="submit" value="Deactive" class="btn btn-warning btn-sm pull-left" style="margin-left: 4px;margin-right: 4px;">
						</form>
						<?php echo form_open('/admin/reject/'.$user['id']); ?>
							<input type="submit" value="Reject" class="btn btn-danger btn-sm">
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>