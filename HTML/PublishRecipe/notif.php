<?php
require('../includes/configDB.php');
require('../includes/header.php');
?>

<link rel="stylesheet" type="text/css" href="../CSS/Home.css">
<link rel="stylesheet" type="text/css" href="../CSS/Pages.css">
<link rel="stylesheet" href="Font/fonts.css">


<style type="text/css">
	.msg {
		font-size: 1.5em;
		background-color: white;
	}
</style>
<div>
	<?php


	if (isset($_GET['msg'])) {
		echo '<p class="msg">';
		if ($_GET['msg'] == 'deleteRecipeSuccess') {
			echo 'Recipe deleted successfully!';
		} else if ($_GET['msg'] == 'editRecipeSuccess') {
			echo 'Recipe edited successfully!';
		} else if ($_GET['msg'] == 'generateSuccess') {
			echo 'Recipe published successfully!';
		} else if ($_GET['msg'] == 'rateSuccess') {
			echo 'Rated recipe successfully!';
		} else if ($_GET['msg'] == 'readLaterAppendSuccess') {
			echo 'Favorites updated!';
		} else if ($_GET['msg'] == 'readLaterDeleteSuccess') {
			echo 'Favorites updated!';
		} else if ($_GET['msg'] == 'deleteUserSuccess') {
			echo 'User deleted successfully!';
		} else if ($_GET['msg'] == 'updateUserSuccess') {
			echo 'Profile updated successfully!';
		}
		echo '</p>';
	}

	?>

	<p class="msg">Click <a href="../Home.php">here</a> to continue.</p>
</div>