<?php $this->load->view('admin/adminlayout/header'); ?>

<div class="d-flex">
  <div class="special">
      <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800 mt-5">
        <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="dashboard">Profiles change</a></div>
        <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="matches">Match</a></div>
        <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="newsUpdate">News</a></div>
        <div class="bg-link pr-3 linkhover"><a class="nav-link p-4 bg-link color-white font-weight-bold" href="logout">Log out</a></div>
      </nav>
  </div>
  <div class="container bg-light">
    <form class="form-group p-2 pt-4" action="" method="post">
      <div class="row p-2">
        <div class="col-md-4">
          <label for="title font-weight-bold"><i>News Title :</i></label>
          <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="col-md-4">
          <label for="date font-weight-bold"> <i>Date :</i> </label>
          <input type="date" id="date" name="date" class="form-control"/>
        </div>
      </div>
      <div class="row p-4">
        <label for="news font-weight-bold"><i>Latest events Updates :</i></label>
        <textarea id="news" name="name" class="form-control" placeholder="Share content here..."></textarea>
      </div>
      <div class="p-2 mt-2 text-center">
        <input type="submit" name="btn" class="btn w-25 bg-danger text-white" value="Update news">
      </div>
    </form>
  </div>
</div>


<?php $this->load->view('admin/adminlayout/footer'); ?>
