<?php 
    require "../src/Hello.php";
    
    use App\Hello;

    $user = new Hello();
    // echo $user->talk();
?> 

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test composer</title>
    </head>

    <body>
        <h1 style='color:blue; margin:30px'>
            <?= $user->talk(); ?>
        </h1>
    </body>
</html>