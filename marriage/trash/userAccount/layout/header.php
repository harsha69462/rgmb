<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-grid.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-reboot.min.css"); ?>">

  <script src="<?php echo base_url('assets/js/jquery.js'); ?>" charset="utf-8"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>" charset="utf-8"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>" charset="utf-8"></script>
  <style media="screen">
    .specialbg{
      background-image: linear-gradient(#0f2027,#203a43,#305b6e);
    }
    .place-content{
      place-content: space-between;
    }
    .opacity-0 {
      opacity:0!important;
    }
    .opacity-1 {
      opacity:0.2!important;
    }
    .opacity-2 {
      opacity:0.4!important;
    }
    .opacity-3 {
      opacity:0.6!important;
    }
    .opacity-4 {
      opacity:.8!important;
    }
    .opacity-5 {
      opacity:1!important;
    }

  </style>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top specialbg p-3">
      <div class="d-flex">
        <a class="navbar-brand" href="#">Logo</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="d-flex">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="#">Login</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Register</a> </li>
        </ul>
      </div>
    </nav>
