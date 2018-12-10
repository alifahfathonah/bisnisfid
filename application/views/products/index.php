<h2><?= $title ?></h2>

<a class="btn btn-info" href="<?php echo site_url('/products/create'); ?>">Create</a>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Title</th>
			<th>Section</th>
			<th>Posted on</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($posts as $post) : ?>
		<tr>
			<td><?php echo $post['title']; ?></td>
			<td><?php 
      if($post['section']=="AJ"){echo "Asuransi Jiwa";}
      elseif($post['section']=="AK"){echo "Asuransi Kesehatan";}
      elseif($post['section']=="APK"){echo "Asuransi Penyakit Kritis";}
      elseif($post['section']=="AKL"){echo "Asuransi Keluarga Lengkap";}
      elseif($post['section']=="AS"){echo "Asuransi Syariah";}
      elseif($post['section']=="ARJ"){echo "Asuransi Rawat Jalan";}
      elseif($post['section']=="AM"){echo "Asuransi Melahirkan";}
      else{echo"Asuransi Pendidikan";} ?></td>
			<td><?php echo $post['created_at']; ?></td>
			<td width="25%">
				<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/products/view/'.$post['slug']); ?>">View</a> 
				<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/products/edit/'.$post['slug']); ?>">Edit</a>
				<?php echo form_open('/products/delete/'.$post['id']); ?>
					<input type="submit" value="Delete" class="btn btn-danger btn-sm ">
				</form>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>