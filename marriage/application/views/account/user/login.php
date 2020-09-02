<?php $this->load->view('layout/header'); ?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="<?php echo base_url(''); ?>"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Login</li>
     </ul>
   </div>
   <!---728x90--->

   <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form method="post" action="">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="email">Email</label>
	      <input type="email" id="email" name="email" value="" size="60" maxlength="60" class="form-text required"/>
        <span class="text-danger"></span>
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="password">Password</label>
	      <input type="password" id="password" name="password" size="60" maxlength="128" class="form-text required" />
        <span class="text-danger"></span>
	    </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Login" class="btn_1 submit">
	    </div>

        <?php if(isset($_SESSION['wrong'])): ?>
          <div class="alert alert-danger">
              <?php echo $_SESSION['wrong']; ?>
          </div>
        <?php endif; ?>

	   </form>
	  </div>
	  <div class="col-sm-6">
	    <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		</ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
   <!---728x90--->

  </div>
</div>
<?php $this->load->view('layout/footer'); ?>
