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
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <!-- Link bootstrapnavbar -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
<div class="headerothers">
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
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Blog
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="banner">
        <div class="container">
            <div class="banner-text">
                <div class="banner-heading">
                    Glad to see
                    you here !
                </div>
                <div class="banner-sub-heading">
                    Here goes the secondary heading on hero banner
                </div>
            </div>
        </div>
    </div>



</div>
<!-- -->
<!-- Présentation des partenaires -->
<section class="sectionpartenaires">

</section>

<!-- mages des évenement passées organisés par Mingary-->

<section class="nosevents">
    <div class="image-events-1"></div>
    <div class="image-events-2"></div>
    <div class="image-events-3"></div>


</section>






<!-- Footer -->

<footer class="footer">

</footer>


<!-- JavaScript de Bootstrap et jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory');?>/script.js"></script>
</body>
</html>

