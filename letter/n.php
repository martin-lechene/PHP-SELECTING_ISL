<?php
include_once("./../functions/config.php");
include_once("./../functions/function_db.php");
$lettre_select= "n";
$sql_only_X_orderby_ASC = "SELECT designer_id, firstname, lastname FROM designer WHERE firstname LIKE '".$lettre_select."%';";
$result_only_X_orderby_ASC = requeteResultat($sql_only_X_orderby_ASC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lettre_select ?></title>
    <link rel="stylesheet" href="./../style.css">
</head>
<body>
<?php 

echo "<h1>".$lettre_select."<h1>";
foreach ($result_only_X_orderby_ASC as $r) {
    $id = $r["designer_id"];
    $prenom = $r["firstname"];
    $nom = $r["lastname"];
    echo "<p class='list'>[<span class='id'>" .$id. "</span>] " .$prenom. " " .$nom. "</p>";
}

?>
</body>
</html>