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
  <div class="container mt-5">
    <div class="header">
      <div class="text-right">
        <h1>Matches</h1><br>
        <div class="card mb-5">

        </div>
      </div>
    </div>
    <div class="card p-4 bg-light">
      <form class="form-group" action="exchange" method="post" id="selectform">
      <div class="row">
        <div class="col-md-4">
          <h3>Male's profiles</h3>

            <select class="form-control" name="malear" id="male-select">
              <option value="">--SELECT--</option>
              <?php for ($i=0; $i <count($male) ; $i++): ?>
                <option value="<?php echo $male[$i]['email']; ?>"><?php echo $male[$i]['fullname']; ?>
                </option>
              <?php endfor; ?>
            </select>
        </div>
        <div class="col-md-4 text-center">
          <input type="submit" name="button" value="Match Profiles" class="btn btn-success pr-3 pl-3 font-weight-bold">
        </div>
        <div class="col-md-4">
          <h3>Female's profiles</h3>
          <select class="form-control" name="femalear" id="female-select">
            <option>--SELECT--</option>
            <?php for ($i=0; $i <count($female) ; $i++): ?>
              <option value="<?php echo $female[$i]['email'] ?>"><?php echo $female[$i]['fullname']; ?></option>
            <?php endfor; ?>
          </select>
        </div>
      </div>
    </form>
    </div>

  </div>
</div>
<?php $this->load->view('admin/adminlayout/footer'); ?>
