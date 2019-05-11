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
                <div class="col-xl-12 col-md-12 col-sm-12">
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
                                            <!-- <span class="currency">Rp. </span><span class="num"><?= $product->harga ?></span> -->
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
                                    <a href="<?= base_url(); ?>index.php/C_Order/ID/<?= $product->id_jasa ?>" class="btn  btn-warning"> Order </a>
                                    <!-- short-info-wrap .// -->
                                </article> <!-- card-body.// -->
                            </aside> <!-- col.// -->
                        </div> <!-- row.// -->
                    </main> <!-- card.// -->

                    <!-- PRODUCT DETAIL -->
                    <article class="card mt-3">
                        <div class="card-body">
                            <h4>Detail overview</h4>
                            <?=nl2br($product->overview) ?>
                        </div> <!-- card-body.// -->
                    </article> <!-- card.// -->
                    <!-- PRODUCT DETAIL .// -->
                </div> <!-- col // -->

            </div><!-- container // -->
    </section>
    <!--<footer class="section-footer" style="background-color:#1E324E;">-->
    <!--    <div class="container">-->
    <!--        <section class="footer-top padding-top" style="padding-bottom:200px;">-->
    <!--            <div class="row">-->
    <!--                <aside class="col-sm-3 col-md-3 white">-->
    <!--                    <h5 class="title">Customer Services</h5>-->
    <!--                    <ul class="list-unstyled">-->
    <!--                        <li> <a href="#">Help center</a></li>-->
    <!--                        <li> <a href="#">Money refund</a></li>-->
    <!--                        <li> <a href="#">Terms and Policy</a></li>-->
    <!--                        <li> <a href="#">Open dispute</a></li>-->
    <!--                    </ul>-->
    <!--                </aside>-->
    <!--                <aside class="col-sm-3  col-md-3 white">-->
    <!--                    <h5 class="title">My Account</h5>-->
    <!--                    <ul class="list-unstyled">-->
    <!--                        <li> <a href="#"> User Login </a></li>-->
    <!--                        <li> <a href="#"> User register </a></li>-->
    <!--                        <li> <a href="#"> Account Setting </a></li>-->
    <!--                        <li> <a href="#"> My Orders </a></li>-->
    <!--                        <li> <a href="#"> My Wishlist </a></li>-->
    <!--                    </ul>-->
    <!--                </aside>-->
    <!--                <aside class="col-sm-3  col-md-3 white">-->
    <!--                    <h5 class="title">About</h5>-->
    <!--                    <ul class="list-unstyled">-->
    <!--                        <li> <a href="#"> Our history </a></li>-->
    <!--                        <li> <a href="#"> How to buy </a></li>-->
    <!--                        <li> <a href="#"> Delivery and payment </a></li>-->
    <!--                        <li> <a href="#"> Advertice </a></li>-->
    <!--                        <li> <a href="#"> Partnership </a></li>-->
    <!--                    </ul>-->
    <!--                </aside>-->
    <!--                <aside class="col-sm-3">-->
    <!--                    <article class="white">-->
    <!--                        <h5 class="title">Contacts</h5>-->
    <!--                        <p>-->
    <!--                            <strong>Phone: </strong> +123456789 <br>-->
    <!--                            <strong>Fax:</strong> +123456789-->
    <!--                        </p>-->

    <!--                        <div class="btn-group white">-->
    <!--                            <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>-->
    <!--                            <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>-->
    <!--                            <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>-->
    <!--                            <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>-->
    <!--                        </div>-->
    <!--                    </article>-->
    <!--                </aside>-->
    <!--            </div> <!-- row.// -->
    <!--            <br>-->
    <!--        </section>-->
    <!--        <section class="footer-bottom fixed-bottom"></section>-->
    <!--        <div class="col-sm-12 text-white-center">-->
    <!--            <p class="text-sm-right">-->
    <!--                Copyright &copy 2019 <br>-->
    <!--                <a href="index.html" class="text-white-50">Samua Jasa</a>-->
    <!--            </p>-->
    <!--        </div>-->
    <!--        </section> <!-- //footer-top -->
    <!--    </div><!-- //container -->
    <!--</footer>-->
<!--            <section class="footer-bottom row border-top-white" style="background-color:#1E324E;">-->
<!--                <div class="col-sm-12 text-center">-->
<!--                    <p class="text-sm-center text-white-50">-->
<!--                        Copyright &copy 2019-->
<!--                        <a href="#" class="text-white-50">Samuajasa.com</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </section> <!-- //footer-top -->
<!--        </div><!-- //container --
<!--           </footer>-->
<!--</body>-->

</html>