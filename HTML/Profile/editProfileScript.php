<?php 
	
	require('../includes/configDB.php');
	if (isset($_POST['register'])){
		
		
		$email = $_POST['email'];
		$username = $_POST['username'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$birthDate = $_POST['birthDate'];
	
		$sql = "SELECT * FROM users WHERE Username='$username'"; 
		$query = $conn->query($sql);
		
		$valid = true;
		if($query){
			while($row = mysqli_fetch_assoc($query)){
				if($row['UserID']!=$userID){
					$valid = false;
				}
			}

		}
			if($valid){
				$sql = "UPDATE users SET Email='$email', Username='$username', FirstName = '$firstName', LastName = '$lastName', BirthDate = '$birthDate' WHERE UserID='$userID'";
				$query = $conn->query($sql);
				$_SESSION['username'] = $username;
				header('location: notif.php?msg=updateUserSuccess');
			}
	

	}
 ?>