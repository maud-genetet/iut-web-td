<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout User</title>
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
    $sql = "SELECT id, name FROM country";
    $query = $pdo->query($sql);

    function ajoutUser($pdo,$nameUser,$emailUser,$pwdUser,$idpaysUser){
        $data = [
            'name' => $nameUser,
            'email' => $emailUser,
            'password' => $pwdUser,
            'country_id' => $idpaysUser
        ];
        $sql = "INSERT INTO user (name, email, password, country_id) VALUES (:name, :email, :password, :country_id)";
        $query = $pdo->prepare($sql);
        if ($query->execute($data)) {
            echo "OK!";
        } else {
            echo "Erreur!";
        }
    }
    
?>


<body><br>
    <a id='index' href="index.php">Index</a>
    <a id='retour' href="connection.php">Connexion</a>
    

    <h1>TD4 : Base de données</h1>
    <h2>Ajout user</h2>
    <br>

    <form action="" method="post">
        <label>Enter your name: </label>
        <input type="text" name="nameUser" required><br>
        <label>Enter your email: </label>
        <input type="text" name="emailUser" required><br>
        <label>Enter your password: </label>
        <input type="text" name="pswUser" required><br>
        <br><br>

        <label>Pays:</label>
        <select name="paysUser">
            <?php 
                foreach ($query as $row) {
                    echo "<option value='".$row['id']."'>".$row['name']."</option>";
                }
            ?>
            <option value='-1' >Autre</option>
            <input type="text" placeholder="Autre..." name="otherCountry" />
        </select>
        <br><br>
        <input type="submit" value="Valider">
    </form>
    <br><br>
    
    <h2>Mes utilisateurs :</h2>
    <ul>
    <?php

        $sql3 = "SELECT user.name AS 'name', country.name AS 'countryUser', user.email AS 'email', user.password AS 'password' FROM user
        LEFT OUTER JOIN country ON user.country_id=country.id";
        $query2 = $pdo->query($sql3);
        foreach ($query2 as $row) {
            echo "<li>".$row['name']."  ----   ".$row['countryUser']."   ----   ".$row['email']."  ----   ".$row['password']."</li>";
        }
    ?>
    </ul>

    <h2>Mes Pays :</h2>
    <ul>
    <?php

        $sql4 = "SELECT name FROM country";
        $query2 = $pdo->query($sql4);
        foreach ($query2 as $row) {
            echo "<li>".$row['name']."</li>";
        }
    ?>
    </ul>

    <br>

    
    <?php 
        

        if (isset($_POST['nameUser']) && $_POST['paysUser']!='-1') {
            ajoutUser($pdo,$_POST['nameUser'],$_POST['emailUser'],$_POST['pswUser'],$_POST['paysUser']);
        }

        else if (isset($_POST['otherCountry']) && isset($_POST['paysUser']) && $_POST['paysUser']=='-1') {
            $data = [
                'nameCountry' => $_POST['otherCountry'],
                
            ];
            $sql = "INSERT INTO country (name) VALUES (:nameCountry)";
            $query = $pdo->prepare($sql);
            $query->execute($data); 
            ajoutUser($pdo,$_POST['nameUser'],$_POST['emailUser'],$_POST['pswUser'],$pdo->lastInsertId());
        }
    ?>
    

</body>
</html>