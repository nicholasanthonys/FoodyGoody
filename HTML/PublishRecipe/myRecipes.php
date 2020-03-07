<link rel="stylesheet" type="Text/css" href="../../css/myRecipes.css" />
<?php
require('../includes/configDB.php');
require('../includes/header.php');

if (isset($_GET['userID'])) {
	$uid = $_GET['userID'];
	$sql = "SELECT * FROM users WHERE UserID='$uid' LIMIT 1";
	$query = $conn->query($sql);
	$row = mysqli_fetch_assoc($query);
	$username = $row['Username'];
} else {
	$uid = $userID;
}

echo '<h1>' . $username . '\'s recipes</h1>';
if ($_SESSION['username'] == $username) {
	echo '<form action="delete.php" method="post">';
} else {
	echo "<form action = 'readLaterAppend.php' method = 'post'>";
}

echo "<div id=\"list\">";
$sql = "SELECT * FROM recipes WHERE PenulisID='$uid'";
$query = $conn->query($sql);
if (mysqli_num_rows($query) != 0) {
	while ($row = mysqli_fetch_row($query)) {
		$recipeID = $row[0];
		echo "<div class=\"recipe\">";
		echo "<a href=\"display.php?recipeID=$recipeID\">";
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
		if ($_SESSION['username'] == $username) {
			echo "<input class = 'delete'type=\"checkbox\" name=\"markerDelete[]\" value=\"$recipeID\">";
		} else {
			echo "<input type=\"checkbox\" name=\"marker[]\" value=\"$recipeID\">";
		}
		echo "</div>";
	}

	echo "</div>";
	if ($_SESSION['username'] == $username) {
		echo '<center><input type="submit" class ="delete" name="delete" value="Delete"></center>';
	} else {
		echo "<input  style=\"cursor: pointer;\" class=\"submit\" type=\"submit\" name=\"readLater\" value=\"Read Later\">";
	}
	echo "</form>";
} else {
	echo 'Start writing recipes!';
}
