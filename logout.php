<?php

session_start();

session_destroy();

// redirige vers la page du login

header('Location: login.php');
die();

?>