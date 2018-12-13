<h2><?= $title; ?></h2>
<div class="row">
	<div class="col-lg-12">
	<ul class="nav nav-pills">
	    <li class="active"><a data-toggle="tab" href="#biodata">Bio Data</a></li>
	    <li><a data-toggle="pill" href="#about">About</a></li>
	    <li><a data-toggle="pill" href="#personal">Personal Articles</a></li>

	</ul>
	</div>
	<div class="tab-content">
		<div id="biodata" class="tab-pane fade in active">
			<div class="col-lg-6">
				

				<?php echo form_open_multipart('members/update_profile'); ?>
					<div class="form-group">
				      <label>Full Name</label>
				      <input type="text" class="form-control" placeholder="Enter full name" name="name" value="<?php echo $agent['name']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				      <label>Sponsor Name</label>
				      <input type="text" class="form-control" placeholder="Enter sponsor name" name="referral_name" value="<?php echo $agent['referral_name']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				      <label>Sponsor Name</label>
				      <input type="text" class="form-control" placeholder="Emerald BP Name" name="bp_name" value="<?php echo $agent['bp_name']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				      <label>Sponsor Name</label>
				      <input type="text" class="form-control" placeholder="BP Upline Direct Name" name="bp_upline" value="<?php echo $agent['bp_upline']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				      <label>Sponsor Name</label>
				      <input type="text" class="form-control" placeholder="Kode Unit" name="kode_unit" value="<?php echo $agent['kode_unit']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				      <label>Agent Code </label>
				      <input type="text" class="form-control" placeholder="Enter agent Code" name="polis_no" value="<?php echo $agent['polis_no']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				      <label>Email Address</label>
				      <input type="email" class="form-control" placeholder="Enter email address" name="email" value="<?php echo $agent['email']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				      <label>Telephone Number</label>
				      <input type="text" class="form-control" placeholder="Enter telephone number" name="phone" value="<?php echo $agent['phone']; ?>" maxlength="255" required>
				    </div>
				    <div class="form-group">
				    <label>Address</label>
				    <textarea class="form-control" name="address" placeholder="Address" ><?php echo $agent['address'];  ?></textarea>
				  </div>
				  
				    <div class="form-group">
					<label>Image</label>
					<font size="1"><br>(Make sure it is less than 1024 x 1024 pixels and no bigger than 2MB)</font>
					    <input type="hidden" name="image" value="<?= $agent['image'];?>">
					    <input type="file" name="userfile"  size="20" />
					  </div>
				    <div class="form-group">
				    <button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
			<div class="col-lg-6">
				<table class="table table-hover">
					<tr>
						<td align="center" colspan="3">
						<?php if($agent['image'] != null){ ?>
						<img src="<?php echo base_url(); ?>assets/agents/<?php echo $agent['image'] ?>" alt="Img" height="120" width="120" />
						<?php }else{ ?>
						<img src="<?php echo base_url(); ?>assets/agents/blank.jpg" alt="Img" height="120" width="120" />
						<?php } ?>
						</td>
					</tr>
					<tr>
						<th>Name</th>
						<td>:</td>
						<td><?php echo $agent['name'] ?></td>
					</tr>
					<tr>
						<th>Agent No</th>
						<td>:</td>
						<td><?php echo $agent['polis_no'] ?></td>
					</tr>
					<tr>
						<th>Telephone</th>
						<td>:</td>
						<td><?php echo $agent['phone'] ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td>:</td>
						<td><?php echo $agent['email'] ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div id="about" class="tab-pane fade">
			
			
			<div class="col-lg-10">
				<?php echo form_open('members/update_about'); ?>
					<input type="hidden" name="id" value=" <?php echo $profile['id']; ?>">
				  
				  <div class="form-group">
				    <label>Short</label>
				    <textarea class="form-control input-lg" name="short" placeholder="Tell about your self" required><?php echo $profile['short']; ?></textarea>
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <textarea class="form-control input-lg" name="desc" placeholder="Description your life" required><?php echo $profile['desc'];  ?></textarea>
				  </div>
				  <div class="form-group">
				    <label>Quotes</label>
				    <textarea class="form-control input-lg" name="quotes" placeholder="Insert your favorite quotes" required><?php echo $profile['quotes']; ?></textarea>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
		<div id="personal" class="tab-pane fade">
			
			
			<?php foreach($personal as $data) : ?>
				<div class="col-lg-6">
				<?php echo form_open_multipart('members/update_personal'); ?>
					<input type="hidden" name="id" value=" <?php echo $data['id']; ?>">
				  <div class="form-group">
				    <label>Title</label>
				    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $data['title']; ?>" maxlength="255" required>
				    
				  </div>
				  <div class="form-group">
				    <label>Body</label>
				    <textarea id="body<?php echo $data['id']; ?>" class="form-control" name="body" placeholder="Add Body" required><?php echo $data['body']; ?></textarea>
				    <script type="text/javascript">
      					CKEDITOR.replace( 'body<?php echo $data['id'];?>' );
      					CKEDITOR.add
               			    </script>  

				  </div>
				  <div class="form-group">
				  	<input type="url" class="form-control" name="url" value="https://www.youtube.com/watch?v=<?=$data['url']?>" placeholder="example: https://www.youtube.com/watch?v=rz5oUbIv0ow" autofocus required maxlength="255">
				  </div>
				  <div class="form-group">
				    <label>Image</label>
				    <font size="1"><br>(for best views, upload a landscape oriented photo. Make sure it is less than 1024 x 1024 pixels and no bigger than 2MB)</font>
				    <label>Image</label>
				    <input type="hidden" name="image" value="<?php echo $data['image'];?>">
				    <input type="file" name="userfile"  size="20" />
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>