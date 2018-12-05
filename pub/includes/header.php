<?php

/*
    Axel Lundqvist
    Webbutveckling III projekt
    2018-10-15
*/


/* include class files */
spl_autoload_register(function ($class){include 'classes/' . $class . '.class.php';});

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Lundqvists</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <div class="wrapper">
                <div class="row">
                    <div class="col-3">
                        <div class="logo"><a href="index.php">Lundqvist</a></div>
                    </div>
                    <div class="col-7">
                        <div class="mainmenu">
                            <ul>
                                <a href="index.php"><li>hem</li></a>
                                <a href="service.php"><li>tjänster</li></a>
                                <a href="about.php"><li>om</li></a>
                                <a href="contact.php"><li>kontakt</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="socials"><a href="#"><i class="fab fa-instagram fa-2x"></i></a> <a href="#"> <i class="fab fa-facebook fa-2x"></i></a></div>
                    </div>
                </div> <!-- End of row -->

                <div class="menu-btn">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
            
    <nav class="menu">
        <ul class="menu-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link">
                    hem
                </a>
            </li>
            <li class="nav-item">
                <a href="service.php" class="nav-link">
                    tjänster
                </a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link">
                    om
                </a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">
                    kontakt
                </a>
            </li>
        </ul>
    </nav>
            </div> <!-- End of wrapper in header -->
        </div> <!-- End of header -->