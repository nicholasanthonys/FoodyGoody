<?php
	require('../Includes/configDB.php');
	$recipeID = $_GET['recipeID'];

	$sql = "CREATE TABLE comments(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), UserID INT, RecipeID INT, Comment VARCHAR(64))";
	$query = $conn->query($sql);
	if ($query) {
		echo "Table created successfully!";
	}

	//insert comment
	if(isset($_GET['comment']) && $_GET['comment']!='undefined' && !empty($_GET['comment'])){
		$comment = $_GET['comment'];
		$sql = "INSERT INTO comments(UserID, RecipeID, Comment) VALUES('$userID', '$recipeID', '$comment')";
		$query = $conn->query($sql);
	}

	$quantity = (int)$_GET['quantity'];
	//display comments
	$sql = "SELECT * FROM comments WHERE RecipeID='$recipeID' ORDER BY ID DESC LIMIT $quantity";
	$query = $conn->query($sql);
	if($query){
		$uids = array();
		$comments = array();
		while($row = mysqli_fetch_assoc($query)){
			$uids[] = $row['UserID'];
			$comments[] = $row['Comment'];
		}
	}

	for ($i=count($uids)-1; $i>=0;$i--) {
		$sql = "SELECT * FROM users WHERE UserID='" . $uids[$i] . "' LIMIT 1";
		$query =  $conn->query($sql);
		while($row = mysqli_fetch_assoc($query)){
			echo '<img width="50px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode( $row['ProfilePicture'] ).'"/>';
			echo $row['Username'];
		}
		echo ": ";
		echo $comments[$i];
		echo "<br>";
	}
 ?>
