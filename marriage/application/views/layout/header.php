
<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>RESHIM GATHI MARRIAGE BUREAU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="<?php echo base_url('assets/css/bootstrap-3.1.1.min.css'); ?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome----->
<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">
<!--font-Awesome----->

</head>
<body>

  <!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
  <div id="codefund"><!-- fallback content --></div>

  <meta name="robots" content="noindex">
  <body><link rel="stylesheet" href="<?php echo base_url('../../../assets/images/demobar_w3_4thDec2019.css'); ?>">
    <!-- ============================  Navigation Start =========================== -->


    <nav class="navbar navbar-inverse pad-12 bg-pink">
      <div class="container-fluid">
        <div class="navbar-header">

          <a class="navbar-brand margin-left" href="<?php echo base_url(''); ?>"><img class="img-small" src="<?php echo base_url('assets/images/logo.png'); ?>"/></a>
        </div>
        <ul class="nav navbar-nav font-strong">
          <li class="active"><a href="<?php echo base_url(''); ?>"><b>HOME</b></a></li>
          <li class="active"><a href="<?php echo base_url('aboutus'); ?>"><b>ABOUT US</b></a></li>
          <li class="active"><a href="<?php echo base_url('contactus'); ?>"><b>CONTACT US</b></a></li>
          <li class="active"><a href="<?php echo base_url('login'); ?>"><b>LOGIN</b></a></li>

        </ul>
      </div>
    </nav>

    <!-- <br/>
    <br/>
    <br/> -->


    <div class="container">
      <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="container">
      <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
          <?php echo $this->session->flashdata('error'); ?>
        </div>
      <?php endif; ?>
    </div>

    <!-- ============================  Navigation End ============================ -->
