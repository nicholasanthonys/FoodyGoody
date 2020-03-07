<?php
	require('includes/configDB.php');
?>

<html>
	<head>
		<title></title>
		<meta charset="author" content="">
		<meta name="description" content="Intro">
			
		<link rel="stylesheet" href="../CSS/Intro.css">

		<link rel="stylesheet" href="Font/fonts.css">
		<script src="../Library/jquery-3.3.1.js"></script>
		<script src="../Library/jquery-ui.js"></script>
	</head>
		
	<body>
			
		<div id="all">
			<div id="one">
			
				<!-- Logo -->
				<div class="logo">
					<a href ="Intro.php" title="Back to main menu">
					<p>Foody<br>Goody</p>
					</a>
				</div>

				<!-- Navigasi -->	
				<?php
					$uri=$_SERVER['REQUEST_URI'];
				?>


				<div class="navbar">
					<ul>
						<li>
							<?php 
								if ($uri=='/TUBES2/HTML/Login/index.php') {
									echo '<a href ="index.php">
									<p class="textnav">Login</p>
									</a>';
								} else if (!empty($_SESSION)){
												
									#display profile picture
									$username = $_SESSION['username'];
									$password = $_SESSION['password'];
									$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
									$query = mysqli_query($conn, $sql);

									if($query){
										$row = mysqli_fetch_assoc($query);
										echo '
										<div class="dropdown">
										<a><img id="pp" width="50px" src="data:image/' . $row['ProfilePictureType'] . ';base64,' . base64_encode($row['ProfilePicture']) . '"/></a>
												
											<div class="dropdown-content">
												<p>
												<a style="color: black;" href="Profile/index.php?userID="' . $userID . '><img src="../Multimedia/Images/Home/profile.png" width= 87px><br>'.$_SESSION['username'].'</a>
												</p>

												<div class="dropdown-other">
													<p><a style="color: black;" href="Profile/index.php?userID="' . $userID . '>Profile</a></p>
													<p><a style="color: black;" href="PublishRecipe/history.php">History</a></p>
													<p><a style="color: black;" href="PublishRecipe/readLater.php">Read Later</a></p>
													<p><a style="color: black;" href="PublishRecipe/myRecipes.php">My Recipes</a></p>
												</div>
											</div>
										</div>';
										}
								}else{
									echo '<a href ="Login/index.php">
									<p class="textnav">Login</p>
									</a>';
								}
							?>
						</li>

						<li>
							<?php
								if ($uri == 'PublishRecipe/listUser.php') {
									echo '<a href ="/TUBES2/HTML/Profile/listUser.php">
												<p class="textnav">Users</p>
												</a>';
								} else {
									echo '<a href ="Profile/listUser.php">
												<p class="textnav">Users</p>
												</a>';
								}
							?>
						</li>
					
						<li>
							<?php
								if ($uri == '/TUBES2/HTML/PublishRecipe/index.php') {
									echo '<a href ="/TUBES2/HTML/PublishRecipe/index.php">
												<p class="textnav">Write</p>
												</a>';
								} else {
									echo '<a href ="/TUBES2/HTML/PublishRecipe/index.php">
												<p class="textnav">Write</p>
												</a>';
								}
							?>
						</li>
						
						<li>
							<?php
								if ($uri == '/TUBES2/HTML/PublishRecipe/list.php?quantity=5') {
									echo '<a href ="list.php">
												<p class="textnav">Recipes</p>
												</a>';
								} else {
									echo '<a href ="/TUBES2/HTML/PublishRecipe/list.php?quantity=5">
												<p class="textnav">Recipes</p>
												</a>';
								}
							?>
						</li>

						<li>
							<?php
								if ($uri == '/TUBES2/HTML/Home.php') {
									echo '<a href ="/TUBES2/HTML/Home.php">
												<p class="textnav">Home</p>
												</a>';
								} else {
									echo '<a href ="/TUBES2/HTML/Home.php">
												<p class="textnav">Home</p>
												</a>';
								}
							?>
						</li>
					</ul>
				</div>
			</div>
			
			<!-- Text -->
			<div id="two">
				<p id="welcome">Foods</p>
				<p class="quotes">Best Recipes From All Around The Globe</p>
			</div>
		
		</div>
		
	
	</body>
	
</html>