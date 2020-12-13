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
									<a href="<?=base_url('assets2/');?>#" class="fh5co-sub-ddown">Jenis</a>
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
			
				<div class="desc animate-box">
					<h2>Wisata Desa Sekumpul</h2>
					<!-- <span>Lovely Crafted by <a href="<?=base_url('assets2/');?>http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span> -->
				</div>
			</div>

		</div>


		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
				<?php foreach ($wisata as $val) {?>
				<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="<?=base_url('assets2/images/wisata/'.$val['gambar']);?>"  alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
							<h2><?=$val['nama_wisata'];?></h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
								
							</div>
						</a>
					</div>
					<?php } ?>
					
					<?php foreach ($tb_hotel as $val) { ?>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="<?=base_url('assets2/images/hotel/'.$val['gambar']);?>" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
							<h2><?=$val['nama_hotel'];?></h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>
				
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 fh5co-news">
						<h3>News</h3>
						<ul>
							<li>
								<a href="<?=site_url('Frontend/air_terjun');?>">
									<span class="fh5co-date">03-11-2020</span>
									<h3>Air Terjun Sekumpul</h3>
									<p>Objek wisata air terjun Sekumpul saat ini adalah salah satu tempat rekreasi air terjun yang paling populer di wilayah Kabupaten Buleleleng. 
									Pesona indah alam air terjun menjadi destinasi wisata selain pantai yang banyak dicari wisatawan saat liburan di pulau Dewata Bali.</p>
								</a>
							</li>
							<li>
								<a href="<?=site_url('Frontend/hotel1');?>">
									<span class="fh5co-date">03-11-2020</span>
									<h3>The Sekumpul Accommodation</h3>
									<p>Terletak di Singaraja, 800 meter dari Air Terjun Sekumpul dan 21 km dari Air Terjun Gitgit, Sekumpul Accommodation menyediakan akomodasi dengan taman, Wi-Fi gratis, dan tempat parkir pribadi gratis untuk Anda yang berkendara. 
									Menawarkan teras, akomodasi ini berjarak 27 km dari Air Terjun Aling Aling.</p>
								</a>
							</li>
							
						</ul>
					</div>
					<div class="col-md-6 fh5co-testimonial">
						<img src="<?=base_url('assets2/');?>images/img.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive mb20">
						<img src="<?=base_url('assets2/');?>images/hotel/hotel2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
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

