<?php 
	session_start();
	define('DB_SERVER', 'localhost');
	define('DB_NAME', 'root');
	define('DB_PASSWORD', '');
	$conn = mysqli_connect(DB_SERVER, DB_NAME, DB_PASSWORD);
	$database = 'foodygoody';

	if(!mysqli_select_db($conn,$database)){
		$sql = "CREATE DATABASE $database";
		if(mysqli_query($conn, $sql)){
			echo "Database $database created!";
		} else {
			echo mysqli_error($conn);
		}
		
	}
	mysqli_select_db($conn,$database);

	$sql = "CREATE TABLE users(
	UserID INT NOT NULL AUTO_INCREMENT,
	Type INT,
	 Email VARCHAR(64),
	 Username VARCHAR(64), 
	 Password VARCHAR(64), 
	 FirstName VARCHAR(64), 
	 LastName VARCHAR(64), 
	 BirthDate DATE NOT NULL, 
	 ProfilePicture MEDIUMBLOB,
	 ProfilePictureType VARCHAR(25), 
	 PRIMARY KEY(UserID))";
	$query = mysqli_query($conn, $sql);

	if($query){
		echo "Table created successfully!";
	}

	$sql = "CREATE TABLE recipes(
	RecipeID INT NOT NULL AUTO_INCREMENT,
	Category VARCHAR(64),
	Judul VARCHAR(64), 
	Cover VARCHAR(64), 
	Penulis VARCHAR(64),
	PenulisID INT, 
	Views INT NOT NULL DEFAULT 0, 
	Rating FLOAT(2) NOT NULL DEFAULT 0,
	Content VARCHAR(64),
	PRIMARY KEY(RecipeID))";
	$query = mysqli_query($conn, $sql);

	if($query){
		echo "Table created successfully!";
	}





	if (!empty($_SESSION) && isset($_SESSION)) {
		$username = $_SESSION['username'];
	 	$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
	 	$query = mysqli_query($conn, $sql);

	 	if($query){
	 		$row = mysqli_fetch_assoc($query);
	 		$userID = $row['UserID'];
	 		$username = $row['Username'];
	 		$type = $row['Type'];
		}
	}
