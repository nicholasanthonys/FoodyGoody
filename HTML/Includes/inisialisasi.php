<?php
include "configDB.php";

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(1, 'Breakfast','Ultimate Tofu Burrito','recipes/1/cover.jpg','nicholas','1','0','0','recipes/1/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(2,'Breakfast','Poached egg and avocado','recipes/2/cover.jpg','nicholas','1','0','0','recipes/2/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(3,'Breakfast','Zucchini and sweet potato slice','recipes/3/cover.jpg','nicholas','1','0','0','recipes/3/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(4,'Breakfast','Egg & mango chutney flatbreads','recipes/4/cover.jpg','nicholas','1','0','0','recipes/4/')";
$result = mysqli_query($conn, $sql);


$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(5,'Breakfast','Blueberry French Toast','recipes/5/cover.jpg','nicholas','1','0','0','recipes/5/')";
$result = mysqli_query($conn, $sql);

//--------- END OF BREAKFAST--------------

//---------- LUNCH -------------------

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(6,'Lunch','White Bean Arugula Salad','recipes/6/cover.jpg','nicholas','1','0','0','recipes/6/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(7,'Lunch','Chicken & Onion Caesar Salad','recipes/7/cover.jpg','nicholas','1','0','0','recipes/7/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(8,'Lunch','Quick Taco Wraps','recipes/8/cover.jpg','nicholas','1','0','0','recipes/8/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(9,'Lunch','Turkey Salad with Pear Dressing','recipes/9/cover.jpg','nicholas','1','0','0','recipes/9/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(10,'Lunch','Crunchy Tuna Wraps','recipes/10/cover.jpg','nicholas','1','0','0','recipes/10/')";
$result = mysqli_query($conn, $sql);

// ----------- dinner-----------------

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(11,'Dinner','Quick Chicken Piccata','recipes/11/cover.jpg','nicholas','1','0','0','recipes/11/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(12, 'Dinner','Li’l Cheddar Meat Loaves','recipes/12/cover.jpg','nicholas','1','0','0','recipes/12/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(13,'Dinner','Enchilada Casser-Ole!','recipes/13/cover.jpg','nicholas','1','0','0','recipes/13/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(14,'Dinner','Creamy Italian Chicken','recipes/14/cover.jpg','nicholas','1','0','0','recipes/14/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(15,'Dinner','Classic Beef Stew','recipes/15/cover.jpg','nicholas','1','0','0','recipes/15/')";
$result = mysqli_query($conn, $sql);

// --------------- desert----------------------

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(16,'Dessert','Rhubarb Crisp','recipes/16/cover.jpg','nicholas','1','0','0','recipes/16/')";
$result = mysqli_query($conn, $sql);


$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(17,'Dessert','Winning Apricot Bars','recipes/17/cover.jpg','nicholas','1','0','0','recipes/17/')";
$result = mysqli_query($conn, $sql);


$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(18,'Dessert','Pina Colada Bundt Cake','recipes/18/cover.jpg','nicholas','1','0','0','recipes/18/')";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(19,'Dessert','Bunny Cake','recipes/19/cover.jpg','nicholas','1','0','0','recipes/19/')";
$result = mysqli_query($conn, $sql);


$sql = "INSERT INTO recipes(RecipeID, Category,Judul,Cover,Penulis,PenulisID,Views,Rating,Content)
Values(20,'Dessert','Jumbleberry Crumble','recipes/20/cover.jpg','nicholas','1','0','0','recipes/20/')";
$result = mysqli_query($conn, $sql);
