<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link rel="stylesheet" href="style.css">

</head>
<body><br>
<a id='index' href="index.php">Index</a>

    <h1>TD2: Les bases</h1>
    <br>
    <h2>Calculatrice GET</h2>

<?php


$annee;
if (isset($_GET['a'])){
    $annee = $_GET['a'];
} else {
    $annee = 2022;
}

?>

    <table>
        <thead>
            <tr>
                <td>
                    <a href="TD2part2.php?m=-1"><</a> 
                    Mois
                    <a href="TD2part2.php?m=1">></a>
                </td>
                <td>
                    <?php 
                        echo "<a href='TD2part2.php?a=".($annee-1)."'><</a>";
                        echo $annee;
                        echo "<a href='TD2part2.php?a=".($annee+1)."'>></a>";
                    ?>
                    
                </td>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>


</body>
</html>