<?php
$link_1 = strtolower($this->uri->segment(1));
$ceks = $this->session->userdata('username_member@wp');
?>
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title><?php echo $judul_web; ?></title>
		<base href="<?php echo base_url() ?>"/>

		<!-- <link rel="shortcut icon" href="img/logo1.jpg"> -->
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Navigation menu -->
		<link rel="stylesheet" href="assets/web/css/ddlevelsmenu-base.css">
		<link rel="stylesheet" href="assets/web/css/ddlevelsmenu-topbar.css">
		<!-- PrettyPhoto -->
		<link rel="stylesheet" href="assets/web/css/prettyPhoto.css">
		<!-- cSlider -->
		<link rel="stylesheet" href="assets/web/css/slider.css">
		<!-- Font awesome CSS -->
		<link href="assets/web/css/font-awesome.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="assets/web/css/style.css" rel="stylesheet">

		<!-- Favicon -->
		<link rel="shortcut icon" href="#">

		<script src="assets/js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox.css">
		<script type="text/javascript" src="assets/fancybox/jquery.fancybox.js"></script>

		<style>
		.gallery {
			background-color: #00008B;
			padding: 5px;
			padding-top: 10px;
		}
		.gallery img {
		    width: 50%;
		    height: 120px;
		    border-radius: 5px;
		    cursor: pointer;
		    transition: .3s;
				margin-bottom: 5px;
		}
		.gallery a {
				text-decoration: none;
		}
		</style>
	</head>

	<body>

  <!-- Sliding panel starts-->

  

  <!-- Sliding panel ends-->

  <!-- Header starts -->

  <header class="">
    <div class="container ">
      <div class="row navi-right">

        <div class="col-md-3 col-sm-4">

          <!-- Logo starts -->

          <div class="logo ">

						<a href="<?php echo base_url(); ?>">
            <div class="logo-image">
              <!-- Image link -->
								<p>PetshopKu</p>
							</div>
						</a>


            <div class="clearfix"></div>

          </div>

          <!-- Logo ends -->

        </div>

        <div class="col-md-9 col-sm-8">

          <!-- Navbar starts -->

          <div class="navi pull-right  ">
            <div id="ddtopmenubar" class="mattblackmenu">
              <!-- Main navigation -->
              <!-- Use the background color class in anchor tag for colorful menu -->
              <ul>

                <li>
									<a href="<?php echo base_url(); ?>" class="bblack">Home</a>
								</li>

                <li>
									<a href="about" class="bblack">About</a>
                </li>
                <li>
								<a href="adopt" class="bblack" role="button">Open Adopt</a>
                </li>



                <li>
									<a href="help" class="bblack">Help</a>
								</li>

                

								<li>
									<?php
									if ($ceks) {?>
										<a href="member" class="bblack">Member</a>
									<?php
									}else{ ?>
										<a href="login" class="bblack">Login</a>
									<?php
									} ?>
								</li>

								<li>
									<?php
									if ($ceks) {?>
										<a href="logout" class="bblack" onclick="return confirm('Anda yakin?')"> Logout</a>
									<?php
									}else{ ?>
										<a href="register" class="bblack">Register</a>
									<?php
									} ?>
								</li>

              </ul>
            </div>
          </div>

          <div class="navis"></div>

          <!-- Navbar ends -->

          <div class="clearfix"></div>

        </div>

      </div>
    </div>
  </header>

  <div class="clearfix"></div>

  <!-- Header ends -->
