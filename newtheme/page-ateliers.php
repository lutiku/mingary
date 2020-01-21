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

                </ul>
            </div>
        </div>
    </nav>



    <div class="banner">
        <div class="container">
            <div class="banner-text">
                <div class="banner-autresheading">
                     Partage
                </div>
                <div class="banner-sub-autresheading">
                    Here goes the secondary heading on hero banner
                </div>

            </div>
        </div>
    </div>



</div>
<!-- -->
<section class="sectionateliers">

<!--h1 class="nosateliers">Nos Ateliers</h1-->
<p class="p-ateliers"><i>Le partage d'expériences
    Mingary déploie des formations thématiques axées sur le partage,
        la communication et la mise en situation.</i></p>

<div class="selectchoix">

    <label class="wrapper" for="states">This label is stacked above the select</label>
    <div class="button dropdown">
        <select id="colorselector">
            <option value="pro">Professionnels</option>
            <option value="part">Particuliers</option>

        </select>
    </div>
</div>

<div class="output">
 <!-- Ateliesr pro -->
    <div id="pro" class="colors pro">

        <div class="row">

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/250/150" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Formation des recruteurs</h5>
                        <p class="card-text">
                            Construit par l’alternance de théories et de mises en situations pratiques autour d’outils et d’actions concrètes.
                            La complémentarité des Ressources-Humaines et du coaching renforce l’assimilation des thématiques par l’écoute de l’autre
                            mais aussi la compréhension de soi pour de meilleurs résultats.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/250/150" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/250/150?random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>

                    </div>
                </div>
            </div>




        </div>


    </div>

    <!-- Ateliers particuliers -->

    <div id="part" class="colors part">
        <div class="row">

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/250/150" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Formation des recruteurs</h5>
                        <p class="card-text">
                            Construit par l’alternance de théories et de mises en situations pratiques autour d’outils et d’actions concrètes.
                            La complémentarité des Ressources-Humaines et du coaching renforce l’assimilation des thématiques par l’écoute de l’autre
                            mais aussi la compréhension de soi pour de meilleurs résultats.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/250/150" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/250/150?random" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>

                    </div>
                </div>
            </div>




        </div>


    </div>

<!-- Ateliers pro qui s'affiche au chargement de la page -->

    <div class="row" id="row-au-chargement">

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="https://picsum.photos/250/150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Formation des recruteurs</h5>
                    <p class="card-text">
                        Construit par l’alternance de théories et de mises en situations pratiques autour d’outils et d’actions concrètes.
                        La complémentarité des Ressources-Humaines et du coaching renforce l’assimilation des thématiques par l’écoute de l’autre
                        mais aussi la compréhension de soi pour de meilleurs résultats.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="https://picsum.photos/250/150" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Le recrutement par leviers de motivation</h5>
                    <p class="card-text">
                        Le recrutement est une rencontre et un échange entre candidat et recruteur. Mingary vous fait découvrir un outil innovant de recrutement sans CV basé sur les leviers de motivation pour réinventer l'évaluation RH de vos candidats.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="https://picsum.photos/250/150?random" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Manager autrement</h5>
                    <p class="card-text">
                        Le management est une action de communication, de compréhension et de partage de motivation. Mingary vous partage certaines pratiques et outils afin de favoriser l'épanouissement tant du manager que de son équipe.

                    </p>

                </div>
            </div>
        </div>




    </div>

    <!-- --->


</div>


</section>

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

<!-- -->
<footer class="footer">

</footer>


<!-- JavaScript de Bootstrap et jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory');?>/script.js"></script>
</body>
</html>
