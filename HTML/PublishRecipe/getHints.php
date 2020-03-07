<?php
require('../Includes/configDB.php');
$sql = "SELECT * FROM recipes";
$query = $conn->query($sql);
if ($query) {
	$list = array();
	while ($row = mysqli_fetch_assoc($query)) {
		$temp = array($row['Judul'], $row['Rating']);

		if ($row['RecipeID'] == 0) {
			$list = array($row['RecipeID'] => $row['Judul']);
		} else {
			$list[$row['RecipeID']] = $row['Judul'];
		}
	}
}

$q = $_GET['q'];

if ($q != '') {
	$hint = "";
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($list as $id => $recipe) {
		if (strlen($recipe) != 0 && stristr($q, substr($recipe, 0, $len))) {
			if ($hint == "") {
				$hint = "<a href=\"display.php?recipeID=" . $id . "\">" . $recipe . "</a>";
			} else {
				$hint .= "<BR> <a href=\"display.php?recipeID=" . $id . "\">" . $recipe . "</a>";
			}
		}
	}
}
echo $hint == "" ? "no suggestion" : $hint;
