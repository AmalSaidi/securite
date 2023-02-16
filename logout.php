<?php

session_start();

session_destroy();

// redirige vers la page du login

header('Location: index.php');
die();

?>