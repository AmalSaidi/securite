<?php

// connection à la database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "securiteprojet";

// crée la connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// vérifie la connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get l'identifiant et le mot de passe du formulaire
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Validation de l'identifiant et le mot de passe
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
        echo "Error: Invalid username";
        exit;
    }
    if (strlen($password) < 8) {
        echo "Error: Password must be at least 8 characters long";
        exit;
    }

    // vérifie si l'identifiant existe dejà
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "Error: username already exists";
        exit;
    }
    mysqli_stmt_close($stmt);

    // générer le hachage du mot de passe
    $salt = uniqid(mt_rand(), true);
    $password_hash = password_hash($password . $salt, PASSWORD_DEFAULT);

    // Ajoute le nouvel identifiant à la database
    $sql = "INSERT INTO users (username, salt, password_hash) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $username, $salt, $password_hash);
    if (mysqli_stmt_execute($stmt)) {
        echo "Registration successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);

?>