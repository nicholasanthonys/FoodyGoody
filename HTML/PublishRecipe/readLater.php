<link rel="stylesheet" type="Text/css" href="../../css/readLater.css" />

<?php
require('../includes/configDB.php');
require('../includes/header.php');
$sql = "CREATE TABLE readlater(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), UserID INT, RecipeID INT)";
$query = $conn->query($sql);
if ($query) {
	echo "Table created successfully!";
}

if (isset($_GET['userID'])) {
	$uid = $_GET['userID'];
	$sql = "SELECT * FROM users WHERE UserID='$uid' LIMIT 1";
	$query = $conn->query($sql);
	$row = mysqli_fetch_assoc($query);
	$username = $row['Username'];
} else {
	$uid = $userID;
}

$recipes = array();
$sql = "SELECT * FROM readlater WHERE UserID='$uid'";
$query = $conn->query($sql);
if ($query) {
	while ($row = mysqli_fetch_assoc($query)) {
		$recipes[] = $row['RecipeID'];
	}
}

echo '<h1 style="text-align: center; color: rgba(240, 240, 240, 0.8);">' . $username . '\'s favorites</h1>';
if ($_SESSION['username'] == $username) {
	echo '<form action="readLaterDelete.php" method="post">';
} else {
	echo '<form action="readLaterAppend.php" method="post">';
}
echo "<div id=\"list\">";
if (count($recipes) != 0) {

	foreach ($recipes as $a) {
		$sql = "SELECT * FROM recipes WHERE RecipeID='$a' LIMIT 1";
		$query = $conn->query($sql);
		while ($row = mysqli_fetch_row($query)) {
			$recipeID = $row[0];

			echo "<div class=\"recipe\" >";
			echo "<a href=\"display.php?recipeID=$recipeID\">";

			if (isset($row[3])) {
				echo " <img src=\"" . $row[3] . "\" width=\"200px\" height=\"200px\"/>";
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
			if ($_SESSION['username'] == $username) {
				echo "<input type=\"checkbox\" name=\"markerDelete[]\" value=\"$recipeID\">";
			} else {
				echo "<input type=\"checkbox\" name=\"marker[]\" value=\"$recipeID\">";
			}
			echo "</div>";
		}
	}
	echo "</div>";
	if ($_SESSION['username'] == $username) {
		echo '<center><input class= "delete" type="submit" name="delete" value="Delete"></center>';
	} else {
		echo '<center><input class= "delete" type="submit" name="delete" value="Read later"></center>';
	}

	echo "</form>";
} else {
	echo "Start adding your favorite recipes!";
}
