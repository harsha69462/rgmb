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
  <div class="container pt-3">
    <?php for ($i=0; $i < count($mdarray); $i++):?>
      <div class="row detail">
          <div class="p-0" style="width:250px;">
            <?php if(!empty($mdarray[$i]['propic'])): ?>
            <img src="<?php echo base_url("assets/upload/".$mdarray[$i]['propic']); ?>" alt="">
          <?php else: ?>
            <img src="<?php echo base_url("assets/images/userprofile/defaultpropic.jpg"); ?>" alt="">
          <?php endif; ?>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
            <!-- <span class="discount-holder"><span>Cheapest</span></span> -->
            <div class="detail-box">
              <h3><?php echo $mdarray[$i]['fullname'] ?></h3>
              <p>
                <div class="offer">
                    <span class="offer-text">Phone No:</span>
                    <span class="offer-text-2"><?php echo $mdarray[$i]['phone'] ?></span>
                </div>
                <div class="">
                  <h6><strong><i class="fa fa-clock"></i> Email ID: </strong> <?php echo $mdarray[$i]['email'] ?> </h6>
                </div>
              </p>
              <ul>
                <li><strong>Age : </strong> <?php echo $mdarray[$i]['age'] ?></li>
                <li><strong>Cast : </strong><?php echo $mdarray[$i]['cast'] ?> </li>
                <li><strong>Religion : </strong> <?php echo $mdarray[$i]['religion'] ?></li>
                <li><strong>User ID : </strong> <?php echo $mdarray[$i]['userid'] ?></li>
              </ul>
              <p><strong><i class="fas fa-book"></i> Eligibilty: </strong>Lorem ipsum dummy Lorem ipsum dummy <a href="#" data-toggle="collapse" data-target="<?php echo "#userdata".$i; ?>">show more</a></p>

            </div>
          </div>
          <div class="eligibal collapse" id="<?php echo "userdata".$i; ?>">
            <div class="arrow-up"></div>
            <p><strong><i class="fas fa-book">Occupation : </i></strong><?php echo $mdarray[$i]['occupation'];?>
            </p>
            <p><strong><i class="fas fa-graduation-cap"></i> Address : </strong> <?php echo $mdarray[$i]['address']; ?></p>
          </div>
        </div>
    <?php endfor; ?>
  </div>
</div>

<?php $this->load->view('admin/adminlayout/footer'); ?>
