<?php
require('../Includes/configDB.php');
require('../Includes/getUserID.php');

if (isset($_POST['publish'])) {
	$sql = "SELECT * FROM recipes ORDER BY RecipeID desc LIMIT 1";
	$query = $conn->query($sql);
	if ($query) {
		$row = mysqli_fetch_assoc($query);
		$recipeID = (int)$row['RecipeID'];
		$recipeID++;
	} else {
		echo mysqli_error($conn);
	}

	$category = $_POST['category'];
	$title =  htmlspecialchars($_POST['title']);
	$subtitle = htmlspecialchars($_POST['subtitle']);

	for ($i = 0; $i < count($_POST['ingredient']); $i++) {
		$_POST['ingredient'][$i] = htmlspecialchars($_POST['ingredient'][$i]);
	}
	$ingredients = ($_POST['ingredient']);
	for ($i = 0; $i < count($_POST['method']); $i++) {
		$_POST['method'][$i] = htmlspecialchars($_POST['method'][$i]);
	}
	$methods = $_POST['method'];
	var_dump($_POST['ingredient']);
	echo "<HR>";
	var_dump($_POST['method']);

	$files = $_FILES;

	// if (isset($_FILES['cover'])) {
	// 	$cover = $_FILES['cover'];
	// } else {
	// 	$cover = 'data/default.jpg';
	// }


	//validasi cover:
	$coverOK = true;
	if ($files['cover']['error'] == 1 or $files['cover']['size'] > 500000) {
		echo " a";
		echo " cover kegedean bro <BR>";
		$coverOK = false;
		header('location: index.php?publish=fail');
		exit();
	} else {
		echo " b";
	}

	// validasi gambar method
	if (isset($files['cover'])) {
		$count = count($files) - 1;
	} else {
		$count = count($files);
	}
	$methodOK = true;

	for ($i = 1; $i <= $count; $i++) {
		if (isset($files['method' . $i])) {
			if ($files['method' . $i]['error'] == 1 or $files['method' . $i]['size'] > 500000) {
				$methodOK = false;
				echo " method ke " . $i . " gambar kegedean bro ";
				header('location: index.php?publish=fail');
				exit();
			}
		}
	}




	//make directory if it doesn't exist
	$target_dir = 'recipes/' . $recipeID . '/';
	if (!file_exists($target_dir)) {
		mkdir($target_dir, 0777, true);
	}

	//upload cover

	$cover = $_FILES['cover'];
	if ($files['cover']['error'] != 4) {
		echo " cover ada <BR>";
		# code...
		$img_ext = pathinfo($cover['name'], PATHINFO_EXTENSION);
		$target_file = $target_dir . 'cover.' . $img_ext;

		echo "target file adalah $target_file";
		move_uploaded_file($cover['tmp_name'], $target_file);
	} else {
		$target_file = '../Data/defaultCover.jpg';
		echo "cover default <BR>";
	}




	//insert recipe into database
	$sql = "INSERT INTO recipes(Judul, Category, Cover, Penulis, PenulisID, Content) VALUES('$title', '$category', '$target_file', '$username', '$userID', '$target_dir')";
	$query = $conn->query($sql);
	if ($query) {
		echo "Publish successful";
	}


	$f = fopen($target_dir . 'recipe.xml', 'w');

	fwrite($f, '<?xml version="1.0" encoding="UTF-8"?>' . "\n");
	fwrite($f, '<recipe>' . "\n");
	fwrite($f, "<title>$title</title>" . "\n");
	fwrite($f, "<subtitle>$subtitle</subtitle>" . "\n");
	foreach ($ingredients as $ingredient) {
		fwrite($f, "<ingredient>" . $ingredient . "</ingredient>" . "\n");
	}
	foreach ($methods as $method) {
		fwrite($f, "<method>" . $method . "</method>" . "\n");
	}
	fwrite($f, '</recipe>' . "\n");
	fclose($f);



	$methodOK = true;

	for ($i = 1; $i <= $count; $i++) {
		if (isset($files['method' . $i])) {

			echo " a ";
			$img_ext = pathinfo($files['method' . $i]['name'], PATHINFO_EXTENSION);
			$target_file = $target_dir . $i . '.' . $img_ext;
			move_uploaded_file($files['method' . $i]['tmp_name'], $target_file);
		}
	}
	header('location: notif.php?msg=readLaterAppendSuccess');
}
