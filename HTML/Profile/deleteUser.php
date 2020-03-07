<link rel="stylesheet" type="text/css" href="../../CSS/readlater.css">

<?php 
	require('../includes/configDB.php'); 
	require('../includes/getUserID.php');

 	if(isset($_POST['delete'])){
 		$userIDs = $_POST['markerDelete'];
		foreach($userIDs as $userID){
			$sql = "DELETE FROM users WHERE UserID='$userID'";
			$query = $conn->query($sql);
		}	

		if($query){
			header('location: ../notif.php?msg=deleteUserSuccess');
		}

 	}
 	
 	exit();
 ?>