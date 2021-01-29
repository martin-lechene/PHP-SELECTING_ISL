<?php
foreach (range('A', 'Z') as $char) {
    $letters[] = $char;
}
$size_list_letter = sizeof($letters);
for($i= 0; $i<$size_list_letter; $i++){
//     echo "<a href=./letter/'.$letters[$i].'.php">".$letters[$i]."</a> | "";
    echo "<a href='./letter/".$letters[$i].".php'>".$letters[$i]."</a> | ";
    }
    ?>

<!-- 
    $btn = $select;
    
    $sql_only_X_orderby_ASC = "SELECT designer_id, firstname, lastname FROM designer WHERE fristname LIKE \'".$lettre_select."\';";


    $select => Lettre du bouton


-->