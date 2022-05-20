<!-- 

## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

<?php

$partite = [
     [
        'sq_casa' => 'rimini',
        'sq_ospite' => 'pesaro',
        'punti_sq_casa' => '40',
        'punti_sq_ospite' => '42'
    ],
 [
        'sq_casa' => 'roma',
        'sq_ospite' => 'napoli',
        'punti_sq_casa' => '60',
        'punti_sq_ospite' => '53'
    ],
 [
        'sq_casa' => 'napoli',
        'sq_ospite' => 'pesaro',
        'punti_sq_casa' => '30',
        'punti_sq_ospite' => '30'
    ],

];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
for ($i = 0; $i < count($partite); ++$i){ ?>
    <?php var_dump($partite[$i]["sq_casa"]) ?>
    <p><?php echo $partite[$i]['sq_casa']?> - <?php echo $partite[$i]['sq_ospite']?> | <?php echo $partite[$i]['punti_sq_casa']?> - <?php echo $partite[$i]['punti_sq_ospite']?></p>
    
<?php } ?>
?>

</body>
</html>