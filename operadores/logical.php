<?php 
    $v1 = 1;
    $v2 = 1;
    $v3 = 2;
    $v4 = 3;

    $r1 = $v1 == $v2;
    echo "resultado 1 $r1 <br/>";

    $r1 = $v3 == $v4;
    echo "resultado 2 $r1 <br/>";

    if ($v1 == 1 && $v2 == 1){
        echo 'verdadero';
    }else{
        echo 'falso';
    }

    if ($v3 == 1 || $v4 == 3){
        echo 'verdadero';
    }else{
        echo 'falso';
    }
?>