                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>5 avenue du Général de Gaulle, 93440, Dugny</li>
                                <li><span><i class="fa fa-phone"></i></span>+33184596356</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">

                                <ul class="list-unstyled list-inline">
                                  <?php
                                  if(isset($_COOKIE['id'])) { ?>
                                      <li><a href="/airforcetwo/src/view/user-profile.php">
                                  <?php
                                  include($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/airforcetwo_manager.php');

                                  $membre = new airforcetwo_manager();
                                  $result = $membre->afficheUser();
                                  echo   $result['nom'] .' ';
                                  echo   $result['prenom'];
                                  ?></a></li>
                                  <li><a href="/airforcetwo/src/view/booking.php">Mes voyages</a></li>

                                    <li><a href="/airforcetwo/src/traitement/logout-ttt.php">Déconnexion</a></li>

                                                 <?php } else { ?>
                                  <li><a href="/airforcetwo/src/view/login.php"><span><i class="fa fa-lock"></i></span>Se connecter</a></li>
                                  <li><a href="/airforcetwo/src/view/registration.php"><span><i class="fa fa-plus"></i></span>S'inscrire</a></li>
                                    <?php } ?>
                                  <li>
                                	<form>
                                    	<ul class="list-inline">
                                        	<li>
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">€</option>
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
											</li>

                                            <li>
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">FR</option>
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
										</ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->


