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

<h1>TD2: Les bases</h1>
<br>
<h2>Calculatrice GET</h2>

<form method="get">
    
    <input type="number" name="n1"/>
    +
    <input type="number" name="n2"/>

    <input type="submit" value="Calculer" />

</form>

<?php

if (isset($_GET['n1']) && isset($_GET['n1'])){
    if ( $_GET['n1']=='' || $_GET['n2']=='' ){
        echo "Il manque au moins un nombre";
    } else {
        echo "Résultat = ".$_GET['n1']+$_GET['n2']."";
    }

}

?>

<br>
<h2>Calculatrice POST</h2>

<form method="post">
    
    <input type="number" name="n1p"/>
    +
    <input type="number" name="n2p"/>

    <input type="submit" value="Calculer" />

</form>

<?php

if (isset($_POST['n1p']) && isset($_POST['n1p'])){
    if ( $_POST['n1p']=='' || $_POST['n2p']=='' ){
        echo "Il manque au moins un nombre";
    } else {
        echo "Résultat = ".$_POST['n1p']+$_POST['n2p']."";
    }

}

?>
</body>
</html>