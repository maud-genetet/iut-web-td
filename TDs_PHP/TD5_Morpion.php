<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <link rel="stylesheet" href="style.css">

</head>
<body><br>
<a id='index' href="index.php">Index</a>

    <h1>TD5: Cookies et Sesssion</h1>
    <br>
    <h2>Morpion</h2>


<?php

if (isset($_SESSION['count'])) {
    //$_SESSION['count']++;
} else {
    $_SESSION['count']= [];
    for ($i = 0; $i < 3; $i++) {
        $n = [];
        for ($a = 0; $a < 3; $a++) {
            $n[$a] = 'n';
        }
        $nombres[$i] = $n;
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($a = 0; $a < 3; $a++) {
        var_dump($_SESSION['count'][$i][$a]);
    }
    
}

?>
