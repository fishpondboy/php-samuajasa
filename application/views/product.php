<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Samua Jasa">

    <title>Samua Jasa || Product </title>

    <link rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="<?php echo base_url(); ?>assets/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="<?php echo base_url(); ?>assets/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="<?php echo base_url(); ?>assets/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/plugins/owlcarousel/owl.carousel.min.js"></script>

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

<body>
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
    <section class="section-content bg padding-y-sm">
        <div class="container">
            <nav class="mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Product"></a>Product </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-xl-10 col-md-9 col-sm-12">
                    <main class="card">
                        <div class="row no-gutters">
                            <aside class="col-sm-6 border-right">
                                <article class="gallery-wrap">
                                    <div class="img-big-wrap">
                                        <div> <a href="<?php echo base_url(); ?>assets/images/vendor/<?= $product->id_jasa ?>.jpg" data-fancybox=""><img src="<?php echo base_url(); ?>assets/images/vendor/<?= $product->id_jasa ?>.jpg"></a></div>
                                    </div> <!-- slider-product.// -->
                                    <!-- slider-nav.// -->
                                </article> <!-- gallery-wrap .end// -->
                            </aside>
                            <aside class="col-sm-6">
                                <article class="card-body">
                                    <!-- short-info-wrap -->
                                    <h3 class="title mb-3"><?= $product->jasa ?></h3>
                                    <div class="mb-3">
                                        <var class="price h3 text-warning">

                                        </var>
                                        <!-- <span>/per kg</span> -->
                                    </div> <!-- price-detail-wrap .// -->
                                    <dl>
                                        <dt>Description</dt>
                                        <dd>
                                            <p><?= $product->ket ?></p>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">Lama Pengerjaan</dt>
                                        <dd class="col-sm-9"><?= $product->eta_pengerjaan ?></dd>
                                    </dl>
                                    <div class="rating-wrap">

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
                                    <hr>
                                    <a href="<?= base_url(); ?>index.php/C_Order/ID/<?= $product->id_jasa ?>" class="btn  btn-warning"> Pesan Sekarang </a>
                                    <!-- short-info-wrap .// -->
                                </article> <!-- card-body.// -->
                            </aside> <!-- col.// -->
                        </div> <!-- row.// -->
                    </main> <!-- card.// -->

                    <!-- PRODUCT DETAIL -->
                    <article class="card mt-3">
                        <div class="card-body">
                            <h4>Detail overview</h4>

                        </div> <!-- card-body.// -->
                    </article> <!-- card.// -->
                    <!-- PRODUCT DETAIL .// -->
                </div> <!-- col // -->

            </div><!-- container // -->
    </section>
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
            <section class="footer-bottom row border-top-white fixed-bottom"></section>
            <div class="col-sm-6 text-right">
                <p class="text-sm-right text-white-50">
                    Copyright &copy 2019 <br>
                    <a href="index.html" class="text-white-50">Samuajasa.com</a>
                </p>
            </div>
            </section> <!-- //footer-top -->
        </div><!-- //container -->
    </footer>
</body>

</html>