<!doctype html>
<html lang="fr">
    <head>
        <title>Index</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.min.css">

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="assets/bootstrap/css/style.css">
        <link rel="stylesheet" id="cpswitch" href="assets/bootstrap/css/orange.css">
        <link rel="stylesheet" href="assets/bootstrap/css/responsive.css">

        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="assets/bootstrap/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/bootstrap/css/owl.theme.css">

        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="assets/bootstrap/css/flexslider.css" type="text/css" />

        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="assets/bootstrap/css/datepicker.css">

        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="assets/bootstrap/css/magnific-popup.css">
    </head>


    <body id="main-homepage">


        <!--====== LOADER =====-->
        <div class="loader"></div>
        <!--======== END LOADER =========-->

        <?php
        session_start();
        if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong><center><?php echo $_SESSION['message']; ?></center></strong>
            </div>
            <?php
            unset($_SESSION['message']);
        }
        ?>

        <!--======== SEARCH-OVERLAY =========-->
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form action="traiSearch.php" method="post">
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" name="recherche" class="form-control" placeholder="Rechercher..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        <!--======== END SEARCH-OVERLAY =========-->

        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <?php include "src/include/header.php"?>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
        <!--======== END TOP-BAR =========-->


        <!--============= NAVBAR ===========-->
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                 <?php include "src/include/navbar.php"?>
            </div><!-- end container -->
        </nav>
        <!--======== END NAVBAR =========-->

        <!--======== SIDENAV =========-->
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                 <?php include "src/include/sidenav.php"?>
            </div>
        </div>
        <!--======== END SIDENAV =========-->


		<!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1">
            <div class="flexslider slider" id="slider-1">
                <ul class="slides">
                    <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(assets/img/1.jpg) 50% 0%; background-size:cover;height:100%;">
                    	<div class=" meta">
                            <div class="container">
                                <h2>Découvrir</h2>
                                <h1>Le monde</h1>
                                <a href="#" class="btn btn-default">Voir</a>
                            </div><!-- end container -->
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->

                    <li class="item-2" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(assets/img/2.jpg) 50% 0%;background-size:cover;height:100%;">
                        <div class=" meta">
                            <div class="container">
                                <h2>Découvrir</h2>
                                <h1>Le monde</h1>
                                <a href="#" class="btn btn-default">Voir</a>
                            </div><!-- end container -->
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->
                </ul>
            </div><!-- end slider -->

            <div class="search-tabs" id="search-tabs-1">
            	<div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <ul class="nav nav-tabs center-tabs">
                                <li class="active"><a href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Vols</span></a></li>
                                <li><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hôtels</span></a></li>
                                <li><a href="#tours" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="st-text">Véhicules et hôtels</span></a></li>
                                <li><a href="#cars" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Véhicules</span></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="flights" class="tab-pane in active">
                                    <form action="src/view/reservationticket.php" method="post">
                                        <div class="row">



                                          <div class="col-sm-6 col-md-3">
                                              <div class="form-group left-icon">
                                                  <input type="text" name="ville_dep" class="form-control" placeholder="Ville d'arrivée" required />
                                                  <i class="fa fa-globe"></i>
                                              </div>
                                          </div><!-- end columns -->

                                          <div class="col-sm-6 col-md-3">
                                              <div class="form-group left-icon">
                                                  <input type="text" name="ville_arr" class="form-control" placeholder="Ville de départ" required/>
                                                  <i class="fa fa-map-marker"></i>
                                              </div>
                                          </div><!-- end columns -->


                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">

                                                    <div class="col-xs-6 col-sm-6 col-md-8">
                                                        <div class="form-group left-icon">
                                                            <input type="date" name="date_dep" class="form-control " placeholder="Départ">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->



                                                </div><!-- end row -->
                                            </div><!-- end columns -->


                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button name="recherche" value="true" type="submit" class="btn btn-orange">Réserver</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end flights -->

                                <div id="hotels" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Départ" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2" placeholder="Arrivée" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Chambres</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Adultes</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-6 col-sm-6 col-md-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Enfants</option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                              <button type="submit" name="submit" class="btn btn-orange">Réserver</button>

                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hotels -->

                                <div id="tours" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="Ville,Pays" />
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Mois</option>
                                                        <option>Janvier</option>
                                                        <option>Fevrier</option>
                                                        <option>Mars</option>
                                                        <option>Avril</option>
                                                        <option>Mai</option>
                                                        <option>Juin</option>
                                                        <option>Juillet</option>
                                                        <option>Août</option>
                                                        <option>Septembre</option>
                                                        <option>Octobre</option>
                                                        <option>Novembre</option>
                                                        <option>Decembre</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Passagers</option>
                                                                <option name="1">1</option>
                                                                <option name="2">2</option>
                                                                <option name="3">3</option>
                                                                <option name="4">4</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Enfants</option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button type="submit" name="submit" class="btn btn-orange">Réserver</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end tours -->

                                <div id="cruise" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="De" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="A" >
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">

                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Départ" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2" placeholder="Arrivée" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                    <option selected>Adultes</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button type="submit" name="submit" class="btn btn-orange">Réserver</button>
                                            </div><!-- end columns -->

                                        </div><!-- end columns -->
                                    </form>
                                </div><!-- end cruises -->

                                <div id="cars" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                                                <div class="row">

                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="Pays" />
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="Ville" />
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="Location" />
                                                            <i class="fa fa-street-view"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                                <div class="row">

                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1" placeholder="Départ" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2" placeholder="Arrivée" >
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                                <button type="submit" name="submit" class="btn btn-orange">Réserver</button>
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
                     <?php include "src/include/newsletter.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end newsletter-2 -->
            <!--============= END NEWSLETTER============-->


        <!--======================= FOOTER TOP =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">
                     <?php include "src/include/footer-top.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->
        <!--======================= END FOOTER TOP =======================-->

             <!--======================= FOOTER BOTTOM =======================-->
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                     <?php include "src/include/footer-bottom.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            <!--======================= END FOOTER BOTTOM =======================-->

        </section><!-- end footer -->


        <!-- Page Scripts Starts -->
        <script src="assets/bootstrap/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap/js/jquery.flexslider.js"></script>
        <script src="assets/bootstrap/js/bootstrap-datepicker.js"></script>
        <script src="assets/bootstrap/js/owl.carousel.min.js"></script>
        <script src="assets/bootstrap/js/custom-navigation.js"></script>
        <script src="assets/bootstrap/js/custom-flex.js"></script>
        <script src="assets/bootstrap/js/custom-owl.js"></script>
        <script src="assets/bootstrap/js/custom-date-picker.js"></script>
        <script src="assets/bootstrap/js/custom-video.js"></script>

        <!-- Page Scripts Ends -->

    </body>
</html>
