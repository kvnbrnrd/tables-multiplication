<head><link rel="stylesheet" type="text/css" href="index2.css"></head>
<h1 class="multi">Multiplications</h1>

<form method="post">
    <h2>Affichage de plusieurs tables à la fois :</h2>

    <input type="hidden" name="categorie" id="categorie">
    <input type="checkbox"  value="1"> Table du 1
    <input type="checkbox"  value="2"> Table du 2
    <input type="checkbox"  value="3"> Table du 3
    <input type="checkbox"  value="4"> Table du 4
    <input type="checkbox"  value="5"> Table du 5</p>
    <input type="checkbox"  value="6"> Table du 6
    <input type="checkbox"  value="7"> Table du 7
    <input type="checkbox"  value="8"> Table du 8
    <input type="checkbox"  value="9"> Table du 9
    <input type="checkbox"  value="10"> Table du 10</p>
    <button type="submit" formmethod="post">Valider</button></p>
</form>

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

