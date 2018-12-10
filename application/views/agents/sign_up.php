    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Sign<span> up</span> Now !</div>
    </div>
    <br>
    <div class="right">
        <p><font style="color:red";><?php echo validation_errors(); ?></font></p>
        <?php if($this->session->flashdata('user_signup')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_signup').'<p>'; ?>
      <?php endif; ?>
        </div>
    <div class="login">
        <?php echo form_open('agents/validation_signup'); ?>
      
      	<input type="text" placeholder="Username" name="username" ><br>
        <input type="text"  placeholder="Name" name="name" ><br>
        <input type="text"  placeholder="Referral Name" name="referral_name" required><br>
        <input type="password"  placeholder="Password" name="password" ><br>
        <input type="password"  placeholder="Retype-password" name="repass" ><br>
        <input type="text"  placeholder="Agent Number" name="polis_no" ><br>
        <input type="email"  placeholder="Email" name="email" ><br>
        <input type="text"  placeholder="Phone" name="phone" ><br>
        <input type="submit" value="Submit"></input>
      </form>
      <p><a href="http://bisnis.financialsecurity.id/signin">Ready to sign in?</a></p>
     
      
    </div>