<?php
require('../includes/configDB.php');
require('../includes/getUserID.php');

if (isset($_POST['delete'])) {
	$recipeIDs = $_POST['markerDelete'];
	foreach ($recipeIDs as $recipeID) {
		$sql = "DELETE FROM recipes WHERE RecipeID='$recipeID'";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			echo " $recipeID dleeted";
		} else {
			echo " cannot be deletd " . mysqli_error($conn);
		}
	}
	if ($query) {
		header('location: notif.php?msg=deleteRecipeSuccess');
	}
} else {
	echo " delete not set ";
}
//header('location: list.php');
exit();
