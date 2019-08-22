<!doctype html>
<html lang="en">
    <head>
        <title>Contact</title>
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
    </head>


    <body>

        <!--====== LOADER =====-->
        <div class="loader"></div>


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
                  <?php include "../include/header.php"?>
                  </div><!-- end row -->
              </div><!-- end container -->
          </div><!-- end top-bar -->
          <!--======== END TOP-BAR =========-->


          <!--============= NAVBAR ===========-->
         <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
             <div class="container">
                  <?php include "../include/navbar.php"?>
             </div><!-- end container -->
         </nav><!-- end navbar -->
         <!--======== END NAVBAR =========-->

         <!--======== SIDENAV =========-->
         <div class="sidenav-content">
             <div id="mySidenav" class="sidenav" >
             <?php include "../include/sidenav.php"?>
             </div><!-- end mySidenav -->
         </div><!-- end sidenav-content -->
         <!--======== END SIDENAV =========-->


        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Nous contacter</h1>
                        <ul class="breadcrumb">
                            <li><a href="/airforcetwo/index.php">Home</a></li>
                            <li class="active">Page de contact</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->




        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="contact-us" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-5 no-pd-r">
                        	<div class="custom-form contact-form">
                            	<h3>Nous contacter</h3>
                                <form>

                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Nom"  required/>
                                         <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Email"  required/>
                                         <span><i class="fa fa-envelope"></i></span>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="Votre Message"></textarea>
                                        <span><i class="fa fa-pencil"></i></span>
                                    </div>

                                    <button class="btn btn-orange btn-block">Envoyer</button>
                                </form>
                            </div><!-- end contact-form -->
                        </div><!-- end columns -->

                        <div class="col-sm-12 col-md-7 no-pd-l">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10480.886983316497!2d2.4157092!3d48.9492634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa35833adc1739e08!2sLyc%C3%A9e+Robert+Schuman!5e0!3m2!1sfr!2sfr!4v1557835478423!5m2!1sfr!2sfr" allowfullscreen></iframe>
                            </div><!-- end map -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end contact-us -->
        </section><!-- end innerpage-wrapper -->


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
        <script src="../../assets/bootstrap/js/custom-video.js"></script>
        <!-- Page Scripts Ends -->

    </body>
</html>
