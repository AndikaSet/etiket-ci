<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>DAMRI Ticketing</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<style type="text/css">
		.combined {
		-webkit-text-stroke: 1px black;
		color: white;
		text-shadow:
		2px  2px 0 #000,
		-1px -1px 0 #000,
		1px -1px 0 #000,
		-1px  1px 0 #000,
		1px  1px 0 #000;
		}
		.border-black{
		  color: blue;
		  /*border white with light shadow*/
		  text-shadow: 
		     2px   0  0   #000, 
		    -2px   0  0   #000, 
		     0    2px 0   #000, 
		     0   -2px 0   #000, 
		     1px  1px 0   #000, 
		    -1px -1px 0   #000, 
		     1px -1px 0   #000, 
		    -1px  1px 0   #000,
		     1px  1px 5px #000;
		}
		</style>
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<!-- start banner Area -->
		<div class="jumbotron jumbotron-fluid" style="background-image: url(assets/frontend/img/mt1.jpg);" >
		<section class="banner-area relative section-gap relative" id="home">
		<div class="jumbotron jumbotron-fluid" style="background-image: url(assets/frontend/img/mt4.jpg);" > 
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-end">
				<div class="jumbotron jumbotron-fluid" style="background-image: url(assets/frontend/img/mt1.jpg);" >
					<div class="banner-content col-lg-7 col-md-12">
						<h4  class="combined">Menjelajah pelosok negeri bersama Damri</h4>
							<h2 class="combined" >
							DAMRI Ticketing dapat diakses kapanpun, dimanapun anda berada, karena kualitas terbaik hanya untuk anda.				
							</h2>
						<p class="text-white" >
							Sekarang cari tiket Damri semakin mudah. Booking Cepat. Bebas Pilih Kursi. Customer Service 24/7. Semua Kelas dan Rute.
						</p>
						<a href="<?php echo base_url() ?>tiket" class="primary-btn header-btn text-uppercase">Cari Tiket</a>
					</div>
				</div>
			</div>
		</section>
		<div class="jumbotron jumbotron-fluid" style="background-image: url(assets/frontend/img/mt1.jpg);" >
		<section class="service-area section-gap relative">
		<div class="jumbotron jumbotron-fluid" style="background-image: url(assets/frontend/img/mt4.jpg);" >
			<div class="overlay overlay-bg"></div>
			<div class="container"><div class="jumbotron jumbotron-fluid" style="background-image: url(assets/frontend/img/mt1.jpg);" >
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>CARA PEMESANAN TIKET</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/a1.png" width="100" height="100" alt="">
							<h4>Pilih rincian perjalanan
							</h4>
							<p>
								Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik 'Cari'
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/a3.png" width="100" height="100" alt="">
							<h4>Pilih bis dan tempat duduk anda</h4>
							<p>
								Pilih bis, tempat duduk, tempat keberangkatan, tujuan, isi rincian penumpang dan klik 'Pembayaran'
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/a2.png" width="100" height="100" alt="">
							<h4>Cara Pembayaran yang Mudah</h4>
							<p>
								Pembayaran dapat dilakukan melalui transfer ATM, Internet banking.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section><div class="jumbotron jumbotron-fluid" style="background-image: url(assets/frontend/img/mt1.jpg);" >
		<!-- End service Area -->
		<!-- End feature Area -->
		<!-- End Generic Start -->
		<!-- start footer Area -->
		<?php $this->load->view('frontend/include/base_footer'); ?>
		<!-- js -->
		<?php $this->load->view('frontend/include/base_js'); ?>
	</body>
</html>