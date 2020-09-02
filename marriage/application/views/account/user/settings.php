<?php $this->load->view('account/user/userLayout/header'); ?>

<div class="d-flex">
  <div class="special">
    <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800 mt-5">
      <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="profile">Profile</a></div>
      <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="mymatches">My Matches</a></div>
      <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="settings">Settings</a></div>
      <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="logout">Log out</a></div>
    </nav>
  </div>
  <div class="container p-3">
    <a href="delete" class="form-control">Delete my Account</a>
  </div>
</div>

<?php $this->load->view('account/user/userLayout/footer'); ?>
