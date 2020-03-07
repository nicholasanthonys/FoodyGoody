<?php
	require('../Includes/configDB.php');

	$recipeID = $_GET['recipeID'];

	//display comments
	$sql = "SELECT * FROM comments WHERE RecipeID='$recipeID'";
	$query = $conn->query($sql);
	if($query){
		$uids = array();
		$comments = array();
		while($row = mysqli_fetch_assoc($query)){
			$uids[] = $row['UserID'];
			$comments[] = $row['Comment'];
		}
	}

	for ($i=0; $i<count($uids);$i++) {
		$sql = "SELECT * FROM users WHERE UserID='" . $uids[$i] . "' LIMIT 1";
		$query =  $conn->query($sql);
		while($row = mysqli_fetch_assoc($query)){
			echo '<img width="50px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode( $row['ProfilePicture'] ).'"/>';
			echo $row['Username'];
		}
		echo ": ";
		echo $comments[$i];
		echo "<br>";
	}
