 <?php 
 	if(isset($_POST['upload'])){
 		require('../Includes/configDB.php');
 		$username = $_SESSION['username'];
 		$password = $_SESSION['password'];
 		$name = $_FILES['fileUpload']['name'];
 		$img_data = addslashes(file_get_contents($_FILES['fileUpload']['tmp_name']));
		$img_size = getimagesize($_FILES['fileUpload']['tmp_name'])['mime'];
		$img_type = explode("/", $img_size);
		$img_ext = strtolower(end($img_type));

		var_dump($img_size);
 		if(!file_exists('uploads')){
 			mkdir('uploads');
 		}

 		$targetdir = "uploads/";
 		$targetfile = $targetdir . "/" . "$username" . "." . $img_ext;

 		
 		$sql = "UPDATE users SET ProfilePicture='$img_data', ProfilePictureType='$img_ext' WHERE username='$username'";
 		$query = mysqli_query($conn, $sql);

 		if($query){
 			move_uploaded_file($_FILES['fileUpload']['tmp_name'], $targetfile);
 			header('location: index.php?update=success');
 		} else {
 			echo mysqli_error($conn);
 		}
 	}

  ?>

