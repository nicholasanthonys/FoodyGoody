<?php
	require('../includes/configDB.php'); 
	require('../includes/getUserID.php');
	require('../includes/header.php');
	$sql = "CREATE TABLE history(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), UserID INT, RecipeID INT)";
	$query = $conn->query($sql);
	if ($query) {
		echo "Table created successfully!";
	}
	
	$recipes = array();
	$sql = "SELECT * FROM history WHERE UserID='$userID'";
	$query = $conn->query($sql);
	if($query){
		while($row = mysqli_fetch_assoc($query)){
			$recipes[]=$row['RecipeID'];
		}
	}
	echo '<center>';
	echo '<h1 style="color: rgba(240, 240, 240, 0.8);">' . $username . '\'s history</h1>';
	echo '</center>';
	echo "<div id=\"list\">";
	for($i=count($recipes)-1;$i>=0;$i--){
		$sql = "SELECT * FROM recipes WHERE RecipeID='$recipes[$i]' LIMIT 1";
		$query = $conn->query($sql);
		while($row = mysqli_fetch_row($query)){
			$recipeID = $row[0];
			echo "<a class=\"recipe\" href=\"display.php?recipeID=$recipeID\">";

			if (isset($row[3])) {
				echo "<img src=\"" . $row[3] . "\" width=\"200px\" height=\"200px\"/>";
			} else {
				$default = '..\\Data\\defaultCover.jpg';
				echo "<img src=\"" . $default . "\" width=\"200px\" height=\"200px\"/>";
			}
			echo "<span style=\"font-size: 1.25em\">$row[2]</span>";
			echo "<span>RecipeID: $row[0]</span>";
			echo "<span>Category: $row[1]</span>";
			echo "<span>Author: $row[4]</span>";
			echo "<span>Author ID: $row[5]</span>";
			echo "<span>Views: $row[6]</span>";
			echo "<span>Rating: $row[7]</span>";
			echo "</a>";
		}
	}
	echo "</div>";
