	<div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Forgot<span> Password</span></div>
    </div>
    <br>
    <div class="login">
    	<form name="loginForm" method="post" action="<?php echo base_url()?>agents/validation_forgot">
	  	<input type="email"  placeholder="Email" name="email" required><br>
	    <input type="submit" value="Submit"></input>
	   	</form>
	
	  	<p><a href="signin">Ready to sign in?</a></p>
	 	<p><?php echo validation_errors(); ?></p>
	</div>