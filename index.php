<?php 
include_once('./functions/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISL TEST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $sql = "SELECT * FROM designer LIMIT 2;";
    $result = requeteResultat($sql);

    $sql_id_name = "SELECT designer_id, firstname, lastname FROM designer LIMIT 5;";
    $result_id_name = requeteResultat($sql_id_name);

    $sql_ASC_by_name = "SELECT designer_id, firstname, lastname FROM designer ORDER BY firstname ASC LIMIT 5;";
    $result_ASC_by_name = requeteResultat($sql_ASC_by_name);

    $sql_DESC_by_name = "SELECT designer_id, firstname, lastname FROM designer ORDER BY firstname DESC LIMIT 5;";
    $result_DESC_by_name = requeteResultat($sql_DESC_by_name);

echo "<h1>" .$sql. "</h1>";
foreach($result as $r){
    $id = $r["designer_id"];
    $prenom = $r["firstname"];
    $nom = $r["lastname"];
    $bio = $r["description"];
    echo "<p class='id'> ID : " .$id."</p><p class='name'>  Name : "  .$prenom. " " .$nom. " <br/></p>" ;
    echo "<p class='bio'>" .$bio."</p>";
}

echo "<h1>" .$sql_id_name. "</h1>";
foreach($result_id_name as $r){
    $id = $r["designer_id"];
    $prenom = $r["firstname"];
    $nom = $r["lastname"];
    echo "<p class='list'>[<span class='id'>" .$id. "</span>] " .$prenom. " " .$nom. "</p>";


}

echo "<h1>" .$sql_ASC_by_name. "</h1>";
foreach ($result_ASC_by_name as $r) {
    $id = $r["designer_id"];
    $prenom = $r["firstname"];
    $nom = $r["lastname"];
    echo "<p class='list'>[<span class='id'>" .$id. "</span>] " .$prenom. " " .$nom. "</p>";
}

echo "<h1>" .$sql_DESC_by_name. "</h1>";
foreach ($result_DESC_by_name as $r) {
    $id = $r["designer_id"];
    $prenom = $r["firstname"];
    $nom = $r["lastname"];
    echo "<p class='list'>[<span class='id'>" .$id. "</span>] " .$prenom. " " .$nom. "</p>";
}

echo "<h1> Tri fristname par ordre alphabetique </h1>";
include_once("./functions/function_only_X_orderby_ASC.php");


?>
</body>
</html>