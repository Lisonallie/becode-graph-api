<?php
    $randomnum = [];
    
    for ($i = 0; $i < 11; $i++) {
        $yvalue = mt_rand(-5, 20);
         $json = "[$i, $yvalue]";
         array_push($randomnum, $json);
        }
        echo json_encode($randomnum);
?>