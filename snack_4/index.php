
<!-- 
    ## Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

<?php
    /* var_dump(rand(2,7)) */

    $numeri_casuali = [];

    while (count($numeri_casuali) <15){
        $numero_random = rand(1,100);

        if(!in_array($numero_random)){
            $numeri_casuali[] = $numero_random;
        }
    }

    
    var_dump($numeri_casuali);
    
?>