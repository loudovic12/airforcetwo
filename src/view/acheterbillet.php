

<!doctype html>
<html lang="en">
    <head>
        <title>Achat</title>
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
        <!--======== END SIDENAV =========-->



        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Achat de billets</h1>
                        <ul class="breadcrumb">
                            <li><a href="/airforcetwo/index.php">Home</a></li>
                            <li class="active">Page d'achat</li>
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

                      <div class="table-responsive">
                        <?php

                        // Inclusion de la classe "reservation_manager.php" et "reservation.php"
                        include "../model/reservation.php";
                        include "../model/reservation_manager.php";

                        if(isset($_GET['id_vol'])) {
                          // Creation d'un nouvel objet "reservation" de type "reservation_manager"
                        $reservation= new reservation_manager();
                          // Execution de la fonction "reservation" avec l'envoie des données de ($_GET['id_vol'])
                        $m=$reservation->selectReserv($_GET['id_vol']);

                        ?>
                          <table class="table table-hover">


                              <tbody>
                                  <tr>
                                      <td class="dash-list-icon booking-list-date"><img src="../../assets/img/<?php echo $m[0]['img'];?>" class="img-responsive" alt="flight-img" /></td>
                                      <td class="dash-list-text booking-list-detail">

                                          <h3><?php echo $m[0]['ville_dep'];?>-<?php echo $m[0]['ville_arr']; ?></h3>
                                          <ul class="list-unstyled booking-info">
                                            <?php

                                              // Inclusion de la classe "airforcetwo.php"
                                            include "../model/airforcetwo.php";

                                              // Creation d'un nouvel objet "membre" de type "airforcetwo_manager"
                                            $membre = new airforcetwo_manager();
                                              // Execution de la fonction "membre"
                                            $result = $membre->afficheUser();

                                          ?>
                                            <li><span>Nom:</span> <?php echo $result['nom'];?></li>
                                            <li><span>Prenom:</span> <?php echo $result['prenom']; ?></li>
                                            <li><span>Téléphone:</span> <?php echo $result['phone']; ?></li>
                                            <li><span>Adresse:</span> <?php echo $result['adresse']; ?></li>
                                            <li><span>Pays:</span> <?php echo $result['pays']; ?></li>
                                            <li><span>Mail:</span> <?php echo $result['email']; ?></li>
                                            <li><span>Nom de l'avion:</span> <?php echo $m[0]['nomav']; ?></li>
                                            <li><span>Numéro de vol:</span> <?php echo $m[0]['numav']; ?></li>
                                            <li><span>Date de réservation:</span> Du <?php echo $m[0]['date_dep']; ?> au <?php echo $m[0]['date_arr'];?></li>
                                            <li><span>Heure de départ:</span> <?php echo $m[0]['h_dep']; ?></li>
                                            <li><span>Heure d'arrivée:</span> <?php echo $m[0]['h_arr']; ?></li>
                                            <li><span>Prix:</span> <?php echo $m[0]['prix']; ?>€</li>
                                          </ul>

                                      </td>
                                    </tr>
                              </tbody>
                          </table>
                      </div><!-- end table-responsive -->
<?php } ?>
                        <div class="col-sm-12">

                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">



                                    <h3>Achat</h3>

                                    <form action="../traitement/acheter-ticket-ttt.php?id_vol=<?php echo $m[0]['id_vol']; ?>" method="post">
                                        <div class="form-group">
                                             <input type="number" name="num_carte" class="form-control"  placeholder="Numero de carte"  required/>

                                        </div>
                                        <div class="form-group">
                                          <label for="expi">Date d'expiration</label>
                                             <input type="text" name="expi" class="form-control" placeholder="MM/AA"required/>

                                        </div>

                                        <div class="form-group">

                                             <input type="number" name="codesecu" class="form-control"  placeholder="Code de sécurité"  required/>

                                        </div>


                        <button type="submit" name="submit" class="btn btn-orange btn-block" >Passer commande</button><br>

                                    </form>

                                    	<a href="/airforcetwo/index.php" class="btn btn-orange btn-block btn-lg">Abandonner</a>
                                    <div class="other-links">

                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->

                                <div class="flex-content-img custom-form-img">
                                    <img src="../../assets/img/7.jpg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->

                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end login -->
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
        <script src="../../assets/bootstrap/js/custom-video.js"></script>
        <!-- Page Scripts Ends -->

    </body>
</html>
