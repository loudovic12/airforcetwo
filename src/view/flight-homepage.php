<!doctype html>
<html lang="en">
    <head>
        <title>Vols</title>
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

        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/flexslider.css" type="text/css" />

        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="../../assets/bootstrap/css/datepicker.css">

        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="../../assets/bootstrap/css/magnific-popup.css">
    </head>


    <body id="flight-homepage">

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
        </div>
        <!--======== END SEARCH-OVERLAY =========-->


        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                 <?php include "../include/header.php"?>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
        <!--======== END TOP-BAR =========-->


        <!--============= NAVBAR ===========-->
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                 <?php include "../include/navbar.php"?>
            </div><!-- end container -->
        </nav>
        <!--======== END NAVBAR =========-->

        <!--======== SIDENAV =========-->
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
              <?php include "../include/sidenav.php"?>
            </div><!-- end mySidenav -->
        </div>
        <!--======== END SIDENAV =========-->



        <!--========================= FLEX SLIDER =====================-->
            <section class="flexslider-container" id="flexslider-container-1">

                <div class="flexslider slider" id="slider-1">
                    <ul class="slides">

                        <li class="item-1" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(../../assets/img/3.jpg) 50% 0%; background-size:cover; height:100%;">
                        	<div class=" meta">
                                <div class="container">
                                    <h2>Découvrir</h2>
                                    <h1>Le monde</h1>
                                    <a href="#" class="btn btn-default">Voir</a>
                                </div><!-- end container -->
                            </div><!-- end meta -->
                        </li><!-- end item-1 -->

                    </ul>
                </div><!-- end slider -->

                <div class="search-tabs" id="search-tabs-1">
                	<div class="container">
                        <div class="row">
                            <div class="col-sm-12">

                                <ul class="nav nav-tabs center-tabs">
                                    <li class="active"><a href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Vols</span></a></li>

                                </ul>

                                <div class="tab-content">

                                  <div id="flights" class="tab-pane in active">
                                      <form action="reservationticket.php" method="post">
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
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/bootstrap/js/jquery.flexslider.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap-datepicker.js"></script>
        <script src="../../assets/bootstrap/js/custom-navigation.js"></script>
        <script src="../../assets/bootstrap/js/custom-flex.js"></script>
        <script src="../../assets/bootstrap/js/custom-date-picker.js"></script>
        <!-- Page Scripts Ends -->

    </body>
</html>
