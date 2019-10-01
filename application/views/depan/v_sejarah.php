<!DOCTYPE html>
<html>

	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Sejarah Sekolah | Bosowa School Makassar</title>

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
	<!-- Load Facebook SDK for JavaScript -->
			<div id="fb-root"></div>
				<script>
					window.fbAsyncInit = function() {
					FB.init({
						xfbml            : true,
						version          : 'v4.0'
					});
					};

					(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<!-- Your customer chat code -->
				<div class="fb-customerchat"
					attribution=setup_tool
					page_id="1778541652456050"
					theme_color="#0084ff"
					logged_in_greeting="Halo! ada yang bisa kami bantu? silahkan chat disini yah"
					logged_out_greeting="Halo! ada yang bisa kami bantu? silahkan chat disini yah">
			</div>
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<?php $this->load->view('depan/logo')?>
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
									<li><a href="#">Profil</a></li>
									<li class="active">Sejarah Sekolah</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Sejarah Sekolah</h1>
							</div>
						</div>
					</div>
				</section>

        <div class="container">

					<div class="row">
						<div class="col-lg-12">

							<h2>Sejarah <strong>Bosowa School Makassar</strong></h2>

							<div class="sticky-container">
								<div class="row">
									<?php $sh = $sejarah->row_array();?>
									<div class="col-lg-8">
										<?php echo $sh['isi_sejarah'];?>
									</div>
									<div class="col-lg-3">
										<div class="text-center" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 110}}">
											<img src="<?php echo base_url('materialize/sekolah.png')?>" class="img-fluid appear-animation" height="250px" width="250px" data-appear-animation="bounceIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

				<hr class="tall">

        <div class="container">
          <h2 align="right">Sejarah <strong>Sekolah Alam Bosowa</strong></h2>
					<div class="row">
						<?php $sh = $sejarahsab->row_array();?>
						<div class="col-lg-3">
							<aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
								<img src="<?php echo base_url('materialize/SAB.png')?>" class="img-fluid appear-animation" height="250px" width="250px" data-appear-animation="bounceIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
							</aside>
						</div>
						<div class="col-lg-8">
							<?php echo $sh['isi_sejarah'];?>
						</div>
					</div>

				</div>

        <hr class="tall">

				<div class="container">

					<div class="row center">
						<div class="col-md-12">
							<h2 class="mb-sm word-rotator-title">
								Bukan hanya kami yang
								<strong>
									<span class="word-rotate" data-plugin-options="{'delay': 3500, 'animDelay': 400}">
										<span class="word-rotate-items">
											<span>Semangat</span>
											<span>Senang</span>
										</span>
									</span>
								</strong>
								,Kami Bekerja dengan beberapa perusahaan
							</h2>
						</div>
					</div>

					<div class="row">
								<div class="col">
									<div class="content-grid mt-4 mb-4">
										<div class="row content-grid-row">
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="200px" src="<?php echo base_url()?>materialize/bosowaberlian.png" alt="">
											</div>
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="200px" src="<?php echo base_url()?>materialize/bosowasemen.png" alt="">
											</div>
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="200px" src="<?php echo base_url()?>materialize/bosowaedu.png" alt="">
											</div>
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="200px" src="<?php echo base_url()?>materialize/cambridge.png" alt="">
											</div>
										</div>
										<div class="row content-grid-row">
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="240px" src="<?php echo base_url()?>materialize/logo_school.png" alt="">
											</div>
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="200px" src="<?php echo base_url()?>materialize/logosab.png" alt="">
											</div>
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="200px" src="<?php echo base_url()?>materialize/poltek.png" alt="">
											</div>
											<div class="content-grid-item col-lg-3 text-center">
												<img class="img-fluid" height="73px" width="200px" src="<?php echo base_url()?>materialize/unibos.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
				</div>

				</div>


			<?php $this->load->view('depan/v_footer')?>
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
