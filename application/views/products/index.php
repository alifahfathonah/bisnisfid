<h2><?= $title ?></h2>

<div class ="row">
		  <div class="col-lg-12 text-right">
			<a class="btn btn-info btn-sm" href="<?php echo site_url('/products/create'); ?>">+ Create New Product</a>
		  </div>
		</div>



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
				<td class="col-lg-5"><?php echo substr($post['title'],0,50); if(strlen($post['title']) > 50 ){echo " ...";}else{}?></td>
				<td class="col-lg-3"><?php 
				      if($post['section']=="AJ"){echo "Asuransi Jiwa";}
				      elseif($post['section']=="AK"){echo "Asuransi Kesehatan";}
				      elseif($post['section']=="APK"){echo "Asuransi Penyakit Kritis";}
				      elseif($post['section']=="AKL"){echo "Asuransi Keluarga Lengkap";}
				      elseif($post['section']=="AS"){echo "Asuransi Syariah";}
				      elseif($post['section']=="ARJ"){echo "Asuransi Rawat Jalan";}
				      elseif($post['section']=="AM"){echo "Asuransi Melahirkan";}
				      else{echo"Asuransi Pendidikan";} ?>
				</td>
				<td class="col-lg-1"><?php echo date('M j, Y', strtotime($post['created_at'])); ?></td>
				<td class="col-lg-3">
					<a class="btn btn-success btn-sm pull-left" href="<?php echo site_url('/products/view/'.$post['slug']); ?>">View</a> 
					<a class="btn btn-warning btn-sm pull-left" href="<?php echo site_url('/products/edit/'.$post['slug']); ?>" style="margin-left: 4px;margin-right: 4px;">Edit</a>
					<?php echo form_open('/products/delete/'.$post['id']); ?>
						<input type="submit" value="Delete" class="btn btn-danger btn-sm ">
					</form>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>