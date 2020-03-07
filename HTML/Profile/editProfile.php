<?php
	require('../Includes/configDB.php');
	require('../Includes/getUserID.php');
	require('../includes/header.php');

	if (isset($_GET['success'])) {
		$sucess = $_GET['success'];

		if ($success = "yes") {
			echo "<center><h2> password updated </h2> </center>";
		} else {
			echo "<center><h2> password failed to update </h2> </center>";
		}
	}


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
		echo '<div class="profile">';
		echo '<img width="100px" height="100px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode($row['ProfilePicture']) . '"/>';
	}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
	<input class="upload" type="file" name="fileUpload">
	<input class="upload" type="submit" name="upload" value="Upload File">
</form>


<link rel="stylesheet" type="Text/css" href="../../css/editProfile.css" />
<form action="editProfileScript.php" method="post">
	<p><span>Email:</span> <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"></p>
	<p><span>Username:</span> <input type="text" name="username" placeholder="Username" value="<?php echo $username ?>"></p>
	<p><span>First Name:</span> <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>"></p>
	<p><span>Last Name: </span> <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>"></p>
	<p><span>Birth Date:</span> <input type="date" name="birthDate" placeholder="Birth Date" value="<?php echo $birthDate; ?>"></p>
	<p><input class="changeBiodata" type="submit" name="register" value="Register">
		<p> <a class="changepassword" href="changePassword.php"> change a password </a>
</form>

<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] = 'usertaken') {
			echo 'Username has already been taken.';
		}
	}
?>
