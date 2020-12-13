<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wisata Desa Sekumpul</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?=base_url('assets2/');?>favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url('assets2/');?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url('assets2/');?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url('assets2/');?>css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?=base_url('assets2/');?>css/superfish.css">

	<link rel="stylesheet" href="<?=base_url('assets2/');?>css/style.css">


	<!-- Modernizr JS -->
	<script src="<?=base_url('assets2/');?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="<?=base_url('assets2/');?>#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="<?=base_url('assets2/');?>index.html">Sekumpul</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active">
									<a href="<?=site_url('Frontend/index');?>">Home</a>
								</li>
								<li>
									<a href="<?=base_url('assets2/');?>listing.html" class="fh5co-sub-ddown">Jenis</a>
									<ul class="fh5co-sub-menu">
                                    <li><a href="<?=site_url('Frontend/air_terjun');?>" target="_blank">Wisata</a></li>
										<li><a href="<?=site_url('Frontend/hotel1');?>" target="_blank">Hotel</a></li>

									</ul>
								</li>
                                <li><a href="<?=site_url('Frontend/about');?>">About Us</a></li>
								
                                <li><a href="<?=site_url('Frontend/kontak');?>">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url("assets2/images/wisata/bg.jpg");?>);">
			<?php foreach ($tb_hotel as $val) ?>
				<div class="desc animate-box">
					<h2><?=$val['nama_hotel'];?></h2>
					<!-- <span>Lovely Crafted by <a href="<?=base_url('assets2/');?>http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span> -->
				</div>
			</div>

		</div>


		<div id="fh5co-contact"  class="fh5co-section animate-box">
		<?php foreach ($tb_hotel as $val) ?>
	<div class="container">
	<img src="<?=base_url('assets2/images/hotel/'.$val['gambar']);?>" width="100%" height="100%" style="display: block; margin: auto;" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive mb20">
			<div class="row">
				<div class="col-lg-10">
					<br>
					<h3 class="section-title"><?=$val['nama_hotel'];?></h3>
					<p  style="text-align: justify;"><?=$val['keterangan'];?></p>
				</div>
				
                </div>
        </div>
    </div>
                   

				</div>
			</div>
		</div>


		
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="<?=base_url('assets2/');?>#"><i class="icon-twitter2"></i></a>
								<a href="<?=base_url('assets2/');?>#"><i class="icon-facebook2"></i></a>
								<a href="<?=base_url('assets2/');?>#"><i class="icon-instagram"></i></a>
								<a href="<?=base_url('assets2/');?>#"><i class="icon-dribbble2"></i></a>
								<a href="<?=base_url('assets2/');?>#"><i class="icon-youtube"></i></a>
							</p>
							<p>Desa Sekumpul, Kecamatan Sawan, Kabupaten Buleleng, Provinsi Bali </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?=base_url('assets2/');?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url('assets2/');?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url('assets2/');?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url('assets2/');?>js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="<?=base_url('assets2/');?>js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?=base_url('assets2/');?>js/hoverIntent.js"></script>
	<script src="<?=base_url('assets2/');?>js/superfish.js"></script>

	<!-- Main JS -->
	<script src="<?=base_url('assets2/');?>js/main.js"></script>

	</body>
</html>

