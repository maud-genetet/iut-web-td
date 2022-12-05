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

<?php
    $dsn = "mysql:dbname=etu_mgenetet;host=info-titania";
    $user = 'mgenetet';
    $password = '26sCe6tW';
    $pdo = new PDO($dsn, $user, $password);
?>


<body><br>
<a id='index' href="index.php">Index</a>
<a id='retour' href="TD4.php">Inscription</a>

<h1>TD4 : Base de données</h1>
    <h2>Connexion</h2>

    <form action="" method="post">
        <label>Enter your email: </label>
        <input type="text" name="emailUser" required><br>
        <label>Enter your password: </label>
        <input type="text" name="pswUser" required><br>
        <input type="submit" value="Se Connecter">
    </form>
    <br>

    <?php


    session_start();
    
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        $sql = "SELECT user.name AS 'name', country.name AS 'countryUser', user.email AS 'email', user.password AS 'password' FROM user
        LEFT OUTER JOIN country ON user.country_id=country.id
        WHERE user.email==".$_SESSION['email']." && user.password==".$_SESSION['password'];
        $query = $pdo->query($sql);
        foreach($row as $query){
            echo $row['name'];
            echo "coucou";
        }
    } 
    var_dump($_SESSION['email']);
    

    if (isset($_POST['emailUser']) && $_POST['pswUser']) {
        $_SESSION['email'] = $_POST['emailUser'];
        $_SESSION['password'] = $_POST['pswUser'];
        //connexion($_SESSION['email'],$_SESSION['password']);
        echo "coucou";
    }

    
    ?>

    
    
?>