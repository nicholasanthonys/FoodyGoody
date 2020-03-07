<script type="text/javascript">
	function follow() {

	}
</script>
<link rel="stylesheet" type="Text/css" href="../../css/displayProfile.css" />

<?php
require('../includes/configDB.php');
require('../includes/header.php');

$uidDisplay = $_GET['userID'];

$sql = "SELECT * FROM users WHERE UserID='$uidDisplay' LIMIT 1";
$query = mysqli_query($conn, $sql);
echo "<div class = 'aUser'>";
if ($query) {
	$row = mysqli_fetch_assoc($query);
	$email = $row['Email'];
	$firstName = $row['FirstName'];
	$lastName = $row['LastName'];
	$birthDate = $row['BirthDate'];
	$username = $row['Username'];
	echo '<img width="100px" height="100px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode($row['ProfilePicture']) . '"/>';
	echo "<p>Username: $username</p>";
	echo "<p>First Name: $firstName</p>";
	echo "<p>Last Name: $lastName</p>";
	echo "<p>Birth Date $birthDate</p>";
	echo '
		  	<p><a style="color: black;" href="../PublishRecipe/readLater.php?userID=' . $uidDisplay . '">Favorites</a></p>
		  	<p><a style="color: black;" href="../PublishRecipe/myRecipes.php?userID=' . $uidDisplay . '">Recipes</a></p>';
}
echo "</div>";
?>