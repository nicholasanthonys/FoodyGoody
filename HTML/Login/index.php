<!DOCTYPE html>
<?php 
	include('../Includes/header.php');
 ?>
<html>
<head>
	<style type="text/css">
		body{
			font-family: Arial;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding:;
			margin-left: 10%;
			margin-top:15%;
			width: 80%;
			height: 100%;
			border-radius:10px;
		}

		form .a{
			height: 25px;
			width: 300px;
			border-bottom: 10px;
			border-radius:10px;
			padding: 5px 0px 5px 10px;
		}		
	</style>
	<title></title>
</head>
<body>

<?php 


	if (isset($_GET['error'])) {
		$error = $_GET['error'];
		if($error=='usernotfound'){
			echo "<p>Username or Password is incorrect.</p>";
		} else if($error=='mysqlerror'){
			echo "<p>MySQL error.</p>";
		}
	} 
	if(isset($_GET['login'])){
		$login = $_GET['login'];
		if($login=='success'){
			echo "<p>You are logged in</p>";
		}
	}
	
 ?>

 <?php 
 	
  ?>
<form action="login.php" method="post" style="background-color: rgba(240, 240, 240, 0.8); box-shadow: 8px 8px 16px 0px rgba(0,0,0,0.6);
}background: transparent;">
	<h1>Login</h1>
	<?php 
		if (isset($_GET['signup'])) {
			if($_GET['signup']=='success'){
				echo 'Sign up successful! Please login to continue.';
			}
	}
	 ?>
	<input class="a" type="text" name="username" placeholder="Username" value="<?php if (isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>"><br>
	<input class="a" type="password" name="password" placeholder="Password" value="<?php if (isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>"><br>
	<p><input type="checkbox" name="remember" style="max-width: 25px; width: 25px;">Remember me</p>
	<input class="logintext" type="submit" name="login" value="Login">
	<p>Don't have an account? <a href="../Register/index.php">Sign up.</a></p>
</form>

</body>
</html>