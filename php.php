<h1 class="multi">Multiplications</h1>

<FORM>
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
    </FORM>
    <select name="choix">

            <option value="choix1">Table du 1</option>
        
            <option value="choix2">Table du 2</option>
        
            <option value="choix3">Table du 3</option>
        
            <option value="choix4">Table du 4</option>

            <option value="choix5">Table du 5</option>
        
            <option value="choix6">Table du 6</option>
        
            <option value="choix7">Table du 7</option>
        
            <option value="choix8">Table du 8</option>

            <option value="choix9">Table du 9</option>
        
            <option value="choix10">Table du 10</option>

        
        </select></p>

<?php

// for ($j = 1; $j <= 10; $j++)
//     {
//         echo '3'.' x '.$j.' = '. 3*$j.'<br>';
//     }

// $arr =

for ($i = 1; $i <= 10; $i++)
{
    if($_POST['choix1'] == $i) {
        echo '<p class="show">Table de multiplication de '.$i.'</p>'; 
    }
    else {
        echo '<p class="hidden">Table de multiplication de '.$i.'</p>';
    }

   
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}

?>

