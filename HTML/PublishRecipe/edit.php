<?php
require('../Includes/configDB.php');
require('../Includes/header.php');

$recipeID = $_GET['recipeID'];
?>
<script type="text/javascript">
	var countIngredient = 1;
	var countMethod = 1;

	function createField(type) {
		var li = document.createElement('li');
		var input = document.createElement('input');
		input.setAttribute("type", "text");
		input.setAttribute("name", type + "[]");
		if (type == 'ingredient') {
			input.setAttribute("placeholder", "Bahan " + (++countIngredient));
			li.appendChild(input);
		} else if (type == 'method') {
			file = document.createElement('input');
			file.setAttribute("type", "file");
			file.setAttribute("name", "method" + (++countMethod));
			input.setAttribute("placeholder", "Langkah " + (countMethod));
			li.appendChild(input);
			li.appendChild(file);
		}
		document.getElementById(type).appendChild(li);
	}
</script>
<?php
//select recipe
$sql = "SELECT * FROM recipes WHERE RecipeID='$recipeID' LIMIT 1";
$query = $conn->query($sql);
if (!$query) {
	echo mysqli_error($conn);
}
$row = mysqli_fetch_assoc($query);
$penulisID = $row['PenulisID'];
$viewCount = (int)$row['Views'];
$coverPath = $row['Cover'];

echo "<div id=\"wow\">";
echo "<div id=\"title\">";
echo "<img width=\"500px\" src=\"$coverPath\">";
$target_dir = 'recipes/' . $recipeID . '/';
$xml = simplexml_load_file($target_dir . 'recipe.xml');


?>




<?php
echo "</div>";


if (isset($_SESSION) && !empty($_SESSION)) {
	echo '<form method="post" action="editScript.php?recipeID=' . $recipeID  . '" enctype="multipart/form-data" class="center">
		COVER: <input type="file" name="cover"><br>
		Category: <select name="category" placeholder="Category">
			<option>Breakfast</option>
			<option>Lunch</option>
			<option>Dinner</option>
			<option>Dessert</option>
		</select><br>
		<input type="text" name="title" placeholder="Title" value="' . $xml->title . '""><br>
		<textarea rows="20" cols="40" name="subtitle" placeholder="Subtitle">' . $xml->subtitle . '</textarea><br>';

	$ingredients = $xml->ingredient;
	echo "<p>Ingredients:</p>";
	echo "<ul id=\"ingredient\">";
	foreach ($ingredients as $ingredient) {
		echo '<li><input type="text" name="ingredient[]" placeholder="Bahan 1" value="' . $ingredient . '"></li>';
	}
	echo "</ul>";


	echo "<p>Methods:</p>";
	echo "<ol id=\"method\">";
	$methods = $xml->method;
	for ($i = 1; $i <= count($methods); $i++) {
		$method = $methods[$i - 1];
		echo '<li><input type="text" name="method[]" placeholder="Method" value="' . $method . '"><input type="file" name="method' . $i . '"></li>';
		if (file_exists($target_dir . "$i.jpg")) {
			echo "<img width=\"200px\" height=\"150px\" src=\"" . $target_dir . "$i.jpg\">";
		} else {
			echo "<img src=\"" . '../Data/defaultMethod' . ".jpg\">";
		}
	}
	echo "</ol>";

	echo '
		
		<a onClick="createField(\'method\');">+</a><br>
		<input type="submit" name="publish" value="Publish Recipe">

		</form>';
} else {
	echo "<p>You need to login to write a recipe</p>";
	echo "<p>Click <a href=\"../Login/index.php\">here </a>to login.</p>";
}

if (isset($_GET['publish'])) {
	if ($_GET['publish'] == 'success') {
		echo "Edit successful.";
	} else {
		echo "Error editing recipe.";
	}
}