<?php $this->load->view('layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/contact.css'); ?>">
<div class="container-fluid">

  <div class="row container mt-4">
    <div class="container col-md-4 text-center bg-light p-2" id="spl-bg">
      <img src="<?php echo base_url('assets/images/location.png'); ?>" id="myimg" class="img-fluid" alt="address">
      <h2 class="m-2 pb-4" >Address</h2>
      <p>5-46/A/2 Chandanager</p>
      <p>Hyderabad, Telangana</p>
    </div>
    <div class="container col-md-4 text-center p-2" id="bdr">
      <img src="<?php echo base_url('assets/images/contact.png'); ?>" id="myimg" class="img-fluid" alt="address">
      <h2 class="m-2 pb-4" >Phone Number</h2>
      <p>+918790411784</p>
      <p>+919182556911</p>
    </div>
    <div class="container col-md-4 text-center bg-light p-2" id="spl-bg">
      <img src="<?php echo base_url('assets/images/email.png'); ?>" id="myimg" class="img-fluid" alt="address">
      <h2 class="m-2 pb-4" >Email us at </h2>
      <p>rajivk2son@gmail.com</p>
      <p>srinivas.sharma1234@gmail.com</p>
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>
