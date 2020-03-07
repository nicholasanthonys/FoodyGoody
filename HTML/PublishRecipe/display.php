<?php
require('../Includes/configDB.php');
require('../Includes/header.php');

$recipeID = $_GET['recipeID'];

$sql = "CREATE TABLE history(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), UserID INT, RecipeID INT)";
$query = $conn->query($sql);
if ($query) {
	echo "Table created successfully!";
}

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
//++viewcount
$viewCount++;
$sql = "UPDATE recipes SET Views='$viewCount' WHERE RecipeID='$recipeID' ";
$query = $conn->query($sql);

if (isset($_SESSION) && !empty($_SESSION)) {
	//append to history
	$sql = "SELECT * FROM history ORDER BY ID desc LIMIT 1";
	$query = $conn->query($sql);
	if ($query) {
		$row = mysqli_fetch_assoc($query);
		$tempRecipeID = (int)$row['RecipeID'];
		$sql = "DELETE FROM history WHERE UserID='$userID' AND RecipeID='$recipeID'";
		$query = $conn->query($sql);
	} else {
		echo mysqli_error($conn);
	}
	$sql = "INSERT INTO history(UserID, RecipeID) VALUES('$userID', '$recipeID')";
	$query = $conn->query($sql);
}

echo "<div id=\"wow\">";
echo "<div id=\"title\">";
echo "<img width=\"300px\" height=\"300px\" src=\"$coverPath\">";
$target_dir = 'recipes/' . $recipeID . '/';
$xml = simplexml_load_file($target_dir . 'recipe.xml');


echo "<h1>$xml->title</h1>";
echo "<p>$xml->subtitle</p>";
?>

<?php
if (isset($_GET['publish'])) {
	if ($_GET['publish'] == 'success') {
		echo "Edit successful.";
	} else {
		echo "Error editing recipe.";
	}
}
if (!empty($_SESSION)) {
	echo '
		<form action="rate.php?recipeID=' . $recipeID . '" method="post">
		1 <input type="radio" name="rate" value="1" checked>
		2 <input type="radio" name="rate" value="2">
		3 <input type="radio" name="rate" value="3">
		4 <input type="radio" name="rate" value="4">
		5 <input type="radio" name="rate" value="5">
		<input type="submit" name="submit" value="Rate">
		</form>';
} else {
	echo "<p>You need to login to rate a recipe.</p>";
	echo "<p>Click <a href=\"../Login/index.php\">here </a>to login.</p>";
}

?>

<?php
if (isset($userID)) {
	if ($userID == $penulisID) {
		echo "<a href=\"edit.php?recipeID=" . $recipeID . "\">Edit</a>";
	}
}
?>

<?php
echo "</div>";

echo "<div id=\"description\">";
$ingredients = $xml->ingredient;
echo "<p>Ingredients:</p>";
echo "<ul>";
foreach ($ingredients as $ingredient) {
	echo "<li>" . htmlspecialchars($ingredient) . "</li>";
}
echo "</ul>";

$methods = $xml->method;
echo "<p>Methods:</p>";
echo "<ol>";
for ($i = 1; $i <= count($methods); $i++) {
	$method = $methods[$i - 1];
	echo "<li>" . htmlspecialchars($method) . "</li>";
	if (file_exists($target_dir . "$i.jpg")) {
		echo "<img width=\"200px\" height=\"150px\" src=\"" . $target_dir . "$i.jpg\">";
	} else {
		echo "<img src=\"" . '../Data/defaultMethod' . ".jpg\">";
	}
}
echo "</ol>";
echo "</div>";
echo "</div>";


//COMMENTS

?>

<script type="text/javascript">
	function showComments(str, str2, str3) {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('comments').innerHTML = this.responseText;
			}
		}

		xhttp.open("GET", "comment.php?recipeID=" + str + "&comment=" + str2 + "&quantity=" + str3, true);
		xhttp.send();

	}

	function getComment() {
		return document.getElementById('comment').value;
	}

	var i = 2;

	function more(str) {
		i += 2;
		showComments(str, undefined, i);
	}

	function less(str) {
		i = i - 2;
		showComments(str, undefined, i);
	}
</script>

<div class = "commentsection" style="background-color:white">
<h3>COMMENTS</h3>
<?php
echo '<a style="cursor: pointer;" onclick="more(' . $recipeID . ')">Show more comments</a>';
echo '<a style="cursor: pointer;" onclick="less(' . $recipeID . ')">Show less comments</a>';
?>
<div id="comments">
	<?php
	echo '<script type="text/javascript">showComments(' . $recipeID . ',undefined,2)</script>';
	?>
</div>

<!--  <form onsubmit="showComments()" method="post">
 	<input type="text" width="100px" name="comment">
 </form> -->
<!--  -->


<iframe name="votar" style="display:none;"></iframe>
<?php
echo  '<form onsubmit="showComments(' .  $recipeID . ', getComment()' . ',2);" class="addComment" action="comment.php?recipeID=' . $recipeID .  '"  method="post" target="votar">';
if (!empty($_SESSION)) {

	#display profile picture
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		$row = mysqli_fetch_assoc($query);

		echo '<img width="50px" height="50px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode($row['ProfilePicture']) . '"/>';
		echo $_SESSION['username'];
		echo '<textarea id="comment" rows="10" cols="50" name="comment"></textarea>
											<input type="submit" name="post" value="Post">';
	}
} else {
	echo "<p>You need to login to write a recipe.</p>";
	echo "<p>Click <a href=\"../Login/index.php\">here </a>to login.</p>";
}
?>

</div>
</form>
