<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="loginStyle.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<div style="width: 50%; margin: 0 auto; text-align: center;"><img src="https://media.discordapp.net/attachments/936584358654005321/1072595784043868261/icons8-nom-100.png"></div>
			<h1>Login</h1>
			<form action="loginScript.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<a href="register.php">Inscription</a>
				<input type="submit" value="Login">
			</form>
		
		</div>
	</body>
</html>