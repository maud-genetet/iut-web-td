<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
<a id='index' href="index.php">Index</a>
<h1>TD1: Les bases</h1>



<?php

$nombres = [];

// Tableau d'éléments
for ($i = 1; $i <= 9; $i++) {
    $n = [];
    for ($a = 1; $a <= 9; $a++) {
        $n[] = $i*$a;
    }
    $nombres[] = $n;
}

var_dump($_GET);

// Itération
echo "<table>";
for ($x = 0; $x < 9; $x++) {
    echo "<tr>";

    for ($y = 0; $y < 9; $y++) {
        
        if ( $x == 0 || $y == 0 ){
            echo "<td><b>".$nombres[$x][$y]."</b></td>";
        }
        else if (isset($_GET['x']) && isset($_GET['y'])){
            if ( ($_GET['x']==$x) || ($_GET['y']==$y ) ) {
                echo "<td><a style='background-color:pink' href='TD1.php?x=".$x."&y=".$y."'>".$nombres[$x][$y]."</a></td>";
                }
            else {
                echo "<td><a href='TD1.php?x=".$x."&y=".$y."'>".$nombres[$x][$y]."</a></td>";
            }
            }
        
        else {
            echo "<td><a href='TD1.php?x=".$x."&y=".$y."'>".$nombres[$x][$y]."</a></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>