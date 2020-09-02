<?php $this->load->view('admin/layout/header'); ?>
<div class="wrapper ">
  <div id="formContent">
    <!-- Tabs Titles -->


    <!-- Login Form -->
    <?php if(isset($_SESSION['wrong'])): ?>
      <div class="alert alert-danger">
          <?php echo $_SESSION['wrong']; ?>
      </div>
    <?php endif; ?>
    <div class="bg-danger p-4 rounded-top">
      <span class="p-4 m-4 text-white"> Login </span>
    </div>
    <div>
    <form class="pt-4 pb-4" action="" method="post">
      <input type="email" class="fadeIn second" name="email" placeholder="username">
      <input type="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth btn-danger btn pl-3 pr-3" value="login">
    </form>
  </div>

  </div>
</div>
<?php $this->load->view('admin/layout/header'); ?>
