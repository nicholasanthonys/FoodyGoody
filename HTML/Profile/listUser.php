<?php
require('../includes/configDB.php');
require '../Includes/header.php';
?>

<style type="text/css">
	.delete {
		cursor: pointer;
		text-decoration: none;
		font-size: 1.5em;
		color: white;
		text-align: center;
		background-color: rgba(0, 0, 0, 0.6);
		border-radius: 30px;
		padding-left: 15px;
		padding-right: 15px;
		font-size: 45px;
		font-family: sweet;
	}

	.delete:hover {
		transition: all .5s;
		background-color: white;
		color: rgb(61, 61, 61);
	}
</style>

<?php
$sql = "SELECT * FROM users";
$query = $conn->query($sql);

if ($query) {
	echo '<form action="deleteUser.php" method="post">';
	echo '<div id="wow">';
	while ($row = mysqli_fetch_assoc($query)) {
		echo '<div class="user">';
		echo '<a href="displayProfile.php?userID=' . $row['UserID'] . '"><img width="100px" height="100px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode($row['ProfilePicture']) . '"/></a>';
		echo "<span>" . $row['Username'] . "</span>";
		echo "<span>" . $row['FirstName'] . "</span>";
		echo "<span>" . $row['LastName'] . "</span>";
		echo "<span>" . $row['BirthDate'] . "</span>";

		if (isset($userID)) {
			if ($row['UserID'] != $userID && $type == 1 && $row['Type'] == 0) {
				echo "<span>" . "<input type=\"checkbox\" name=\"markerDelete[]\" value=\"" . $row['UserID'] . "\">" . "</span>";
			}
		}
		echo '</div>';
	}
	echo '</div>';
	if ($type == 1) {
		echo '<center><input class="delete" type="submit" name="delete" value="Delete"></center>';
	}
	echo '</form>';
}
?>