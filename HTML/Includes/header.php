<html>

<head>
	<title></title>
	<meta charset="author" content="">
	<meta name="description" content="Home">

	<link rel="stylesheet" href="../../CSS/Pages.css">
	<link rel="stylesheet" href="../../CSS/Home.css">
	<link rel="stylesheet" href="../../CSS/logout.css">
	<link rel="stylesheet" href="../Pages.css">
	<link rel="stylesheet" href="../Font/fonts.css">

	<script src='../../Library/jquery-3.3.1.js'></script>
	<script src='../../Library/jquery-ui.js'></script>
</head>

<style type="text/css">
	body {
		background: url('../../Multimedia/Images/Home/background_home.jpg');
		width: 100%;
		height: 100%;
	}

	.dropdown-content p a {
		color: black;
	}
</style>

<body>
	<?php
	$uri = $_SERVER['REQUEST_URI'];
	?>
	<div id="header">
		<!-- Logo -->
		<div class="logo">
			<a href="../Intro.php" title="Back to main menu">
				<p>Foody<br>Goody</p>
			</a>
		</div>

		<!-- Navigasi -->

		<ul>
			<li>
				<?php
				if ($uri == '/TUBES2/HTML/Login/index.php') {
					echo '<a href ="index.php">
									<p class="textnav">Login</p>
									</a>';
				} else if (!empty($_SESSION)) {

					#display profile picture
					$username = $_SESSION['username'];
					$password = $_SESSION['password'];
					$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
					$query = mysqli_query($conn, $sql);

					if ($query) {
						$row = mysqli_fetch_assoc($query);

						echo '
										<div class="dropdown">
										<a><img id="pp" width="50px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode($row['ProfilePicture']) . '"/></a>
												
											<div class="dropdown-content">
												<p>
												<a style="color: black;" href="../Profile/index.php?userID="' . $userID . '><img src="../../Multimedia/Images/Home/profile.png" width= 87px><br>' . $_SESSION['username'] . '</a>
												</p>
												
												<div class="dropdown-other">
													<p><a style="color: black;" href="../Profile/index.php?userID="' . $userID . '>Profile</a></p>
													<p><a style="color: black;" href="../PublishRecipe/history.php">History</a></p>
													<p><a style="color: black;" href="../PublishRecipe/readLater.php">Read Later</a></p>
													<p><a style="color: black;" href="../PublishRecipe/myRecipes.php">My Recipes</a></p>';
						if ($type == 1) {
							echo '<p><a style="color: black;" href="../PublishRecipe/DeleteRecipe.php">Delete Recipe</a></p>';
						}
						echo '	<p>	<form  action="../Profile/logout.php" method="post">
										<input style="cursor: pointer;" class="logout" type="submit" name="logout" value="Logout">
									</form>
								</p>
								</div>
								</div>
								</div>';
					}
				} else {
					echo '<a href ="../Login/index.php">
									<p class="textnav">Login</p>
									</a>';
				}
				?>
			</li>

			<li>
				<?php
				if ($uri == '/TUBES2/HTML/Profile/listUser.php') {
					echo '<a href ="/TUBES2/HTML/Profile/listUser.php">
									<p class="textnav">Users</p>
									</a>';
				} else {
					echo '<a href ="/TUBES2/HTML/Profile/listUser.php">
									<p class="textnav">Users</p>
									</a>';
				}
				?>
			</li>
			<li>
				<?php
				if ($uri == '/TUBES2/HTML/PublishRecipe/index.php') {
					echo '<a href ="index.php">
									<p class="textnav">Write</p>
									</a>';
				} else {
					echo '<a href ="../PublishRecipe/index.php">
									<p class="textnav">Write</p>
									</a>';
				}
				?>
			</li>

			<li>
				<?php
				if ($uri == '/TUBES2/HTML/PublishRecipe/list.php?quantity=5') {
					echo '<a href ="/TUBES2/HTML/PublishRecipe/list.php?quantity=5">
									<p class="textnav">Recipes</p>
									</a>';
				} else {
					echo '<a href ="../PublishRecipe/list.php?quantity=5">
									<p class="textnav">Recipes</p>
									</a>';
				}
				?>
			</li>

			<li>
				<?php
				if ($uri == '/TUBES2/HTML/Home.php') {
					echo '<a href ="Home.php">
									<p class="textnav">Home</p>
									</a>';
				} else {
					echo '<a href ="../Home.php">
									<p class="textnav">Home</p>
									</a>';
				}
				?>
			</li>
		</ul>
	</div>
	<div class="header"></div>
</body>

</html>