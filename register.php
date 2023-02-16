<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="registerStyle.css" rel="stylesheet" type="text/css">
    </head>
	<body>
		<div class="register">
		<div style="width: 50%; margin: 0 auto; text-align: center;"><img src="https://media.discordapp.net/attachments/936584358654005321/1072595784043868261/icons8-nom-100.png"></div>
			<h1>Register</h1>
			<form action="registerScript.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<a href="index.php">Se connecter</a>
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html>