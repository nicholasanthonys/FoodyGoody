<?php 
	
	if (isset($_POST['register'])){
		
		require('../includes/configDB.php');
		
		$type = $_POST['type'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$pwdRepeat = $_POST['pwdRepeat'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$birthDate = $_POST['birthDate'];

		if(empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) || empty($firstName) || empty($lastName) || empty($birthDate)){
			header('location: index.php?error=emptyfields&email=' . $email . '&username=' . $username . '&firstName=' . $firstName . '&lastName=' . $lastName);
			exit();
		}  else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $username)){
			header('location: index.php?error=invalidemailusername' . '&firstName=' . $firstName . '&lastName=' . $lastName);
			exit();
		} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header('location: index.php?error=invalidemail&username=' . $username . '&firstName=' . $firstName . '&lastName=' . $lastName);
			exit();
		} else if(!preg_match("/^[a-zA-Z]*$/", $username)){
			header('location: index.php?error=invalidusername&email=' . $email . '&firstName=' . $firstName . '&lastName=' . $lastName);
			exit();
		} else if ($pwd!=$pwdRepeat) {
			header('location: index.php?error=invalidpwd&username=' . $username . '&email=' . $email . '&firstName=' . $firstName . '&lastName=' . $lastName);
		} else {
			$sql = "SELECT * FROM users WHERE Username=? LIMIT 1";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header('location: index.php?error=sqlerror');
				exit();
			} else {
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$result = mysqli_stmt_num_rows($stmt);
				if($result>0){
					header('location: index.php?error=usertaken&email=' . $email . '&firstName=' . $firstName . '&lastName=' . $lastName);
					exit();
				} else {
					$sql = "INSERT INTO users(Type, Email, Username, Password, FirstName, LastName, BirthDate) VALUES(?,?,?,?,?,?,?)";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt, $sql)){
						header('location: index.php?error=sqlerror');
						exit();
					} else {
						$pwdHashed = md5($pwd);
						mysqli_stmt_bind_param($stmt, "sssssss", $type, $email, $username, $pwdHashed, $firstName, $lastName, $birthDate);
						mysqli_stmt_execute($stmt);

						//set default profile picture
						$defaultPath = '../data/defaultProfile.jpg';
						$f = fopen($defaultPath , 'rb');
						$img_ext = pathinfo($defaultPath, PATHINFO_EXTENSION);
						$contents = fread($f, filesize($defaultPath));
						$img_data = addslashes(file_get_contents($defaultPath));
						fclose($f);

						$sql = "SELECT * FROM users ORDER BY UserID DESC LIMIT 1";
						$query = $conn->query($sql);
						if($query){
							$row = mysqli_fetch_row($query);
							$userID = $row[0];
						}

						$sql = "UPDATE users SET ProfilePicture='$img_data', ProfilePictureType='$img_ext' WHERE UserID='$userID'";
						$query = $conn->query($sql);

						if(!$query){
							echo mysqli_error($conn);
						}

						$f = fopen('../ProfilePictures/' . $userID . '.' . $img_ext, 'wb');
						fwrite($f, $contents); 
						fclose($f);
						header('location: ../Login/index.php?signup=success');
						exit();
					}
				}
			}
			

		}


	}
 ?>