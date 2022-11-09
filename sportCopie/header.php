<?php require_once "fonction.php" ; ?>
<?php $name_url = explode("/", $_SERVER["SCRIPT_NAME"]) ; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title><?php echo($title) ?? "Salle de sport"; ?></title>
</head>

<body>
    <?php if ($name_url[2] == "presentation.php") : ?>
        <header class="header-bg">
            <?php elseif ($name_url[2] == "contact.php") : ?>
        <header class="header-bg">
        <?php endif ; ?>
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center fixed-top nav-fixed">
            <div class="container m-0">
                <a class="navbar-brand" href="http://localhost/sport/404">
                    <img src="./images/logo.png" width="90" height="40" alt="logo entreprise">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mob-navbar">
                    <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                        <?php echo add_item("nav_item", "nav-link", "index", "L'EQUIPE") ; ?>
                        <?php echo add_item("nav_item", "nav-link", "presentation", "LES ACTIVITES") ; ?>
                        <?php echo add_item("nav_item", "nav-link", "404", "NOS OFFRES") ; ?>
                        <?php echo add_item("nav_item", "nav-link", "404", "PLANNING") ; ?>
                        <?php echo add_item("nav_item", "nav-link", "404", "LE BLOG") ; ?>
                        <?php echo add_item("nav_item", "nav-link", "contact", "CONTACT") ; ?>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fa fa-mobile" style="font-size: 16px;color:white" a href="tel:+49.157.0156"> 05 59 47 84 18</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="navbar-link fa fa-facebook-square" style="color: white" href="http://localhost/sport/404"></a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-link fa fa-instagram" style="color: white" href="http://localhost/sport/404"></a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-link fa fa-tripadvisor" style="color: white" href="http://localhost/sport/404"></a>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="http://localhost/sport/404">
                        <img src="./images/favicon.png" alt="" width="30" height="20" class="d-inline-block align-text-top">
                    </a>
                </div>
            </div>
        </nav>
        <?php if ($name_url[2] == "index.php") : ?>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active home">
                        <img src="./images/slider/slide_1.jpg" class="d-block w-100" alt="image slider">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-center">2 INSCRIPTIONS SIMULTANEES = UN 3ième ABONNEMENT DE 6 MOIS OFFERT !</h3>
                            <button type="button" class="btn btn-outline-light">PLUS D'INFOS</button>
                        </div>
                    </div>
                    <div class="carousel-item home">
                        <img src="./images/slider/slide_2.jpg" class="d-block w-100" alt="image slider">
                    </div>
                    <div class="carousel-item home">
                        <img src="./images/slider/slide_3.jpg" class="d-block w-100" alt="image slider">
                    </div>
                </div>
            </div>
        <?php endif ; ?>
</header>
