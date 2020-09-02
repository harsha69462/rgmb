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
  <div class="container mt-5">
    <div class="header">
      <div class="text-right">
        <h1 style="color: crimson;">My Profile</h1><br>
        <div class="card mb-4">

        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-3">
            <div class="text-center">
              <h3 class="">Profile picture</h3>
              <form class="" action="updatepropic" enctype="multipart/form-data" method="post">
                <?php if(isset($user[0]['propic']) and !empty($user[0]['propic'])): ?>
                <img src="<?php echo base_url("assets/upload/".$user[0]['propic']); ?>" class="img-fluid user-img" alt="profile pic">
              <?php else: ?>
                <img src="<?php echo base_url("assets/images/userprofile/defaultpropic.jpg"); ?>" class="img-fluid user-img" alt="profile pic">
              <?php endif; ?>
                <div class="row" style="place-content: space-around">
                  <label for="propic" class="bg-danger mt-3 pl-3 pr-3 p-2 text-white" id="propicip">Choose Pic</label>
                  <input id="propic" type="file" name="profile-photo"  >
                  <label for="profilesubmit" class="bg-danger mt-3 pl-3 pr-3 p-2 text-white" id="propicip">Change</label>
                  <input id="profilesubmit" type="submit" name="sub" value="Change" class="btn btn-danger"/>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=" card p-4 col-md-8">
          <div class="text-right">
            <a href="#"> <button type="button" class="btn btn-danger text-white" data-toggle="collapse" data-target="#updatecollapse">Edit Profile</button> </a>
          </div>
          <h3><i>Personal details  </i></h3>
          <div class="card border-0">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>:  <?php echo $user[0]['fullname'] ?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Email-Id</td>
                  <td>:  <?php echo $user[0]['email'] ?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td>: <?php echo $user[0]['address'] ?></td>
                </tr>
                <tr>
                  <td>contact info</td>
                  <td>:  <?php echo $user[0]['phone'] ?></td>
                </tr>
                <tr>
                  <td>Date of Birth</td>
                  <td>:  <?php echo $user[0]['dob'] ?></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>:  <?php echo $user[0]['gender'] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <h3><i>General details  </i></h3>
          <div class="card border-0">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <td>Occupation</td>
                  <td>:  <?php echo $user[0]['occupation'] ?></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Salary</td>
                  <td>:  <?php echo $user[0]['salary'] ?></td>
                </tr>
                <tr>
                  <td>Caste</td>
                  <td>: <?php echo $user[0]['cast'] ?></td>
                </tr>
                <tr>
                  <td>Religion</td>
                  <td>:  <?php echo $user[0]['religion'] ?></td>
                </tr>
                <tr>
                  <td>Hobbies</td>
                  <td>:  <?php echo $user[0]['hobbies'] ?></td>
                </tr>
                <tr>
                  <td>Requirements</td>
                  <td>:  <?php echo $user[0]['requirements'] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="container-fluid m-3" id="updatecollapse">
          <div class="card bg-light p-4">
            <form class="form-group" action="updateprofile" method="post">
              <div class="row mt-2 mb-2">
                <div class="col-md-6">
                  <input type="text" name="phone" class="form-control" placeholder="Update Phone no.">
                </div>
                <div class="col-md-6">
                  <input type="text" name="address" placeholder="Update Address" class="form-control">
                </div>
              </div>
              <div class="row mt-2 mb-2">
                <div class="col-md-6">
                  <input class="form-control" type="text" name="occupation"  placeholder="Update occupation">
                </div>
                <div class="col-md-6">
                  <input class="form-control" type="text" name="salary" placeholder="Update salary" >
                </div>
              </div>
              <div class="row mt-2 mb-2">
                <div class="col-md-6">
                  <input class="form-control" type="text" name="cast"  placeholder="Update Cast">
                </div>
                <div class="col-md-6">
                  <input class="form-control" type="text" name="religion" placeholder="Update Religion" >
                </div>
              </div>
              <div class="row mt-2 mb-2">
                <div class="col-md-6">
                  <input class="form-control" type="text" name="hobbies"  placeholder="Update Hobbies">
                </div>
                <div class="col-md-6">
                  <input class="form-control" type="text" name="requirement" placeholder="Update Requirements" >
                </div>
              </div>
              <div class="text-center">
                <input type="submit" value="Update" class="btn btn-danger">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('account/user/userLayout/footer'); ?>
