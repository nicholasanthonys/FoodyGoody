<!DOCTYPE html>
<html>
<?php 
	require('../Includes/configDB.php');
	require('../Includes/header.php');
	include('../Includes/header.php');
	$sql = "CREATE TABLE comments(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), UserID INT, RecipeID INT, Comment VARCHAR(64))";
	$query = $conn->query($sql);
	if ($query) {
		echo "Table created successfully!";
	} else{
		echo mysqli_error($conn);
	}
 ?>
<head>
	<title></title>
</head>
<body>
</body>
</html>