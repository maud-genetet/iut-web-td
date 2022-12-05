<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies et Sesssion</title>
    <link rel="stylesheet" href="style.css">

</head>
<body><br>
<a id='index' href="index.php">Index</a>

    <h1>TD5: Cookies et Sesssion</h1>
    <br>
    <h2>Incrémentation</h2>

<?php
// Initialise le système de sessions
session_start();

if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count']=0;
}
echo "Je t'ai vu ".$_SESSION['count']." fois !";