<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Samua Jasa || Tampa Cari Jasa ">

    <title>Samua Jasa</title>

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
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- custom javascript -->
    <script src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>

</head>

<body>
    <div class="container">
        <nav class="navbar  navbar-expand-lg navbar-light bg-white">
            <!-- <a class="navbar-brand" href="#"> <img class="logo" src="<?php echo base_url(); ?>assets/images/samuajasa.png"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>index.php/C_Search/index">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#topproduct">Top Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- ========================= SECTION INTRO ========================= -->
    <section class="section-intro text-black text-center" style="background-image: url('<?= base_url(); ?>assets/images/samuajasabg.jpg');">
        <div class="container d-flex flex-column">
            <div class="row mt-auto">
                <div class="col-lg-8 col-sm-12 text-center mx-auto">
                    <img src="<?= base_url(); ?>assets/images/samuajasa.png" alt="gambarsamuajasa" height="180px;" width="auto;" class="img-responsive">
                    </br>
                    </br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 mx-auto text-center">
                    <form class="form-border" action="<?= base_url(); ?>index.php/C_Search/index" Method="post">
                        <div class="form-row mb-5">
                            <div class="col-lg-9 col-sm-12 form-group">
                                <input class="form-control form-control-lg" placeholder="Cari Keperluan Jasa Anda Di Sini" type="text" name="keyword">
                            </div>

                            <div class="col-lg-3 col-sm-12 form-group">
                                <button class="btn btn-warning btn-block btn-lg" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <h1 class="text-dark lead">Hubungi Kami</h1>
                    <ul class="list-inline my-5">
                        <li class="list-inline-item">
                            <a href="https://api.whatsapp.com/send?phone=6281343683445&text=Halo%20Samua%20Jasa%20Saya%20Ingin%20Memesan%20Jasa%20...." class="h2 text-dark p-1">
                                <i class="fab fa-whatsapp">Admin 1</i>
                            </a>
                        </li>
                        <li class="list-inline-item my-5">
                            <a href="https://api.whatsapp.com/send?phone=6281243279566&text=Halo%20Samua%20Jasa%20Saya%20Ingin%20Memesan%20Jasa%20...." style class="h2 text-dark p- my-51">
                                <i class="fab fa-whatsapp"> Admin 2</i>
                            </a>
                        </li>
                        <li class="list-inline-item my-5">
                            <a  href="https://api.whatsapp.com/send?phone=6281340234697&text=Halo%20Samua%20Jasa%20Saya%20Ingin%20Memesan%20Jasa%20.... "class="h2 text-dark p-1">
                                <i class="fab fa-whatsapp"> Admin 3</i>
                            </a>
                        </li>
                </div> <!-- col.// -->
            </div> <!-- row.// -->

        </div>
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->


    <section class="section-content padding-y">
        <div class="container">
            <header class="section-heading" id="topproduct">
                <h2 class=" text-center">Jasa Pilihan Untuk Anda</h2>
            </header><!-- sect-heading -->
            <div class="row">
                <?php foreach ($top_product as $t) { ?>
                    <div class="col-md-4">
                        <figure class="card card-product">
                            <div class="img-wrap"><img src="<?php echo base_url(); ?>assets/images/vendor/<?= $t->id_jasa ?>.jpg"></div>
                            <figcaption class="info-wrap">
                                <h4 class="title"><?= $t->jasa ?></h4>
                                <p class="desc"><?= $t->ket ?></p>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div> <!-- rating-wrap.// -->
                            </figcaption>
                            <div class="bottom-wrap">
                                <a href="<?= base_url(); ?>index.php/C_Product/ID/<?= $t->id_jasa ?>" class="btn btn-sm btn-warning float-right">Detail</a>
                                <div class="price-wrap h5">
                                    <span class="price-new">Rp. <?= $t->harga ?></span>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- bottom-wrap.// -->
                        </figure>
                    </div> <!-- col // -->
                <?php } ?>
            </div> <!-- row.// -->


        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================== SECTION ABOUT US START ======================== -->

    <!-- product -->

    <!-- test -->
    <!-- product -->
    <div class="container">
        <header class="section-heading">
            <h2 class=" text-center">Jasa</h2>
        </header><!-- sect-heading -->
        <div class="row">
            <div class="owl-carousel owl-init slide-items" data-items="5" data-margin="20" data-dots="true" data-nav="true">
                <?php foreach ($product as $y) { ?>
                    <div class="col-md-12">
                        <figure class="card card-product">
                            <div class="img-fluid img-reponsive"><img src="<?php echo base_url(); ?>assets/images/vendor/<?= $y->id_jasa ?>.jpg"> </div>
                            <figcaption class="info-wrap">
                                <h6 class="title text-center"><a href="<?= base_url(); ?>index.php/C_Product/ID/<?= $y->id_jasa ?>"><?= $y->jasa ?></a></h6>
                                <p class="desc"><?= $y->ket ?></p>
                                <div class="rating-wrap">
                            </figcaption>
                            <div class="bottom-wrap">
                                <a href="" class="btn btn-warning float-right">Detail</a>
                            </div> <!-- bottom-wrap.// -->
                        </figure>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- batas test  -->

    <!-- batas product -->

    <!-- section about us -->
    <div class="aboutus-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                            eu,
                            consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                        <p class="aboutus-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                            vel velit
                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                            ipsum,
                            nec sagittis sem</p>
                        <a class="aboutus-more" href="#">read more</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Work with heart</h4>
                                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                        consequat
                                        vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Reliable services</h4>
                                    <p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam
                                        sit amet
                                        orci eget eros faucibus tincidunt</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Great support</h4>
                                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                        consequat
                                        vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--batas about us -->

    <!-- testi -->
    <section class="section-content padding-bottom" id="testimoni">
        <div class="container">
            <h2 class=" text-center">Testimoni Pelanggan</h2>
            </br>
            </br>
            <div class="row">
                <div class="col-md-12">
                    <!-- ================== 1-carousel bootstrap  ==================  -->
                    <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                            <li data-target="#carousel1_indicator" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/testi1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/testi1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/images/testi1.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                <div class="col-sm-12 text-right">
                    <p class="text-sm-right text-white-50">
                        Copyright &copy 2019
                        <a href="#" class="text-white-50">Samuajasa.com</a>
                    </p>
                </div>
            </section> <!-- //footer-top -->
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
</body>

</html>