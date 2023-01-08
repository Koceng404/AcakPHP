<?php

$kata = '“DONE” atau “no”';

preg_match_all('/\“([\w\s]+)\”/', $kata, $filter);

//print_r ($filter[0])0};


$a = json_encode($filter[0]);

$a = preg_replace("/[^A-Z\.]/","",$a);


        echo $a; //hasilnya = DONE


//echo   json_encode($filter[1]); //hasilnya ["DONE","no"]




        // munculnya => Array ( [0] => “DONE” [1] => “no” )
        
    
?>
