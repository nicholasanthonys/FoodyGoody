<?php
require('../Includes/configDB.php');
$q = $_GET['q'];
$sql = "SELECT * FROM recipes WHERE Category = '$q'";
$query = $conn->query($sql);
if ($query) {
    $list = array();
    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['RecipeID'] == 0) {
            $list = array($row['RecipeID'] => $row['Judul']);
        } else {
            $list[$row['RecipeID']] = $row['Judul'];
        }
    }
}

$hint = "";
if (count($list) > 0) {
    foreach ($list as $id => $recipe) {
        if ($hint == "") {
            $hint = "<a href=\"display.php?recipeID=" . $id . "\">" . $recipe . "</a>";
        } else {
            $hint .= "<BR> <a href=\"display.php?recipeID=" . $id . "\">" . $recipe . "</a>";
        }
    }
}




echo $hint == "" ? "no suggestion " : $hint;
