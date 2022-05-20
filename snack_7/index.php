<!-- 
    ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->



<?php
    $alunni = [
        [
            'nome' => 'Daniele',
            'cognome' => 'Alaimo',
            'voti' => [7.5,8,6,9,7]
        ],
        [
            'nome' => 'Simone',
            'cognome' => 'Distasi',
            'voti' => [5,10,6,9,7]
        ],
        [
            'nome' => 'Gianmaria',
            'cognome' => 'Lanzetti',
            'voti' => [5,8,5,9,6]
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
    
    <?php foreach($alunni as $alunno) : ?>

        <?php 
            $somma = 0;
            
            foreach($alunno['voti'] as $voto){
                $somma += $voto; 
            }
            $media = $somma / count($alunno['voti']);
/*             var_dump($somma);
            var_dump(count($alunno['voti']));
            var_dump($media); */
        ?>
        <ul>
        <li><span class="key">nome</span>: <?php echo $alunno['nome'] ?></li>
        <li><span class="key">cognome</span>: <?php echo $alunno['nome'] ?></li>
        <li><span class="key">media</span>: <?php echo $media ?></li>
        </ul>
    <?php endforeach; ?>

    <style>
        .key{
            color:red;
        }
    </style>
</body>
</html>