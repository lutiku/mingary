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
                        <a class="nav-link" href="/accompagnements/">Accompagnements</a>
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
</div>
<!-- -->
<h2 class="titre-nous-contacter">Contatez nous</h2>

<div class="contact">
    <div class="formulaire">

        <form class="form-page-contacter">
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

<div class="contactmap">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.206879304621!2d2.31441001564062!3d48.87333260760853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc96a59ad85%3A0x59e5a8e8c08efc42!2s10%20Rue%20de%20Penthi%C3%A8vre%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1579029229237!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div>


<footer class="footer">

</footer>


<!-- JavaScript de Bootstrap et jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/script.js"></script>
</body>
</html>