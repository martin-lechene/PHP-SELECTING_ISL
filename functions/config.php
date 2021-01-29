<?php
// definition les parametres d'acces à la db
define("DB_NOM", "root");
define("DB_PASS", "");
define("DB_SERVEUR", "localhost");
define("DB_BASE", "isl_2020_2021");

define("DEBUG", true);

include_once("function_db.php");
include_once("function_global.php");
// include_once("function_only_X_orderby_ASC.php");

$mysqli = Connexion(DB_NOM, DB_PASS, DB_BASE, DB_SERVEUR);

?>