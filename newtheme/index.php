<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mingary</title>
    <!-- Favicon Mingary -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/MMingary.png" />
    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:700&display=swap" rel="stylesheet">
    <!-- Link cards avis-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Link bootstrapnavbar -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Script cards avis-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Script bootstrap navbar -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour les versions plus anciennes que Internet Explorer 9 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Nav -->
<div class="header">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/ateliers/">Ateliers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/accompagnements/">Accompagnement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/notre-reseau/">Notre réseau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nous-contacter/">Nous contacter</a>
                    </li>
                    <!-- Dropdown >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Blog
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="banner">
        <div class="container">
            <div class="banner-text">
                <div class="banner-heading">
                    MINGARY
                </div>
                <div class="banner-sub-heading">
                    Accompagnement & Développement RH
                </div>

            </div>
        </div>
        <div class="arrow"></div>
    </div>



</div>
<!-- -->



<!--div class="meta">

    <div class="textmeta">
        <h2 class="beyondtheexpeted">Go Beyond the<br> Expeted</h2>

        <p class="bloctextmeta">
            Passionnés et spécialistes du développement RH, nous concentrons nos compétences sur les sujets spécifiques du recrutement, du développement personnel et de l’amélioration de process par la création et l’animation de formations.</br></br>

            Notre approche de coach renforce chacune de nos actions par l’utilisation d’outils et de postures innovantes, basées sur l’écoute de l’autre mais aussi la compréhension de soi, afin de dispenser des prestations adaptées à chacun de nos clients.
        </p>
    </div>

    <div class="imagesmeta">
        <div class="imgemeta"><img src=""></div>
        <div class="mamission"></div>
    </div>

</div-->

<!-- Ateliers principaux-->
<div class="ateliersaccompagnements">
    <div class="nosateliersetacc">
        <h2 class="">Nos Ateliers et Accompagnements</h2>

    </div>

    <!--div class="principauxateliers_1"><button class="seemore"></button></div>
    <div class="principauxateliers_2"><button class="seemore"></button></div>
    <div class="principauxateliers_3"><button class="seemore"></button></div-->
        <div class="card-container">
            <div class="card card_1">
                <div class="card-image"></div>
                <div class="card-info">
                    <div class="card-title">Professionels</div>
                    <div class="card-detail"><p>Le management est une action de communication, de compréhension et de partage de motivation. Mingary vous partage certaines pratiques et outils afin de favoriser l'épanouissement tant du manager que de son équipe.</p></div>
                </div>
                <div class="card-social">
                   <p>MANAGER AUTREMENT</p>
                </div>
            </div>
            <div class="card card_2">
                <div class="card-image"></div>
                <div class="card-info">
                    <div class="card-title">Particuliers</div>
                    <div class="card-detail"><p>Il n'est pas inné de parler de soi et encore moins de communiquer ses forces et faiblesses. Mingary vous met en situation afin d'objectiver et de relativiser vos entretiens. En groupe ou individuellement, définir un pitch dynamique pour des échanges concluants.
                        </p></div>
                </div>
                <div class="card-social"><p>ENTRENEMENT AUX ENTRETIENS</p></div>
            </div>
            <div class="card card_3">
                <div class="card-image"></div>
                <div class="card-info">
                    <div class="card-title">Professionnels</div>
                    <div class="card-detail"><p>Construit par l’alternance de théories et de mises en situations pratiques autour d’outils et d’actions concrètes. La complémentarité des Ressources-Humaines et du coaching renforce l’assimilation des thématiques par l’écoute de l’autre mais aussi la compréhension de soi pour de meilleurs résultats.
                        </p></div>
                </div>
                <div class="card-social">
                   <p>FORMATION DES RECRUTEURS</p>
                </div>
            </div>

        </div>






    </div>





</div>

<!--Pourquoi Mingary -->

<div class="parallax"></div>

<div class="meta">

    <div class="textmeta">
        <h2 class="beyondtheexpeted">Pourquoi Mingary ?</h2>

        <p class="bloctextmeta">
            Spécialisé dans le développement des Ressources-Humaine et l'accompagnement, Mingary accompagne:<br><br>
            Les chercheurs d'emploi par une démarche coach pour retrouver et préserver une dynamique positive et épanouissante tout en structurant l'ensemble de leurs actions.<br><br>
            Les entreprises (Start-up, TPE, PME) dans tous leurs sujets et projets RH (recrutement, management, cohésion d'équipe, création de service...)<br><br>
            Les Grands Groupes dans des actions de reclassement de personnel et de formations thématiques
        </p>
    </div>

    <div class="imagesmeta">
        <div class="imgemeta"></div>
        <div class="mamission"></div>
    </div>
</div>
<div class="parallax"></div>

<!-- Avis Clients -->


<div class="avis">
    <!--div class="clientssatisfaits">
    <h2 class="">Des clients Satisfaits</h2>
    </--div>

    <div class="avis_1"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed ex consectetur, eleifend est ut, dapibus risus. In ullamcorper, diam eu faucibus aliquet, ipsum quam convallis risus, nec tempor arcu libero sit amet nulla.</p></div>
    <div class="avis_1"></div>
    <div class="avis_1"></div-->

    <!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">Des clients Satisfaits</h5>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->

                <!-- ./Team member -->
                <!-- Team member -->

                <!-- ./Team member -->
                <!-- Team member -->

                <!-- ./Team member -->

            </div>
        </div>
    </section>
    <!-- Team -->

</div>



<!-- Nous contacter -->

<div class="nouscontacter">
    <div class="message"></div>

    <div class="formulaire">

        <form class="form">
            <h2>CONTACT US</h2>
            <p type="Nom:"><input placeholder="Write your name here.."></input></p>
            <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
            <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
            <button>Envoyer</button>
            <div>
                <span class="fa fa-phone"></span>001 1023 567
                <span class="fa fa-envelope-o"></span> contact@mingary.fr
            </div>
        </form>


    </div>

</div>

<!-- Footer -->

<footer class="footer">

 <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></div>
    <div class="coordonnees">

       <div class="icon">
           <img src="https://img.icons8.com/material-outlined/24/000000/important-mail.png">
       </div>
        <a href="mailto:adresse@serveur.com"><p>contact@mingary.fr</p></a>

        <div class="icon">
            <img src="https://img.icons8.com/ios-filled/50/000000/next-location.png">
        </div>
        <a href="https://www.google.com/maps/dir/48.8708124,2.1100902/mingary/@48.86908,2.0716481,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x47e66f0f9f421191:0xe53b584fa1d79367!2m2!1d2.3165987!2d48.8733291" target="_blank"><p>10 rue de Penthièvre 75008 Paris</p></a>
    </div>

        <div class="socialmedia">
            <div class="iconsocialmedia"><a href="https://www.linkedin.com/company/mingary/" target="_blank"><img src="https://img.icons8.com/color/96/000000/linkedin-circled.png"></a></div>
            <div class="iconsocialmedia"><a href="https://www.facebook.com/MingaryRH/" target="_blank"><img src="https://img.icons8.com/color/96/000000/facebook-circled.png"></a></div>

        </div>

</footer>


<!-- JavaScript de Bootstrap et jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/script.js"></script>
</body>
</html>