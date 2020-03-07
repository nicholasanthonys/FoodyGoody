<?php
require('includes/configDB.php');
?>
<html>

<head>
	<title></title>
	<meta charset="author" content="">
	<meta name="description" content="Home">

	<link rel="stylesheet" href="../CSS/Home.css">
	<link rel="stylesheet" href="Pages.css">
	<link rel="stylesheet" href="Font/fonts.css">
	<link rel="stylesheet" href="../CSS/logout.css">

	<script src='../Library/jquery-3.3.1.js'></script>
	<script src='../Library/jquery-ui.js'></script>
</head>

<body>

	<div id="header">
		<!-- Logo -->
		<div class="logo">
			<a href="Intro.php" title="Back to main menu">
				<p>Foody<br>Goody</p>
			</a>
		</div>

		<!-- Navigasi -->
		<?php
		$uri = $_SERVER['REQUEST_URI'];
		?>
		<div class="navbar">
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
									<a style="color: black;" href="Profile/index.php?userID="' . '><img src="../Multimedia/Images/Home/profile.png" width= 87px><br>' . $_SESSION['username'] . '</a>
									</p>
									
									<div class="dropdown-other">
										<p><a style="color: black;" href="/TUBES2/HTML/Profile/index.php"' . $userID . '>Profile</a></p>
										<p><a style="color: black;" href="PublishRecipe/history.php">History</a></p>
										<p><a style="color: black;" href="PublishRecipe/readLater.php">Read Later</a></p>
										<p><a style="color: black;" href="PublishRecipe/myRecipes.php">My Recipes</a></p>';
							if ($type == 1) {
								echo '<p><a style="color: black;" href="PublishRecipe/DeleteRecipe.php">Delete Recipe</a></p>';
							}
							echo '	<p>	<form action="Profile/logout.php" method="post">
							<input class="logout" type="submit" name="logout" value="Logout">
						</form>
					</p>
					</div>
					</div>
					</div>';
						}
					} else {
						echo '<a href ="Login/index.php">
							<p class="textnav">Login</p>
							</a>';
					}
					?>
				</li>

				<li>
					<?php
					if ($uri == '/TUBES2/HTML/PublishRecipe/index.php') {
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

	<div class="header"></div>
	<div id="textPicture">

		<!-- Breakfast -->
		<!-- Text -->
		<div id="borderBreakfast" class="section left">
			<img src="../Multimedia/Images/Home/Breakfast/bf1.jpg" id="pictBreakfast">
			<div class="text" id="bfText">
				<p class="category">Breakfast</p>
				<p id="explainBreakfast" class="explain">The word in English refers to breaking the fasting period of the prior night.
					There is a strong tendency for one or more "typical", or "traditional", breakfast menus to exist in most
					places, but the composition of this varies widely from place to place, and has varied over time, so that globally a
					very wide range of preparations and ingredients are now associated with breakfast.</p>

				<!-- Read More -->
				<a class="readmore" href="PublishRecipe/list.php?category=Breakfast&quantity=5">Read More</a>
			</div>
			<!-- Image -->

		</div>





		<!-- Lunch -->
		<!-- Image -->


		<!-- Text -->
		<div id="borderLunch" class="section right">
			<img src="../Multimedia/Images/Home/Lunch/lch1.jpg" id="pictLunch">
			<div class="text" id="lnchText">
				<p class="category">Lunch</p>
				<p id="explainLunch" class="explain">the abbreviation for luncheon, is a meal eaten around midday.
					During the 20th century, the meaning gradually narrowed to a small or mid-sized meal eaten midday.
					Lunch is commonly the second meal of the day, after breakfast. The meal varies in size depending on
					the culture, and significant variations exist in different areas of the world.</p>

				<!-- Read More -->
				<a class="readmore" href="PublishRecipe/list.php?category=Lunch&quantity=5">Read More</a>
			</div>
		</div>



		<!-- Dinner -->
		<!-- Text -->
		<div id="borderDinner" class="section left">
			<img src="../Multimedia/Images/Home/Dinner/dinner1.jpg" id="pictDinner">
			<div class="text" id="dnnrText">
				<p class="category">Dinner</p>
				<p id="explainDinner" class="explain"> usually refers to the most significant meal of the day,
					which can be at noon or in the evening. However, the term "dinner" can have different meanings depending on culture, as it may mean a meal of any size eaten at any time of day. Historically, it referred to
					the first meal of the day eaten around noon, and is still sometimes used for a noon-time meal, particularly if it is a large or main meal. In many parts of the Western world, dinner is taken as the evening meal.</p>

				<!-- Read More -->
				<a class="readmore" href="PublishRecipe/list.php?category=Dinner&quantity=5">Read More</a>
			</div>

		</div>

		<!-- Image -->




		<!-- Desert -->
		<!-- Image -->


		<!-- Text -->
		<div id="borderDessert" class="section right">
			<img src="../Multimedia/Images/Home/Dessert/des1.png" id="pictDessert">
			<div class="text" id="dsrtText">
				<p class="category">Dessert</p>
				<p id="explainDessert" class="explain"> Dessert is a course that concludes an evening meal.
					The course usually consists of sweet foods, such as confections dishes or fruit, and possibly a beverage such as
					dessert wine or liqueur, however in the United States it may include coffee, cheeses, nuts, or other savory items
					regarded as a separate course elsewhere. In some parts of the world, such as much of central and western Africa,
					and most parts of China, there is no tradition of a dessert course to conclude a meal.</p>


				<!-- Read More -->
				<a class="readmore" href="PublishRecipe/list.php?category=Dessert&quantity=5">Read More</a>
			</div>
		</div>
	</div>

	<!-- <div id="footer">
				<p class="folus">Follow us on</p>
				<div id="mediaSocial">
					<a href="http://www.facebook.com">
						<img src="../Multimedia/Images/Home/FB.png" alt="facebook" title="Follow us at Facebook" class="flogo" id="fblogo">
					</a>
					
					<a href="http://www.instagram.com">
						<img src="../Multimedia/Images/Home/IG.png" alt="instagram" title="Follow us at Instagram" class="flogo" id="iglogo">
					</a>

					<a href="http://wwwyoutube.com">
						<img src="../Multimedia/Images/Home/YT.png" alt="youtube" tittle="Subscribe us" class="flogo" id="ytlogo">
					</a>
				</div>
			</div> -->


</body>

</html>

