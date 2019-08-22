
<!doctype html>
<html lang="en">
    <head>
        <title>Réservation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">

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
    </head>


    <body>

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
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <?php include "app/header.php"?>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        <!--======== END TOP-BAR =========-->


        <!--============= NAVBAR ===========-->
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                 <?php include "app/navbar.php"?>
            </div><!-- end container -->
        </nav><!-- end navbar -->
        <!--======== END NAVBAR =========-->

        <!--======== SIDENAV =========-->
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                 <?php include "app/sidenav.php"?>
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->


        <!--================ PAGE-COVER =================-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Réservation</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Page de réservation</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->


        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Réservation</h3>
                                    <form action="traitement/reserv.php" method="post">

                                        <div class="form-group">
                                             <input type="text" name="nom" class="form-control" placeholder="Nom"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <input type="text" name="prenom" class="form-control" placeholder="Prénom"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <input type="email" name="mail" class="form-control" placeholder="Email"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <input type="text" name="pays" class="form-control" placeholder="Pays"  required/>
                                             <span>  <i class="fa fa-map-marker"></i></span>
                                        </div>

                                        <button type="submit" class="btn btn-orange btn-block" name="submit">Réserver</button>
                                    </form>

                                    <div class="other-links">
                                    	<p class="link-line">Voir ses réservations ? <a href="login.html">Connexion ici</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->

                                <div class="flex-content-img custom-form-img">
                                    <img src="images/trevi_fountain-2.jpg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->

                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end registration -->
        </section><!-- end innerpage-wrapper -->





            <!--============= NEWSLETTER============-->
            <section id="newsletter-2" class="newsletter">
                <div class="container">
                    <div class="row">
                     <?php include "app/newsletter.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end newsletter-2 -->
            <!--============= END NEWSLETTER============-->




                       <!--======================= FOOTER TOP =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">
                     <?php include "app/footer-top.php"?>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->
        <!--======================= END FOOTER TOP =======================-->

             <!--======================= FOOTER BOTTOM =======================-->
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                     <?php include "app/footer-bottom.php"?>
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
