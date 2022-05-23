<!-- 
    ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
-->

<?php 
    $big_par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro provident temporibus minus suscipit et. Consectetur, temporibus eum? Similique nulla nemo beatae quam, facilis magni dicta blanditiis perspiciatis molestiae fugit?
    Accusantium corporis quas sapiente sunt aliquam tempora rem similique, deleniti in asperiores nesciunt voluptatibus at, dolor pariatur unde officiis quisquam quasi molestias qui delectus, quo suscipit! Atque quae fugit rerum!
    Reprehenderit, repellat saepe ex odit ad vel explicabo ut doloribus esse libero molestias. Voluptas quia, quasi voluptatem pariatur aliquid laborum cumque consequuntur accusantium? Necessitatibus ratione iure eaque quibusdam, asperiores voluptatum!
    Voluptatibus id eveniet nulla voluptatum ab saepe est cumque ex illum! Suscipit est sunt dignissimos consectetur. Dicta, ipsa veritatis alias similique praesentium rem aperiam accusamus nostrum repellendus in optio tenetur.
    Minus repellendus placeat dolores quia culpa. Ducimus, autem repellat. Exercitationem molestias cum ipsa voluptas excepturi rerum ex rem eveniet ratione, ducimus architecto doloribus perspiciatis neque voluptatem adipisci. Molestiae, mollitia culpa!";

   $array =  explode(".", $big_par);
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
    


<?php foreach($array as $string) : ?>
    <p><?= $string ?></p>
<?php endforeach; ?>
</body>
</html>