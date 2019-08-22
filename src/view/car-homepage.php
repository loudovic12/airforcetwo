<!doctype html>
<html lang="en">
    <head>
        <title>Véhicules</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="../../assets/img/favicon.png" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">

        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/font-awesome.min.css">

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/style.css">
        <link rel="stylesheet" id="cpswitch" href="../../assets/bootstrap/css/orange.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/responsive.css">

        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/owl.carousel.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/owl.theme.css">

        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/flexslider.css" type="text/css" />

        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="../../assets/bootstrap/css/datepicker.css">
    </head>


    <body id="car-homepage">

        <!--====== LOADER =====-->
        <div class="loader"></div>
        <!--======== END LOADER =========-->


    	<!--======== SEARCH-OVERLAY =========-->
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Rechercher..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        <!--======== END SEARCH-OVERLAY =========-->


        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-grey">
            <div class="container">
                <div class="row">
                    <?php include "../include/header.php"?>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        <!--======== END TOP-BAR =========-->


        <!--============= NAVBAR ===========-->
        <section class="flexslider-container" id="flexslider-container-3">

            <div class="header-absolute">
                <nav class="navbar navbar-default main-navbar navbar-custom navbar-black" id="mynavbar">
                    <div class="container">
                    <?php include "../include/navbar.php"?>
                    </div><!-- end container -->
                 </nav><!-- end navbar -->
        	</div>
        <!--======== END NAVBAR =========-->


          <div class="sidenav-content">
              <div id="mySidenav" class="sidenav" >
                 <?php include "../include/sidenav.php"?>
                </div><!-- end mySidenav -->
            </div><!-- end sidenav-content -->

            <div class="flexslider slider" id="slider-3">
                <ul class="slides">

                    <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(../../assets/img/6.jpg) 50% 65%;background-size:cover;height:100%;">
                    </li><!-- end item-1 -->

                </ul>
            </div><!-- end slider -->

            <div class="search-tabs" id="search-tabs-3">
            	<div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-r">

                            <ul class="nav nav-tabs">

                                <li class="active"><a href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Véhicules</span></a></li>
                            </ul>

                            <div class="tab-content">



                                <div id="cars" class="tab-pane in active">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">

                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Pays</label>
                                                            <input type="text" class="form-control" placeholder="Pays" />
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Ville</label>
                                                            <input type="text" class="form-control" placeholder="Ville" />
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-sm-12 col-md-12">
                                                        <div class="form-group left-icon">
                                                            <label>Votre Location</label>
                                                            <input type="text" class="form-control" placeholder="Location" />
                                                            <i class="fa fa-street-view"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row">

                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Départ</label>
                                                            <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <label>Arrivée</label>
                                                            <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button class="btn btn-orange">Réserver</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end cars -->


                            </div><!-- end tab-content -->

                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->

        </section><!-- end flexslider-container -->




            <!--============= NEWSLETTER============-->
            <section id="newsletter-2" class="newsletter">
                <div class="container">
                    <div class="row">
                     <?php include "../include/newsletter.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end newsletter-2 -->
            <!--============= END NEWSLETTER============-->


                <!--======================= FOOTER TOP =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">
                     <?php include "../include/footer-top.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->
        <!--======================= END FOOTER TOP =======================-->

             <!--======================= FOOTER BOTTOM =======================-->
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                     <?php include "../include/footer-bottom.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            <!--======================= END FOOTER BOTTOM =======================-->

        </section><!-- end footer -->

        <!-- Page Scripts Starts -->
        <script src="../../assets/bootstrap/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/jquery.magnific-popup.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/bootstrap/js/jquery.flexslider.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap-datepicker.js"></script>
        <script src="../../assets/bootstrap/js/owl.carousel.min.js"></script>
        <script src="../../assets/bootstrap/js/custom-navigation.js"></script>
        <script src="../../assets/bootstrap/js/custom-flex.js"></script>
        <script src="../../assets/bootstrap/js/custom-owl.js"></script>
        <script src="../../assets/bootstrap/js/custom-date-picker.js"></script>
        <script src="../../assets/bootstrap/js/custom-gallery.js"></script>
        <!-- Page Scripts Ends -->

    </body>
</html>
