<!doctype html>
<html lang="en">
<head>
    <title>Vols Réservation</title>
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

    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="../../assets/bootstrap/css/jquery-ui.min.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="../../assets/bootstrap/css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/magnific-popup.css">
</head>


 <body>
      <!--Inclusion des classes "vol.php" et "vol_manager.php" -->
        <?php require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/vol_manager.php'); ?>
        <?php require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/vol.php'); ?>

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
                        <h1 class="page-title">Réservation</h1>
                        <ul class="breadcrumb">
                            <li><a href="/airforcetwo/index.php">Home</a></li>
                            <li class="active">Réservation</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->


        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="flight-listings" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                            <div class="side-bar-block filter-block">
                                <h3>Filtrer par</h3>
                                <p>Trouvez votre vol de rêve aujourd'hui</p>
                                <div class="panels-group">
                                    <form action="reservationticket.php" method="post">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <input name="ville_dep" type="text" class="form-control" placeholder="Ville de départ" >
                                            </div><!-- end panel-heading -->
                                        </div><!-- end panel-default -->

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <input name="ville_arr" type="text" class="form-control" placeholder="Ville d'arrivée" >
                                            </div><!-- end panel-heading -->
                                        </div><!-- end panel-default -->

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <input name="date_dep" type="date" class="form-control" placeholder="Départ" >
                                            </div><!-- end panel-heading -->
                                        </div><!-- end panel-default -->
                                </div><!-- end panel-group -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                    <button name="recherche" value="true" type="submit" class="btn btn-orange">Rechercher</button><br>
                                    <button name="reset" value="true" href="airforcetwo/src/view/reservationticket.php" class="btn btn-orange">Rafraîchir</button>
                                </div><!-- end columns -->
                                </form>
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                        <?php
                        // Vérification pour savoir si le formulaire a bien été remplit
                        if(empty($_POST['recherche']) ||  empty($_POST['ville_dep']) &&  empty($_POST['ville_arr']) &&  empty($_POST['date_dep'])) {
                          // Creation d'un nouvel objet "vol" de type "vol_manager"
                            $vol = new vol_manager();
                            // Execution de la fonction "vol"
                            $a = $vol->afficheVol();
                        } elseif($_POST['recherche'] == 'true') {
                            $ville_dep = $_POST['ville_dep'];
                            $ville_arr = $_POST['ville_arr'];
                            $date_dep = $_POST['date_dep'];
                            // Creation d'un nouvel objet "vol" de type "vol" avec l'envoie des données
                            $vol = new vol([
                                'ville_dep' => $ville_dep,
                                'ville_arr' => $ville_arr,
                                'date_dep' => $date_dep
                            ]);
                            // Creation d'un nouvel objet "recherche" de type "vol_manager"
                            $recherche = new vol_manager();
                            $a = $recherche->listeVol($vol);
                        }
                        ?>

                        <div class="col-xs-12 col-sm-12 col-md-9 content-side">
                            <div class="row">
                                <?php  foreach ($a as $m){?>
                                <div class="list-block main-block f-list-block">
                                    <div class="list-content">
                                        <div class="main-img list-img f-list-img">
                                            <a href="flight-detail-left-sidebar.html">
                                                <div class="f-img">
                                                    <img src="../../assets/img/<?php echo $m['img'];?>" class="img-responsive" alt="flight-img" />
                                                </div><!-- end f-list-img -->
                                            </a>
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="duration"><i class="fa fa-plane"></i></li>
                                                <li class="price"><?php echo $m['prix'];?>€<span class="divider">|</span><span class="pkg"><i class="fa fa-money"></i></span></li>
                                            </ul>
                                            <ul class="list-unstyled flight-timing">
                                                <li><span><i class="fa fa-plane"></i></span><span class="date"><?php echo $m['date_dep'];?> </span>(<?php echo $m['h_dep'];?>)</li>
                                                <li><span><i class="fa fa-plane"></i></span><span class="date"><?php echo $m['date_arr'];?> </span>(<?php echo $m['h_arr'];?>)</li>
                                            </ul>
                                        </div><!-- end f-list-img -->

                                        <div class="list-info f-list-info">
                                            <h3 class="block-title"><a href="flight-detail-left-sidebar.html"><?php echo $m['ville_dep'];?>-<?php echo $m['ville_arr'];?></a></h3>
                                            <p class="block-minor"><span><?php echo $m['numav'];?>,</span> <?php echo $m['nomav'];?></p>
                                            <p><i class="fa fa-shopping-bag"></i> Bagage à main inclus</p>
                                            <p><i class="fa fa-window-close-o"></i> Annulation gratuite</p>
                                            <a href="/airforcetwo/src/traitement/reservation-vol-ttt.php?id_vol=<?php echo $m['id']; ?>" class="btn btn-orange">Réserver</a>
                                         </div><!-- end f-list-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end f-list-block -->
                                <?php } ?>
                            </div><!-- end row -->

                            <div class="pages">
                                <ol class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol>
                            </div><!-- end pages -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end flight-listings -->
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
        <script src="../../assets/bootstrap/js/jquery-ui.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/bootstrap/js/custom-navigation.js"></script>
        <script src="../../assets/bootstrap/js/custom-price-slider.js"></script>
        <script src="../../assets/bootstrap/js/jquery.flexslider.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap-datepicker.js"></script>
        <script src="../../assets/bootstrap/js/custom-flex.js"></script>
        <script src="../../assets/bootstrap/js/custom-date-picker.js"></script>
        <!-- Page Scripts Ends -->
 </body>
</html>
