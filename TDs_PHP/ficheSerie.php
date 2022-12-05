<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['serie']?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        #retour {
        background-color: black;
        color: gainsboro;
        padding: 5px;
        margin: 5px;
    }
        #retour:hover {
            background-color: grey;
            color: gainsboro;
            padding: 5px;
            margin: 5px;
    }
    </style>
</head>
<body><br>
<a id='index' href="index.php">Index</a>
<a id='retour' href="TD3.php">Retour</a>

    <?php 
    echo "<h1>".$_GET['serie']."</h1>";
    
    $dsn = "mysql:dbname=etu_mgenetet;host=info-titania";
    $user = 'mgenetet';
    $password = '26sCe6tW';
    $pdo = new PDO($dsn, $user, $password);

    $sql = "SELECT poster, plot, director, awards FROM series WHERE title = '".$_GET['serie']."'";
    $query = $pdo->query($sql);
    foreach ($query as $row) {
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['poster']).'"/></a><br>';
        echo "<b>Plot</b> : ".$row['plot'];
        echo "<br><b>Director</b> : ".$row['director'];
        echo "<br><b>Awards</b> : ".$row['awards'];

    }

    $sql = "SELECT season.number, COUNT(*) AS 'cmp' FROM series 
    INNER JOIN season ON season.series_id=series.id 
    INNER JOIN episode ON episode.season_id=season.id 
    WHERE series.title = '".$_GET['serie']."' 
    GROUP BY season.number 
    ORDER BY season.number ASC";
    
    $query = $pdo->query($sql);
    echo "<ul>";
    foreach ($query as $row) {
        echo "<li> Season ".$row['number']." ( ".$row['cmp']." episodes )</li>";

    }
    echo "</ul>"
    ?>
</body>
</html>