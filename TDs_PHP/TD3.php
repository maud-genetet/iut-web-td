<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Netflix</title>
    <style>
        .searchFilm{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .resultatFilm a{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            background-color: gray;
            color: gainsboro;
            margin: 5px;
            padding: 5px;
        }
        .resultatFilm a:hover{
            background-color: black;
        }
        .resultatFilm img{
            height: 40vh;
            max-width: 40vh;
        }
        .navigation{
            background-color: black;
            border-radius: 90px;
            padding: 8px;
            color :white;
            text-decoration: none;
        }
        .navigation:hover{
            background-color: grey;
        }
    </style>
</head>
<body><br>
    <a id='index' href="index.php">Index</a>
    <h1>TD3: Base de données</h1>
    <h2>Netflix</h2><br>
    <form method="get">
        <label>Search: </label>
        <input name="lettre">
        <input style="display: none;" name="page" value="1">
        <button type="submit">Valider</button>
    </form><br>
<?php
    $nbParPage = 15;
    $pageEnCours = 1;
    if (isset($_GET['page'])) {
        $pageEnCours = $_GET['page'];
    }
    $dsn = "mysql:dbname=etu_mgenetet;host=info-titania";
    $user = 'mgenetet';
    $password = '26sCe6tW';
    $pdo = new PDO($dsn, $user, $password);
    if (isset($_GET['lettre']) && $_GET['lettre']!='') {
        $sql = "SELECT title, poster FROM series WHERE title LIKE '".$_GET['lettre']."%' LIMIT ".(($pageEnCours-1)*$nbParPage).",".($nbParPage)."";
        $sql2 = "SELECT COUNT(*) AS 'nb' FROM series WHERE title LIKE '".$_GET['lettre']."'";
    } else {
        $sql = "SELECT title, poster FROM series LIMIT ".(($pageEnCours-1)*$nbParPage).",".($nbParPage)."";
        $sql2 = "SELECT COUNT(*) AS 'nb' FROM series";
    }
    $query = $pdo->query($sql);
    echo "<div class='searchFilm'>";
    foreach ($query as $row) {
        $title = $row['title'];
        echo "<div class='resultatFilm'>";
        echo "<a href='/ficheSerie.php?serie=".$title."'>". $title."";
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['poster']).'"/></a>';
        echo "</div>";
    }
    echo "</div>";
    
    $requete = $pdo->query($sql2);
    $donnees = $requete->fetch();
    if ($pageEnCours>1){
        echo "<a class='navigation' href='TD3.php?page=".($pageEnCours-1)."'>précédente</a>";
        echo " ";
    }
    for ($i=1; $i < $donnees['nb']/$nbParPage+1; $i++) { 
        echo "<a class='navigation'  href='TD3.php?page=".$i."'>".$i."</a>";
        echo " ";
    }
    if ($pageEnCours<($donnees['nb']/$nbParPage)){
        echo "<a class='navigation'  href='TD3.php?page=".($pageEnCours+1)."'>suivante</a>";
    }
        
?>

</body>
</html>
