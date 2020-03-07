<?php
require('../includes/configDB.php');
require('../includes/getUserID.php');
if (isset($_SESSION) && !empty($_SESSION)) {
	# code...
	$sql = "CREATE TABLE readlater(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), UserID INT, RecipeID INT)";
	$query = $conn->query($sql);
	if ($query) {
		echo "Table created successfully!";
	}

	$recipeIDs = $_POST['marker'];
	foreach ($recipeIDs as $recipeID) {
		$sql = "INSERT INTO readlater(UserID, RecipeID) VALUES('$userID', '$recipeID')";
		$query = $conn->query($sql);
	}

	header('location: notif.php?msg=readLaterAppendSuccess');
	exit();
} else {
	header('location: ../login');
}
