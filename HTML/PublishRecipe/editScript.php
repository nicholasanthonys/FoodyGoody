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

	$recipeID = $_GET['recipeID'];
	echo " recipe id is $recipeID <BR>";
	$category = $_POST['category'];
	echo "category is $category <BR>";
	$title = $_POST['title'];
	echo "title is $title<BR>";
	$subtitle = $_POST['subtitle'];
	echo " subtittle is $subtitle<Br>";
	$ingredients = $_POST['ingredient'];
	var_dump($ingredients);
	$methods = $_POST['method'];

	if (isset($_FILES['cover'])) {
		$cover = $_FILES['cover'];
	} else {
		$cover = 'data/default.jpg';
	}
	$files = $_FILES;
	//make directory if it doesn't exist
	$target_dir = 'recipes/' . $recipeID . '/';
	if (!file_exists($target_dir)) {
		mkdir($target_dir, 0777, true);
	}

	//upload cover
	if ($files['cover']['error'] != 4) {
		# code...
		$img_ext = pathinfo($cover['name'], PATHINFO_EXTENSION);
		$target_file = $target_dir . 'cover.' . $img_ext;
		move_uploaded_file($cover['tmp_name'], $target_file);
	} else {
		$target_file = '../Data/defaultCover.jpg';
	}



	//insert recipe into database
	$sql = "UPDATE recipes SET Judul='$title', Category='$category', Cover='$target_file', Penulis='$username', PenulisID='$userID', Content='$target_dir' WHERE RecipeID='$recipeID'";
	$query = $conn->query($sql);
	if ($query) {
		echo "Publish successful";
	} else {
		echo "aaaaa" . mysqli_error($conn);
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

	if (isset($files['cover'])) {
		$count = count($files) - 1;
	} else {
		$count = count($files);
	}

	for ($i = 1; $i <= $count; $i++) {
		if (isset($files['method' . $i])) {
			$img_ext = pathinfo($files['method' . $i]['name'], PATHINFO_EXTENSION);
			$target_file = $target_dir . $i . '.' . $img_ext;
			move_uploaded_file($files['method' . $i]['tmp_name'], $target_file);
		}
	}
	header('location: notif.php?msg=readLaterAppendSuccess');
}
