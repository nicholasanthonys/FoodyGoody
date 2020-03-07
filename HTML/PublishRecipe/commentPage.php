<?php
	echo  '<form action="commentDisplay.php?recipeID=' . $recipeID .  '" method="post">';
		if (!empty($_SESSION)){
								 	echo '<a href ="../Profile/index.php">
									<p class="textnav">'. $_SESSION['username'];
									#display profile picture
								 	$username = $_SESSION['username'];
								 	$password = $_SESSION['password'];
								 	$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
								 	$query = mysqli_query($conn, $sql);

								 	if($query){
								 		$row = mysqli_fetch_assoc($query);

								 		echo '<img width="50px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode( $row['ProfilePicture'] ).'"/>';
									}
								 	echo  '</p>
									</a>';;
								 } else {
								 	echo "<p>You need to login to write a recipe</p>";
									echo "<p>Click <a href=\"../Login/index.php\">here </a>to login.</p>";
								 }
	 ?>
	<input type="text" width="100px" height="100px" name="comment">
	<input type="submit" name="post" value="Post">
</form>
