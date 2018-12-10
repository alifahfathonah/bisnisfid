
    	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Member<span> 	Area</span></div>
		</div>
		<br>
		<div class="login">
			<form name="loginForm" method="post" action="<?php echo base_url()?>agents/sign_in">
			<input type="text" placeholder="username" name="username" required><br>
			<input type="password" placeholder="password" name="password" required><br>
			<input type="submit" value="Signin">
			</form>
			<p><a href="signup">Sign up now!</a></p>
			<p><a href="forgot">Forgot password?</a></p>
			<p><?php echo validation_errors(); ?></p>
			<?php if($this->session->flashdata('user_valid')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_valid').'<p>'; ?>
      <?php endif; ?>
		</div>
		
		