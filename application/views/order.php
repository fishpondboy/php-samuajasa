<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Samua Jasa</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

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

    <!-- custom style -->
    <link href="<?php echo base_url(); ?>assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <!-- plugin: owl carousel  -->
    <link href="<?php echo base_url(); ?>assets/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- plugin: slickslider -->
    <link href="<?php echo base_url(); ?>assets/plugins/slickslider/slick.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/slickslider/slick-theme.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>assets/plugins/slickslider/slick.min.js"></script>

    <!-- custom style -->
    <link href="<?php echo base_url(); ?>assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <link href="<?php echo base_url(); ?>assets/css/formstyle.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
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
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>index.php/C_Search/index">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                </ul>
                </ul>
            </div>
        </nav>
    </div>

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

    <!-- ========================== SECTION FORM START ======================== -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <br />
                    <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> No Pesanan: <?= $id_pesan ?>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url(); ?>index.php/C_Order/Confirm" Method="post">
                            <div class="form-group">
                                <label for="name">Jenis Jasa</label>
                                <input type="text" class="form-control" name="jasa" aria-describedby="emailHelp" placeholder="<?= $order->jasa ?>" readonly>
                                <input type="text" class="form-control" name="id_jasa" aria-describedby="emailHelp" value="<?= $order->id_jasa ?>" hidden>
                                <input type="text" class="form-control" name="id_pesan" aria-describedby="emailHelp" value="<?= $id_pesan ?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Pemesan</label>
                                <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Masukan Nama Anda" required>
                            </div>
                            <div class="form-group">
                                <label for="email">No Telepon</label>
                                <input type="number" class="form-control" name="kontak" aria-describedby="emailHelp" placeholder="Masukan Nomor Telepon Anda" required>
                                <small id="emailHelp" class="form-text text-muted">Pastikan Memasukan nomor telepon
                                    yang
                                    benar untuk memudahkan proses pengerjaan</small>
                            </div>
                            <div class="form-group">
                                <label for="message">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="6" required></textarea>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- batas timeline -->

    <!-- section about us -->

    <!--batas about us -->

    <!-- testi -->

    <!-- batas testi -->
    <!-- ===================== SECTION ABOUT US END =============== -->

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
            <section class="footer-bottom row border-top-white">
                <div class="col-sm-6 text-right">
                    <p class="text-sm-right text-white-50">
                        Copyright &copy 2019 <br>
                        <a href="#" class="text-white-50">Samuajasa.com</a>
                    </p>
                </div>
            </section> <!-- //footer-top -->
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->


</body>

</html>