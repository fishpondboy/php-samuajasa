<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="max-age=604800" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

	<title>Samua Jasa</title>

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>

	<!-- Bootstrap4 files-->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

	<!-- Font awesome 5 -->
	<link href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

	<!-- custom style -->
	<link href="<?php echo base_url(); ?>assets/css/ui.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

	<!-- custom javascript -->
	<script src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>

	<script type="text/javascript">
		/// some script

		// jquery ready start
		$(document).ready(function() {
			// jQuery code

		});
		// jquery end
	</script>
</head>

<body>
	<header class="section-header">
		<nav class="navbar navbar-top navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo base_url(); ?>"> Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item"><a class="nav-link" href="#"> Product</a></li>
					</ul>
				</div>
			</div> <!-- container //  -->
		</nav>
		<section class="header-main shadow">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-sm-4">
						<div class="brand-wrap">
							<img class="logo" src="<?php echo base_url(); ?>assets/images/samuajasa.png">
						</div> <!-- brand-wrap.// -->
					</div>
					<div class="col-lg-6 col-sm-8">
						<form action="<?= base_url(); ?>index.php/C_Search/index" class="search-wrap" method="post">
							<div class="input-group w-100">
								<input type="text" class="form-control" style="width:55%;" placeholder="Search" name="keyword">
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>
						</form> <!-- search-wrap .end// -->
					</div> <!-- col.// -->
				</div> <!-- row.// -->
			</div> <!-- container.// -->
		</section> <!-- header-main .// -->
	</header> <!-- section-header.// -->
	<!-- ========================= SECTION INTRO END// ========================= -->
	<!-- ========================= SECTION INTRO END// ========================= -->

	<!-- Floating Button Start -->
	<div class="float">
		<a class="float" id="menu-share">
			<i class="fa fa-phone my-float"></i>
		</a>
		<ul>
			<li><a href="#" id="menu-share">
					<i class="fa fa-whatsapp my-float"></i>
				</a></li>
			<li><a href="#" id="menu-share">
					<i class="fa fa-whatsapp my-float"></i>
				</a></li>
			<li><a href="#" id="menu-share">
					<i class="fa fa-whatsapp my-float"></i>
				</a></li>
		</ul>
	</div>
	<style>
		/* * {
            padding: 0;
            margin: 0;
        } */

		.label-container {
			position: fixed;
			bottom: 48px;
			right: 105px;
			display: table;
			visibility: hidden;
		}

		.label-text {
			color: #FFF;
			background: rgba(51, 51, 51, 0.5);
			display: table-cell;
			vertical-align: middle;
			padding: 10px;
			border-radius: 3px;
		}

		.label-arrow {
			display: table-cell;
			vertical-align: middle;
			color: #333;
			opacity: 0.5;
		}

		.float {
			position: fixed;
			width: 50px;
			height: 50px;
			bottom: 30px;
			right: 30px;
			background-color: #140041;
			color: #FFF;
			border-radius: 50px;
			text-align: center;
			box-shadow: 1px 1px 2px #000;
			max-width: 100%;
			z-index: 1000;
			animation: bot-to-top 2s ease-out;
		}

		.float ul {
			position: fixed;
			right: 30px;
			padding-bottom: 20px;
			bottom: 50px;
			max-width: 100%;
			z-index: 100;
		}

		.float ul li {
			list-style: none;
			margin-bottom: 10px;
		}

		.float ul li a {
			background-color: #ff3cc5;
			color: #FFF;
			border-radius: 50px;
			text-align: center;
			box-shadow: 1px 1px 2px #000;
			width: 50px;
			height: 50px;
			display: block;
			max-width: 100%;
		}


		.float ul:hover {
			visibility: visible !important;
			opacity: 1 !important;
		}

		.my-float {
			font-size: 20px;
			margin-top: 15px;
		}


		a#menu-share+ul {
			visibility: hidden;

		}

		a#menu-share:hover+ul {
			visibility: visible;
			animation: scale-in 0.5s;
		}

		a#menu-share i {
			animation: rotate-in 0.5s;
		}

		a#menu-share:hover>i {
			animation: rotate-out 0.5s;
		}


		@keyframes bot-to-top {
			0% {
				bottom: -40px
			}

			50% {
				bottom: 40px
			}
		}

		@keyframes scale-in {
			from {
				transform: scale(0);
				opacity: 0;
			}

			to {
				transform: scale(1);
				opacity: 1;
			}
		}



		@keyframes rotate-in {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(360deg);
			}
		}

		@keyframes rotate-out {
			from {
				transform: rotate(360deg);
			}

			to {
				transform: rotate(0deg);
			}
		}
	</style>
	<!-- Floating button End -->
	<!-- ========================= SECTION CONTENT ========================= -->
	<section class="section-content bg padding-y">
		<div class="container">

			<div class="row">
				<aside class="col-sm-3">
					<div class="card card-filter">
						<article class="card-group-item">
							<header class="card-header">
								<a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
									<i class="icon-action fa fa-chevron-down"></i>
									<h6 class="title">By Category</h6>
								</a>
							</header>
							<!-- collapse .// -->
						</article> <!-- card-group-item.// -->
				</aside> <!-- col.// -->
				<!-- sidebar -->
				<main class="col-sm-9">
					<?php foreach ($products as $t) { ?>
						<article class="card card-product">
							<div class="card-body">
								<div class="row">
									<aside class="col-sm-3">
										<div class="img-wrap"><img src="<?php echo base_url(); ?>assets/images/vendor/<?= $t->id_jasa ?>.jpg"></div>
									</aside> <!-- col.// -->
									<article class="col-sm-6">
										<h4 class="title"> <?= $t->jasa ?> </h4>
										<div class="rating-wrap  mb-2">
											<ul class="rating-stars">
												<li style="width:80%" class="stars-active">
													<i class="fa fa-star"></i> <i class="fa fa-star"></i>
													<i class="fa fa-star"></i> <i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</li>
												<li>
													<i class="fa fa-star"></i> <i class="fa fa-star"></i>
													<i class="fa fa-star"></i> <i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</li>
											</ul>
										</div> <!-- rating-wrap.// -->
										<p> <?= $t->ket ?></p>

									</article> <!-- col.// -->
									<aside class="col-sm-3 border-left">
										<div class="action-wrap">
											<div class="price-wrap h4">

											</div> <!-- info-price-detail // -->
											<br>
											<p>
												<a href="<?= base_url(); ?>index.php/C_Product/ID/<?= $t->id_jasa ?>" class="btn btn-primary"> Pesan Sekarang </a>
											</p>
										</div> <!-- action-wrap.// -->
									</aside> <!-- col.// -->
								</div> <!-- row.// -->
							</div> <!-- card-body .// -->
						</article> <!-- card product .// -->
					<?php } ?>
					<!-- Search not found Start -->
					<br>
					<hr />
					<br>
					<article class="card card-product">
						<div class="card-body">
							<div class="row">
								<aside class="col-sm-7">
									<h2>Tidak menemukan jasa yang anda cari?</h2>
									<p>Bantu Kami Dengan Memberi Saran Jasa Yang anda Cari</p>
								</aside>
								<br>
								<aside class="col-sm-5 border-left ">
									<form action="<?= base_url(); ?>index.php/C_Search/Saran" method="post">
										<div class="form-group">
											<label for="jasa">
												<h6>Nama Jasa:</h6>
											</label>
											<input type="text" class="form-control" id="saran" name="saran" required>
										</div>
										<div class="form-group">
											<label for="ket">
												<h6>Keterangan:</h6>
											</label>
											<textarea type="text" class="form-control" id="ketsaran" rows="3" name="ketsaran" required></textarea>
										</div>
										<button type="submit" class="btn btn-primary">Sarankan</button>
									</form>
								</aside> <!-- col.// -->
							</div> <!-- row.// -->
						</div> <!-- card-body .// -->
					</article>
					<!-- Search not found End -->
					<!-- Batas sidebar -->
				</main> <!-- col.// -->
			</div>

		</div> <!-- container .//  -->
	</section>
	<!-- ========================= SECTION CONTENT END// ========================= -->

	<!-- ========================= FOOTER ========================= -->
	<footer class="section-footer" style="background-color:#1E324E;">
		<div class="container">
			<section class="footer-top padding-top">
				<div class="row">
					<aside class="col-sm-3 col-md-3 white">
						<h5 class="title">Customer Services</h5>
						<ul class="list-unstyled">
							<li> <a href="#">Help center</a></li>
							<li> <a href="#">Money refund</a></li>
							<li> <a href="#">Terms and Policy</a></li>
							<li> <a href="#">Open dispute</a></li>
						</ul>
					</aside>
					<aside class="col-sm-3  col-md-3 white">
						<h5 class="title">My Account</h5>
						<ul class="list-unstyled">
							<li> <a href="#"> User Login </a></li>
							<li> <a href="#"> User register </a></li>
							<li> <a href="#"> Account Setting </a></li>
							<li> <a href="#"> My Orders </a></li>
							<li> <a href="#"> My Wishlist </a></li>
						</ul>
					</aside>
					<aside class="col-sm-3  col-md-3 white">
						<h5 class="title">About</h5>
						<ul class="list-unstyled">
							<li> <a href="#"> Our history </a></li>
							<li> <a href="#"> How to buy </a></li>
							<li> <a href="#"> Delivery and payment </a></li>
							<li> <a href="#"> Advertice </a></li>
							<li> <a href="#"> Partnership </a></li>
						</ul>
					</aside>
					<aside class="col-sm-3">
						<article class="white">
							<h5 class="title">Contacts</h5>
							<p>
								<strong>Phone: </strong> +123456789 <br>
								<strong>Fax:</strong> +123456789
							</p>

							<div class="btn-group white">
								<a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
								<a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
								<a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>
								<a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
							</div>
						</article>
					</aside>
				</div> <!-- row.// -->
				<br>
			</section>
			<section class="footer-bottom row border-top-white"></section>
			<div class="col-sm-6 text-right">
				<p class="text-sm-right text-white-50">
					Copyright &copy 2019 <br>
					<a href="index.html" class="text-white-50">Samuajasa.com</a>
				</p>
			</div>
			</section> <!-- //footer-top -->
		</div><!-- //container -->
	</footer>
	<!-- ========================= FOOTER END // ========================= -->


</body>

</html>