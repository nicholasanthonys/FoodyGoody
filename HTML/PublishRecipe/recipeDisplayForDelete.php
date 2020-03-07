

<?php
require('../includes/configDB.php');

$sql = "SELECT * FROM recipes ";

if (isset($_GET['q']) && $_GET['q'] != 'undefined') {
	$q = $_GET['q'];
	$sql .= " WHERE Judul LIKE " . "'%$q%'";
}

if (isset($_GET['category']) && $_GET['category'] != 'undefined') {
	$category = $_GET['category'];
	if (isset($_GET['q']) && $_GET['q'] != 'undefined') {
		$sql .=  " AND Category='$category' ";
	} else {
		$sql .=  " WHERE Category='$category' ";
	}
}

if (isset($_GET['sort']) && $_GET['sort'] != 'undefined') {
	$sort = $_GET['sort'];
	if ($sort == 'ratingASC') {
		$a = "ORDER BY Rating ASC";
		$sql .= $a;
	} else if ($sort == 'ratingDESC') {
		$a = "ORDER BY Rating DESC";
		$sql .= $a;
	} else if ($sort == 'viewsASC') {
		$a = "ORDER BY Views ASC";
		$sql .= $a;
	} else if ($sort == 'viewsDESC') {
		$a = "ORDER BY Views ASC";
		$sql .= $a;
	}
}

if (isset($_GET['quantity']) && $_GET['quantity'] != 'undefined') {
	$quantity = $_GET['quantity'];
} else {
	$quantity = 5;
}
$sql .= " LIMIT $quantity ";


#var_dump($sql);
$query = $conn->query($sql);
if ($query) {
	echo '<form action="delete.php" method="post">';
	echo "<div id=\"list\">";
	while ($row = mysqli_fetch_row($query)) {
		$sql = "SELECT * FROM users WHERE UserID='$row[5]' LIMIT 1";
		$q = $conn->query($sql);
		$res = mysqli_fetch_assoc($q);
		$recipeID = $row[0];
		echo "<div class=\"recipe\">";

		if (isset($row[3])) {
			#echo "<div class=\"recipe\" style=\"background:url('".$row[3]."');\">";
			echo "<a href=\"display.php?recipeID=$recipeID\"><img src=\"" . $row[3] . "\" width=\"200px\" height=\"200px\"/></a>";
		} else {
			$default = '..\\Data\\defaultCover.jpg';
			#echo "<div class=\"recipe\" style=\"background:url(\"".$default."\");\">";
			echo "<a href=\"display.php?recipeID=$recipeID\"><img src=\"" . $default . "\" width=\"200px\" height=\"200px\"/></a>";
		}
		echo "<a href=\"../Profile/displayProfile.php?userID=" . $row[5] . "\">";
		echo '<img style="border:0; border-radius:30px; text-align:center;" width="50px" height="50px" src="data:image/' . $res['ProfilePictureType'] . ';base64,' . base64_encode($res['ProfilePicture']) . '"/></a>';
		echo "<a>Author:" .  $row[4] . "</a>";
		echo "<div class=\"recipesText\">";
		echo "<span style=\"font-size: 1.25em\">$row[2]</span>";
		echo "<span>Views: $row[6]</span>";
		echo "<span>Rating: $row[7]</span>";
		echo "<input type=\"checkbox\" name=\"markerDelete[]\" value=\"$recipeID\">";
		#echo "<a id='read_more' href=\"display.php?recipeID=$recipeID\">Read More</a>";
		echo "</div>";
		echo "</div>";
	}
	echo "</div>";
	echo "<input  style=\"cursor: pointer;\" class=\"submit\" type=\"submit\" name=\"delete\" value=\"DELETE RECIPEr\">";
	echo "</form>";
} else {
	echo mysqli_error($conn);
}

?>
