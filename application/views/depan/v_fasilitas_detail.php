<!DOCTYPE html>
<html>
    
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php echo $title;?> | Bosowa School Makassar</title>

		<meta name="keywords" content="Menyajikan Informasi Seputar Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="description" content="Selamat Datang di Website Bosowa School Makassar, adalah Website Profil yang memberikan layanan informasi seputar kegiatan Sekolah, Asrama dan Pendaftaran Siswa Baru" />
		<meta name="author" content="One Bosowa School">
		<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">


		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>materialize/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url()?>template/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/theme-shop.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url()?>template/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-loading-overlay>
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="<?php echo base_url()?>">
										<img alt="Porto" width="75" height="75" data-sticky-width="100" data-sticky-height="50" data-sticky-top="55" src="<?php echo base_url()?>materialize/sekolah.png">
									</a>
								</div>
								<div class="header-logo">
									<a href="<?php echo base_url()?>">
										<img alt="Porto" width="75" height="75" data-sticky-width="100" data-sticky-height="50" data-sticky-top="55" src="<?php echo base_url()?>materialize/SAB.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<?php $this->load->view('depan/search')?>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<?php $this->load->view('depan/social')?>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<?php $this->load->view('depan/nav_menu')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Fasilitas Sekolah</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1><?php echo $title;?></h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="owl-theme">
								<div>
									<span class="img-thumbnail">
										<img alt="" style="width:300px; height:200px;" class="img-responsive" src="<?php echo base_url().'template/fasilitas/'.$foto?>">
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-9">

							<h2 class="mb-none"><?php echo $title?></h2>
							<h4>Fasilitas Sekolah</h4>
							<span><i class="fa fa-user"></i> Postingan : <?php echo $author;?> </span>
							<hr class="solid">
							<p><?php echo $desk;?></p>
							<a href="<?php echo base_url('fasilitas')?>" class="btn btn-lg btn-primary pull-right">Kembali</a>
						</div>
					</div>
				</div>
			</div>

			<?php $this->load->view('depan/v_footer');?>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url()?>template/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url()?>template/vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url()?>template/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url()?>template/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url()?>template/js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
	</body>
</html>
