<?php $this->load->view('layout/header'); ?>
<div class="grid_3">
  <div class="container">
    <div class="breadcrumb1">
      <ul>
        <a href="index-2.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
      </ul>
    </div>
    <!---728x90--->

    <div class="services">
      <div class="col-sm-6 login_left">
        <form method="post" action="">
          <div class="form-group">
            <label for="edit-name">Full Name <span class="form-required" style="color: red;" style="color: red;">*<?php echo form_error('fullname'); ?></span></label>
            <input type="text"  name="fullname" class="form-text required">
            <span class="text-danger"></span>

          </div>
          <div class="form-group">
            <label for="edit-name">Email <span class="form-required" style="color: red;" >*<?php echo form_error('email'); ?></span></label>
            <input type="email"  name="email" value=""  class="form-text required ">
            <span class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="edit-pass">Password <span class="form-required" style="color: red;">*<?php echo form_error('password'); ?></span></label>
            <input type="password"  name="password"  class="form-text required">
            <span class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="edit-pass">Confirm Password <span class="form-required" style="color: red;">*<?php echo form_error('confirm'); ?></span></label>
            <input type="password"  name="confirm"  class="form-text required ">
            <span class="text-danger"> </span>
          </div>

          <div class="form-group">
            <label for="edit-name">Phone <span class="form-required" style="color: red;">*<?php echo form_error('phone'); ?></span></label>
            <input type="text"  name="phone" value=""  class="form-text required ">
            <span class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="edit-name">Date Of Birth <span class="form-required" style="color: red;">*<?php echo form_error('dob'); ?></span></label>
            <input type="date"  name="dob" value=""  class="form-text required">
            <span class="text-danger"></span>
          </div>

          <div class="form-group form-group1">
            <label class="col-sm-7 control-lable" for="sex">Sex : <span>*<?php echo form_error('gender'); ?></span></label>

            <div class="col-sm-5">
              <div class="radios">
                <input type="radio" name="gender" value="male"> Male</input>
                <input type="radio" name="gender" value="female"> Female</input>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="form-actions">
            <input type="submit" value="Submit" class="btn_1 submit">
          </div>
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
