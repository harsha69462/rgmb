<?php $this->load->view('userAccount/layout/header');  ?>
<div class="d-flex" style="place-content: space-between;">
  <div id="carouselExampleIndicators" class="carousel slide w-50" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item bg-dark active">
        <img class="d-block w-100 img-fluid opacity-3 h-50" src="<?php echo base_url('assets/images/cimg1.jpg'); ?>" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Image one</h5>
          <p>this is the content of image one</p>
        </div>
      </div>
      <div class="carousel-item bg-dark">
        <img class="d-block w-100 img-fluid opacity-3 h-50" src="<?php echo base_url('assets/images/cimg2.jpg'); ?>" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Image two</h5>
          <p>this is the content of image two</p>
        </div>
      </div>
      <div class="carousel-item bg-dark">
        <img class="d-block w-100 img-fluid opacity-3 h-50" src="<?php echo base_url('assets/images/cimg3.jpg'); ?>" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Image three</h5>
          <p>this is the content of image three</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="col-md-6">
    <div class="card p-4">
      <div class="container mb-4">
        <h3>Login</h3>
      </div>
      <div class="">
        <form class="form-group" action="" method="post">
          <div class="m-2">
            <input type="text" name="fname" value="Full Name" class="form-control"/>
          </div>
          <div class="m-2">
            <input type="email" name="email" value="Enter email here..." class="form-control"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php $this->load->view('userAccount/layout/footer'); ?>
