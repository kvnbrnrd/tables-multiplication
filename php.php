<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="index2.css">
    <title>Les multiplications</title>
</head>
<body>
<h1 class="multi">Multiplications</h1>

    <form name="check" action="" method="post">
    <h2>Affichage de plusieurs tables à la fois :</h2>
        
        <input type="checkbox" name="table[]" value="1"> <label for="un">Table de 1</label>
        <input type="checkbox" name="table[]" value="2"> <label for="deux">Table de 2</label>
        <input type="checkbox" name="table[]" value="3"> <label for="trois">Table de 3</label>
        <input type="checkbox" name="table[]" value="4"> <label for="quatre">Table de 4</label>    
        <input type="checkbox" name="table[]" value="5"> <label for="cinq">Table de 5</label></p>
        <input type="checkbox" name="table[]" value="6"> <label for="six">Table de 6</label>
        <input type="checkbox" name="table[]" value="7"> <label for="sept">Table de 7</label>
        <input type="checkbox" name="table[]" value="8"> <label for=" huit">Table de 8</label>
        <input type="checkbox" name="table[]" value="9"> <label for="neuf">Table de 9</label>
        <input type="checkbox" name="table[]" value="10"> <label for="dix">Table de 10</label></p>
    
        <input type="submit" value="Valider" name="valider">
    </form>
      

    <?php

    $truc = isset($_POST['truc']) ? $_POST['truc'] : NULL;
    foreach($_POST['table'] as $valeur){
    for ($num=1; $num <= 10; $num++) {
    if ($num == 10){
    
    echo $valeur. ' x ' .$num. ' = ' .$num * $valeur.'<br></p>';
    } else {
    echo $valeur. ' x ' .$num. ' = ' .$num * $valeur.'<br>';
    }
    
    }
    } 
    
    ?>



<form method="post">
    <select name="choix">

            <option value="1">Table du 1</option>
        
            <option value="2">Table du 2</option>
        
            <option value="3">Table du 3</option>
        
            <option value="4">Table du 4</option>

            <option value="5">Table du 5</option>
        
            <option value="6">Table du 6</option>
        
            <option value="7">Table du 7</option>
        
            <option value="8">Table du 8</option>

            <option value="9">Table du 9</option>
        
            <option value="10">Table du 10</option>
        
        </select></p>
        <input type="submit" method="post" value="Valider" />
</form>
<?php


for ($j = 1; $j <= 10; $j++)
    {
        echo $_POST["choix"].' x '.$j.' = '. $_POST["choix"]*$j.'<br>';
    }

?>
</body>
</html>
