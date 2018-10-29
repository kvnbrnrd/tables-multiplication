<?php

$categorie = mysql_real_escape_string($_POST['categorie']);
for ($i = 1; $i <= 10; $i++)
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}

?>

