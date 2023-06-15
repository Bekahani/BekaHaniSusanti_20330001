<?php 
session_start();
require 'koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pengelolaan Kas OP2N</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo.jpg">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/logo/logo.jpg" alt="" /></a>
					<h2>OP2N<span class="min-dtn"></span></h2>
				</div>
				<div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="https://www.facebook.com/beka.h.susanti?mibextid=ZbWKwL"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="https://twitter.com/bbekkahnt?t=Fk0GRBTkKFiLprsqJVMmmA&s=09"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/@beccahans"><i class="icon nalika-youtube"></i></a></li>
                    </ul>
                </div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="home 2.php">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Home</span>
								</a>
                        </li>
                        <li>
                            <a href="?umum=masuk"><i class="icon nalika-download icon-wrap"></i> <span class="mini-click-non">Kas Masuk</span></a>
                        </li>
                        <li>
                            <a href="?umum=keluar" aria-expanded="false"><i class="icon nalika-upload icon-wrap"></i> <span class="mini-click-non">Kas Keluar</span></a>
                        </li>
                        <li>
                            <a href="?umum=rekap" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Rekapitulasi Kas</span></a>
                        </li>
                        <li>
                            <a href="bagan.php" aria-expanded="false"><i class="icon nalika-user icon-wrap"></i> <span class="mini-click-non">Struktur Organisasi</span></a>
                        </li>
                        <li>
                            <a href="kontak.php" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">Kontak</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    
                                
                                                <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">Date :<?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y'); ?> &nbsp; &nbsp;
                                                    <a href="logout.php" class="btn btn-danger square-btn-adjust" title="Logout">Logout</a>
                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Menu end -->
                            <div class="breadcome-list">                
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">

                    <?php

                        $umum = $_GET['umum'];
                
                        if($umum == "masuk") {
                            if($aksi =="") {
                                include 'umum/kas_masuk/masuk.php';
                            } if($aksi =="hapus") {
                                include 'umum/kas_masuk/hapus.php';
                            }
                        } elseif ($umum == "keluar") {
                            if($aksi =="") {
                                include 'umum/kas_keluar/keluar.php';
                            } if($aksi =="hapus") {
                               include 'umum/kas_keluar/hapus.php';
                            }
                        } elseif ($umum == "rekap") {
                            if($aksi =="") {
                                include 'umum/rekap/rekap.php';
                            }
                        } elseif ($umum == "user") {
                            if($aksi =="") {
                                include 'umum/user/user.php';
                            }
                        } elseif ($umum == "") {                           
                                include 'dashboard.php';
                            }                       
                     ?>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
            

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>