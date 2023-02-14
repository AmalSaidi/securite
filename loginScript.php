<?php

//  connection à la database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "securiteprojet";


//  crée la connection
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
    // get le "salt" et le mot de passe hashé à partir de la database
    $sql = "SELECT salt, password_hash FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $salt, $password_hash);
    if (!mysqli_stmt_fetch($stmt)) {
        echo "Error: User not found";
        exit;
    }

    // vérifie si le mot de passe est correct
    if (password_verify($password . $salt, $password_hash)) {
        echo "Login successful";
        $_SESSION['loggedin'] = TRUE;
        // commence une session
        session_start();
        $_SESSION["username"] = $username;
        // rediriger vers la page home
        header("Location: home.php");
        exit;
    } else {
        echo "Error: Incorrect password";
    }
}

mysqli_close($conn);

?>