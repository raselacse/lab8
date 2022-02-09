<?php
    $ar = array();
    for($i=1; $i<=5; $i++){
        array_push($ar, $i);
    }
    foreach($ar as $a){
        echo "<br>".$a;
    }
?>