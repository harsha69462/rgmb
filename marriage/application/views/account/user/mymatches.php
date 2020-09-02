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
  <div class="container pt-2">
    <?php for ($i=0; $i < count($matches); $i++): ?>
    <div class="row detail d-flex">
        <div class="p-0" style="width:250px;">
          <?php if(!empty($matches[$i]['propic'])): ?>
            <img src="<?php echo base_url("assets/upload/".$matches[$i]['propic']); ?>" alt="">
          <?php else: ?>
          <img src="<?php echo base_url("assets/images/userprofile/defaultpropic.jpg"); ?>" alt="">
        <?php endif; ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
          <!-- <span class="discount-holder"><span>Cheapest</span></span> -->
          <div class="detail-box">
            <h3><?php echo $matches[$i]['fullname'] ?></h3>
            <p>
              <div class="offer">
                  <span class="offer-text">Phone No:</span>
                  <span class="offer-text-2"><?php echo $matches[$i]['phone'] ?></span>
              </div>
              <div class="">
                <h6><strong><i class="fa fa-clock"></i> Email ID: </strong> <?php echo $matches[$i]['email'] ?> </h6>
              </div>
            </p>
            <ul>
              <li><strong>Age : </strong> <?php echo $matches[$i]['age'] ?></li>
              <li><strong>Cast : </strong><?php echo $matches[$i]['cast'] ?> </li>
              <li><strong>Religion : </strong> <?php echo $matches[$i]['religion'] ?></li>
              <li><strong>User ID : </strong> <?php echo $matches[$i]['userid'] ?></li>
            </ul>
            <p><strong><i class="fas fa-book"></i> Eligibilty: </strong>Lorem ipsum dummy Lorem ipsum dummy <a href="#" data-toggle="collapse" data-target="<?php echo "#userdata".$i; ?>">show more</a></p>

          </div>
        </div>
        <div class="eligibal collapse" id="<?php echo "userdata".$i; ?>">
          <div class="arrow-up"></div>
          <p><strong><i class="fas fa-book">Occupation : </i></strong><?php echo $matches[$i]['occupation'];?>
          </p>
          <p><strong><i class="fas fa-graduation-cap"></i> Address : </strong> <?php echo $matches[$i]['address']; ?></p>
        </div>
      </div>
    <?php endfor; ?>
  </div>



</div>

<?php $this->load->view('account/user/userLayout/footer'); ?>
