<?php 
	require('../Includes/configDB.php');
	require('../Includes/getUserID.php');
	echo '<img width="100px" height="100px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode( $row['ProfilePicture'] ).'"/>';
 	echo ' <form action="upload.php" method="post" enctype="multipart/form-data">
		 	<input type="file" name="fileUpload">
		 	<inpt type="submit" name="upload" value="Upload File">
		 </form>';
 ?>