<?php
session_start();
include('../Includes/header.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<style type="text/css">
		body {
			font-family: Arial;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			font-size: 1.25em;
			background-color: white;
			margin-left: 10%;
			margin-top: 2%;
			width: 80%;
			height: 100%;
			color: black;
			background-color: rgba(240, 240, 240, 0.8);
			border-radius: 10px;
			box-shadow: 8px 8px 16px 0px rgba(0, 0, 0, 0.6);
			border-radius: 10px;
		}

		form input {
			height: 25px;
			width: 300px;
			border-bottom: 10px;
			border-radius: 10px;
		}
	</style>
</head>

<body>
	<form action="register.php" method="post">
		<h1>Register</h1>
		<?php
		if (isset($_GET['error'])) {
			$error = $_GET['error'];
			if ($error == 'emptyfields') {
				echo "<p>Please fill out all fields.</p>";
			} else if ($error == 'invalidusername') {
				echo "<p>Username is invalid.</p>";
			} else if ($error == 'invalidemail') {
				echo "<p>Email is invalid.</p>";
			} else if ($error == 'invalidemailusername') {
				echo "<p>Username and email is invalid.</p>";
			} else if ($error == 'invalidpwd') {
				echo "<p>Passwords do not match.</p>";
			} else if ($error == 'sqlerror') {
				echo "<p>SQL error.</p>";
			} else if ($error == 'usertaken') {
				echo "<p>Username has already been taken.</p>";
			}
		} else if (isset($_GET['signup'])) {
			if ($_GET['signup'] == 'success') {
				echo "<p>Signup success.</p>";
			}
		}

		?>
		Type: <select name="type">
			<option value="0">User</option>
			<option value="1">Admin</option>
		</select>
		Email: <input type="email" name="email" placeholder="Email" value="<?php if (isset($_GET['email'])) {
																				echo $_GET['email'];
																			} ?>"><br>
		Username: <input type="text" name="username" placeholder="Username" value="<?php if (isset($_GET['username'])) {
																						echo $_GET['username'];
																					} ?>"><br>
		Password: <input type="password" name="pwd" placeholder="Password"><br>
		Confirm Password: <input type="password" name="pwdRepeat" placeholder="Confirm Password"><br>
		First Name: <input type="text" name="firstName" placeholder="First Name" value="<?php if (isset($_GET['firstName'])) {
																							echo $_GET['firstName'];
																						} ?>"><br>
		Last Name: <input type="text" name="lastName" placeholder="Last Name" value="<?php if (isset($_GET['lastName'])) {
																							echo $_GET['lastName'];
																						} ?>"><br>
		Birth Date: <input type="date" name="birthDate" placeholder="Birth Date"><br>
		<input type="submit" name="register" value="Register">
	</form>

</body>

<?php
// include('footer.php');
?>

</html>