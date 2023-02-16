<?php

session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>FossLinux Home Page</title>

<link href="loginStyle.css"rel="stylesheet"type="text/css">

<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>

<body class="loggedin">

<nav class="navtop">

<div>

<h1>Home</h1>

<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>

</div>

</nav>

<div class="content">

<p>Welcome back, <?=$_SESSION['username']?>! ;)</p>

</div>

</body>

</html>