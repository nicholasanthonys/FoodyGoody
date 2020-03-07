<?php 
	require('../includes/configDB.php'); 
	require('../includes/getUserID.php');

	$sql = "CREATE TABLE rating(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), UserID INT, RecipeID INT, Rating INT)";
	$query = $conn->query($sql);
	if ($query) {
		echo "Table created successfully!";
	}

	if (isset($_SESSION) && !empty($_SESSION)) {
		
		$recipeID = $_GET['recipeID'];
		$rating = $_POST['rate'];
		$sql = "SELECT * FROM rating ORDER BY ID desc LIMIT 1";
		$query = $conn->query($sql);
		if($query){
			$row = mysqli_fetch_assoc($query);
			$tempRecipeID = (int)$row['RecipeID'];
			$sql = "DELETE FROM rating WHERE UserID='$userID' AND RecipeID='$recipeID'";
			$query = $conn->query($sql);
		} else {
			echo mysqli_error($conn);
		}

		$sql = "INSERT INTO rating(UserID, RecipeID, Rating) VALUES('$userID', '$recipeID', '$rating')";
		$query = $conn->query($sql);

		if(!$query){
			echo mysqli_error($conn);
		}
		$sql = "SELECT * FROM rating WHERE RecipeID='$recipeID'";
		$query = $conn->query($sql);

		if($query){
			$result = 0;
			$count = 0;
			while($row = mysqli_fetch_assoc($query)){
				$result += $row['Rating'];
				$count++;
			}
			$result = (double)($result/$count);
		} else {
			$result = 0;
			$count = 0;
		}

		$sql = "UPDATE recipes SET Rating='$result' WHERE RecipeID='$recipeID'";
		$query = mysqli_query($conn, $sql);
		if(!$query){
			mysqli_error($conn);
		} 
		header('location: notif.php?msg=readLaterAppendSuccess');
		exit();
	} else {
		header('location: ../login');
		exit();
	}
