
<!-- 
    ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<!-- 
    Stringa di prova:
    ----?name=victor&mail=gianni@gmail.com&age=40----
 -->

<?php 

    $name = $_GET['name'];

    $mail = $_GET['mail'];

    $age = $_GET['age'];

   

    $chiocciola = stripos($mail,'@');

    $punto = stripos($mail,'.');

    /* var_dump(is_numeric('6')); */

    var_dump(strlen($name))
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


<?php if ($name != '' || $mail != '' || $age != '') : ?>

    <?php if (strlen($name) > 3 && $chiocciola != false && $punto != false && is_numeric($age)) : ?>

        <h1>Accesso riuscito</h1>

    <?php else : ?>

        <h1>Accesso negato</h1>

    <?php endif; ?>

<?php else : ?>

    <h1>Inserisci i tuoi dati</h1>

<?php endif; ?>

</body>
</html>
