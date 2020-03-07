<?php 
	$username = $_SESSION['username'];
 	$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
 	$query = mysqli_query($conn, $sql);

 	if($query){
 		$row = mysqli_fetch_assoc($query);
 		$userID = $row['UserID'];
	}
 ?>