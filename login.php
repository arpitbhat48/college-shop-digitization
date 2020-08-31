<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Login Page</title>

	<link rel="stylesheet" href="styles/login.css">
</head>

<body>
	<?php
	$PAGE = "login";
	require("./partials/header/header.php");
	?>

	<h1>Log In</h1>
	<div class="centre">
		<form action="#" method="POST">
			<div class="roll">
				<label>Roll Number
					<input type="text" class="inputs" name="roll" required>
				</label>
			</div>
			<div class="pwd">
				<label>Password
					<a class="forgot" href="#">Forgot Password</a>
					<input type="password" class="inputs" name="password" required>
				</label>

			</div>
			<div class="buttons">
				<a href="registration.php">
					<input class="btn" type="button" value="Register">
				</a>
				<input class="btn" type="submit" value="Log In">
			</div>
		</form>
	</div>

	<?php
	require("./partials/footer/footer.php");
	?>
</body>

</html>