<?php
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $randomnum = [];
    
    for ($i = 0; $i < $_GET['numbers']; $i++) {
        $yvalue = mt_rand(-5, 20);
         $json = [$i, $yvalue];
         array_push($randomnum, $json);
        }
    echo json_encode($randomnum);

?>