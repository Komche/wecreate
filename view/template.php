<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link rel="icon" href="public/vendor/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/vendor/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="public/vendor/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="public/vendor/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="public/vendor/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="public/vendor/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/vendor/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="public/vendor/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="public/vendor/css/style.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu <?php echo (empty($_GET['action'])) ? 'home_menu' : ''; ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-8">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="public/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#services" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#services">L’espace de  co-working</a>
                                        <a class="dropdown-item" href="#services">Le Fablab </a>
                                        <a class="dropdown-item" href="#services">Centre de formation en spécialité informatique</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="index.php?action=project" id="navbarDropdownProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Projets
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownProject">
                                        <a class="dropdown-item" href="index.php?action=project#proj1">Le labo des génies</a>
                                        <a class="dropdown-item" href="index.php?action=project#proj2">Code for Her </a>
                                        <a class="dropdown-item" href="index.php?action=project#proj3">E-entreprenariat</a>
                                        <a class="dropdown-item" href="index.php?action=project#proj4">IOT for us</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Carrière</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php echo $content ?>
    <!-- footer part start-->
    <section class="footer-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Liens</h4>
                    <ul>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Partenaires</a></li>
                        <li><a href="#">Réalisations</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Partenaires</a></li>
                        <li><a href="#">Réalisations</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Pour être informer de nos activité veuillez entrer votre adresse mail,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Votre adresse mail"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse mail '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase btn_2">Valider</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Wecreate <!-- <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a target="_blank" href="https://www.facebook.com/Wecreate-112747093421434/?referrer=whatsapp"><i class="ti-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/Wecreate17"> <i class="ti-twitter"></i> </a>
                    <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                    <a target="_blank" href="#"><i class="ti-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wecreate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-justify">
            Crée en 2019, Wecreate est le 1ère le tech hub (centre technologique) au Niger, qui met à la disposition des jeunes tout le savoir-faire nécessaire pour les amener faire usage des technologies du numérique pour créer des innovations qui vont répondre aux besoins de leur écosystème. <br>
            C’est une communauté ouverte et composée par des mentor locaux et internationaux, expérimenté qui fournissent une assistance technique et commerciale aux membres nécessiteux. <br>
            Nous organisons également des événements, des ateliers, des sessions de formation, des hackathons et des sessions de réseautage pour promouvoir la collaboration / les partenariats, les investissements et le financement. <br>
            La mission principale de Wecreate est de promouvoir, faciliter et soutenir l’usage des technologies du numérique pour contribuer au développement à travers des solutions innovantes. <br>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="projet" tabindex="-1" role="dialog" aria-labelledby="projetLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projetLabel">Wecreate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-justify">
        Projets
Le tech hub Wecreate travaille et propose des projets communautaires à fort impact social pour contribuer au développement du Niger à travers la formation des jeunes . <br>
Ainsi  Wecreate travail sur 4 projets sociaux qui seront lancé en décembre 2019 pour le début de ses activités sociales. <br>
Ces 4 projets réunis vont former 3500 personne dans les huits régions du Niger. Se sont : <br>
Le labo des génies : ce projets va former 1000 enfants  âgés de 07 à 12 ans issus des écoles publiques et des orphelinats de Niamey en développement d’application mobile pour enfant, dessin informatique et construction d’une unité centrale selon le modèle Jery.
Code for Her : il va former 1000 jeunes filles issues des lycées dans les 8 huits régions du niger en coding (développement d’application web)
E-entreprenariat : ce projet va former 500 jeunes femmes entrepreneures à Niamey, sur le marketing digitale et dans l’utilisation des outils numériques pour la gestion d’une start-up.
IOT for us: il va former 1000 jeunes lycéens de la ville de niamey en conception robotique et domotique.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="public/vendor/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="public/vendor/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="public/vendor/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="public/vendor/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="public/vendor/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="public/vendor/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="public/vendor/js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="public/vendor/js/slick.min.js"></script>
    <!-- custom js -->
    <script src="public/vendor/js/custom.js"></script>


    
</body>

</html>