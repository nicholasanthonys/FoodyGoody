<html>
	<head>
		<link rel="stylesheet" type="Text/css" href="../../CSS/profileIndex.css" />
	</head>

	<body>
		<?php 
			require('../Includes/configDB.php');
			require '../Includes/header.php';
		?>
		<div class="profile">
			<h4> Account </h4>

			<?php
				#display profile picture
				$username = $_SESSION['username'];
				$password = $_SESSION['password'];

				$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
				$query = mysqli_query($conn, $sql);

				if ($query) {
					$row = mysqli_fetch_assoc($query);
					$email = $row['Email'];
					$firstName = $row['FirstName'];
					$lastName = $row['LastName'];
					$birthDate = $row['BirthDate'];
					$username = $row['Username'];
					echo '<img width="100px" height="100px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode($row['ProfilePicture']) . '"/>';
					echo "<p>Username: $username</p>";
					echo "<p>First Name: $firstName</p>";
					echo "<p>Last Name: $lastName</p>";
					echo "<p>Birth Date $birthDate</p>";
					echo "<a href=\"editProfile.php\">Edit Profile</a> <Br> <Br>";
				}



				?>
			<form action="logout.php" method="post">
				<input type="submit" name="logout" value="Logout">
			</form>
		</div>
	</body>
</html>