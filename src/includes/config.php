<?php
/*
    Axel Lundqvist
    Webbutveckling III
    Projektuppgift
    2018-10-04
*/

spl_autoload_register(function ($class){include 'classes/' . $class . '.class.php';});


//Inställningar för databas
define("DBHOST", "localhost");
define("DBUSER", "admin");
define("DBPASS", "2280804");
define("DBDATABASE", "webb3");

define("REALUSER", "admin");
define("REALPASS", "2280804");