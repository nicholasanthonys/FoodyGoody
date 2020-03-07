<?php
require('../Includes/configDB.php');
$q = $_GET['q'];

$sql = "SELECT * FROM recipes ORDER BY Rating $q";
$query = $conn->query($sql);
if ($query) {
    $list = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $temp = array($row['Judul'], $row['Rating']);


        if ($row['RecipeID'] == 0) {
            $list = array($row['RecipeID'] => $temp);
        } else {
            $list[$row['RecipeID']] = $temp;
        }
    }



    $hint = "";
    if (count($list) > 0) {
        foreach ($list as $id => $recipe) {

            if ($hint == "") {
                $hint = "<a href=\"display.php?recipeID=" . $id . "\">" . $recipe[0] . "</a> rating " . $recipe[1];
            } else {
                $hint .= "<BR> <a href=\"display.php?recipeID=" . $id . "\">" . $recipe[0] . "</a> rating : " . $recipe[1];
            }
        }
    }




    echo $hint == "" ? "no suggestion " : $hint;
}
