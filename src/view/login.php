<!doctype html>
<html lang="en">
    <head>
        <title>Connexion</title>
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

        <?php
        //On créé une session qui va permettre d'afficher un message
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
                    	<h1 class="page-title">Connexion</h1>
                        <ul class="breadcrumb">
                            <li><a href="/airforcetwo/index.php">Home</a></li>
                            <li class="active">Page de connexion</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->


        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="login" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Connexion</h3>

                                    <form action="../traitement/login-ttt.php" method="post">

                                        <div class="form-group">
                                             <input type="email" name="email" class="form-control"  placeholder="Email"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>

                                        <div class="form-group">
                                             <input type="password" name="mdp" class="form-control"  placeholder="Mot de passe"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>

                                        <div class="checkbox">
                                             <label><input type="checkbox"> Se souvenir de moi</label>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-orange btn-block" >Connexion</button>
                                    </form>

                                    <div class="other-links">
                                    	<p class="link-line">Pas de compte ? <a href="registration.php">Créer un compte</a></p>
                                        <a class="simple-link" href="#">Mot de passe oublié ?</a>
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
