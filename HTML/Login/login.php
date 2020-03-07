<?php
session_start();
if (isset($_POST['login'])) {
	require("../Includes/configDB.php");

	$sql = "SELECT * FROM users WHERE username=? AND password=? LIMIT 1";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('location: index.php?error=mysqlerror');
		exit();
	} else {
		$username = $_POST['username'];
		$pwd = $_POST['password'];
		$pwd_hashed = md5($pwd);
		$remember = $_POST['remember'];
		mysqli_stmt_bind_param($stmt, "ss", $username, $pwd_hashed);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		if (mysqli_stmt_num_rows($stmt) == 1) {
			if (isset($remember)) {
				setcookie("username", $username, time() + 30);
				setcookie("password", $pwd, time() + 30);
			}
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $pwd;
			header('location: ../Home.php?login=success');
			exit();
		} else {
			header('location: index.php?error=usernotfound');
		}
	}
}
