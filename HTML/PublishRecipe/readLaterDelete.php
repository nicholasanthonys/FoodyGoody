<?php 
	require('../includes/configDB.php'); 
	require('../includes/getUserID.php');

 	if(isset($_POST['delete'])){
 		$recipeIDs = $_POST['markerDelete'];
		foreach($recipeIDs as $recipeID){
			$sql = "DELETE FROM readlater WHERE UserID='$userID' AND RecipeID='$recipeID'";
			$query = $conn->query($sql);
			
		}	
		if($query){
			header('location: notif.php?msg=readLaterAppendSuccess');
		}

 	}
 	header('location: readlater.php');
 	exit();
