<!doctype html>
<html lang="en">
    <head>
        <title>Mon Compte</title>
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


          <!--================ PAGE-COVER =================-->
          <section class="page-cover" id="cover-login">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                      	<h1 class="page-title">Mon Compte</h1>
                          <ul class="breadcrumb">
                              <li><a href="/airforcetwo/index.php">Home</a></li>
                              <li class="active">Mon Compte</li>
                          </ul>
                      </div><!-- end columns -->
                  </div><!-- end row -->
              </div><!-- end container -->
          </section><!-- end page-cover -->


        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="dashboard-wrapper">
                            	<div class="row">

                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                        	<li class="active"><a href="#"><span><i class="fa fa-user"></i></span>Profil</a></li>
                                            <li><a href="booking.php"><span><i class="fa fa-briefcase"></i></span>Mes réservations</a></li>
                                            <li><a href="achats.php"><span><i class="fa fa-credit-card"></i></span>Mes achats</a></li>
                                        </ul>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                		<h2 class="dash-content-title">Mon Compte</h2>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Informations</h4></div>
                                            <div class="panel-body">
                                            	<div class="row">
                                                <?php

                                                      // Inclusion de la classe "airforcetwo.php"
                                                include "../model/airforcetwo.php";

                                                  // Creation d'un nouvel objet "membre" de type "airforcetwo_manager"
                                                $membre = new airforcetwo_manager();
                                                    // Execution de la fonction "membre"
                                                $result = $membre->afficheUser();

                                              ?>
                                                	<div class="col-sm-5 col-md-4 user-img">
                                                        <img src="/airforcetwo/assets/img/10.png" class="img-responsive" alt="user-img" />
                                                    </div><!-- end columns -->

                                                    <div class="col-sm-7 col-md-8  user-detail">

                                                        <ul class="list-unstyled">
                                                            <li><span>Nom:</span> <?php echo $result['nom'];?></li>
                                                            <li><span>Prenom:</span> <?php echo $result['prenom']; ?></li>
                                                            <li><span>Téléphone:</span> <?php echo $result['phone']; ?></li>
                                                            <li><span>Adresse:</span> <?php echo $result['adresse']; ?></li>
                                                            <li><span>Pays:</span> <?php echo $result['pays']; ?></li>
                                                            <li><span>Mail:</span> <?php echo $result['email']; ?></li>
                                                        </ul>
                                                   	</div><!-- end columns -->
                                                </div><!-- end row -->

                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end dashboard -->
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
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/bootstrap/js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
