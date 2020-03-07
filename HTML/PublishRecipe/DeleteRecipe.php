<body>
	<div id="all">
		<link rel="stylesheet" href="../../CSS/Pages.css">
		<script type="text/javascript">
			// function showHints(str) {
			// 	if (str.length == 0) {
			// 		document.getElementById('hints').innerHTML = "";
			// 	} else {
			// 		var xhttp = new XMLHttpRequest();
			// 		xhttp.onreadystatechange = function() {
			// 			if (this.readyState == 4 && this.status == 200) {
			// 				document.getElementById('hints').innerHTML = this.responseText;
			// 			}
			// 		}
			// 		xhttp.open("GET", "getHints.php?q=" + str, true);
			// 		xhttp.send();
			// 	}
			// }

			// function showHintsCategory(str) {
			// 	if (str.length == 0) {
			// 		document.getElementById('hints').innerHTML = "";
			// 	} else {
			// 		var xhttp = new XMLHttpRequest();
			// 		xhttp.onreadystatechange = function() {
			// 			if (this.readyState == 4 && this.status == 200) {
			// 				document.getElementById('hints').innerHTML = this.responseText;
			// 			}
			// 		}
			// 		xhttp.open("GET", "getHintsCategory.php?q=" + str, true);
			// 		xhttp.send();
			// 	}
			// }

			// function showHintsRating(str) {
			// 	if (str.length == 0) {
			// 		document.getElementById('hints').innerHTML = "";
			// 	} else {
			// 		var xhttp = new XMLHttpRequest();
			// 		xhttp.onreadystatechange = function() {
			// 			if (this.readyState == 4 && this.status == 200) {
			// 				document.getElementById('hints').innerHTML = this.responseText;
			// 			}
			// 		}
			// 		xhttp.open("GET", "getHintsRating.php?q=" + str, true);
			// 		xhttp.send();
			// 	}
			// }
		</script>

		<?php
		require('../Includes/configDB.php');
		require('../Includes/header.php');

		?>

		<script type="text/javascript">
			function show(str, str2, str3, str4) {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById('list').innerHTML = this.responseText;
					}
				}

				xhttp.open("GET", "recipeDisplayForDelete.php?category=" + str + "&quantity=" + str2 + "&sort=" + str3 + "&q=" + str4, true);
				xhttp.send();

			}

			function getComment() {
				return document.getElementById('comment').value;
			}

			function getCategory() {
				return document.getElementById('category').value;
			}

			function getSort() {
				return document.getElementById('sort').value;
			}

			function getInput() {
				return document.getElementById('inputname').value;
			}

			var i = 5;

			function more(str, str3) {
				i += 5;
				show(str, i, str3);
			}

			function less(str, str3) {
				i -= 5;
				show(str, i, str3);
			}
		</script>


		<div id="searchRecipe">
			<form>
				<table>
					<tr>
						<td><img src="../../Multimedia/Images/Header/srch.png" width="50px" height="50px"></td>
						<td>
							<div class="input-field">
								<input id="inputname" type="text" placeholder="Type to search..." onkeyup="show(getCategory(),5,getSort(),this.value)">
							</div>
						</td>
						<td>
							<select id="category" name="category" onclick="show(this.value,5, getCategory(), getInput())">
								<option value="undefined">All</option>
								<option value="Breakfast"
								<?php
								if(isset($_GET['category'])){
									if($_GET['category']=='Breakfast'){
											echo 'selected';
										}
									} ?>>Breakfast</option>
								<option value="Lunch"
								<?php
								if(isset($_GET['category'])){
									if($_GET['category']=='Lunch'){
											echo 'selected';
										}
									} ?>
								>Lunch</option>
								<option value="Dinner"
								<?php
								if(isset($_GET['category'])){
									if($_GET['category']=='Dinner'){
											echo 'selected';
										}
									} ?>
								>Dinner</option>
								<option value="Dessert"
								<?php
								if(isset($_GET['category'])){
									if($_GET['category']=='Dessert'){
											echo 'selected';
										}
									} ?>
								>Dessert</option>
							</select>
						</td>
						<td>
							<select id="sort" onclick="show(getCategory(), 5, this.value, getInput())">
								<option value=""> Sort By </option>
								<option value="ratingASC"> Rating from Lowest </option>
								<option value="ratingDESC"> Rating from Highest </option>
								<option value="viewsASC"> Views from Lowest </option>
								<option value="viewsDESC"> Views from Highest </option>
							</select>
						</td>
					</tr>
				</table>

				<p id="hints"></p>
			</form>
		</div>
		<?php
		if (isset($_GET['quantity'])) {
			$quantity = $_GET['quantity'];
		} else {
			$quantity = 5;
		}
		?>

		<div id="Recipesborder">

			<h1 id="titleRecipeList">Recipe List</h1>

			<div id="list" onload="show(undefined,5);">
				<script type="text/javascript">
					show(getCategory(), undefined, getSort(), getInput());
				</script>
			</div>

			<table style="min-width: 50%; margin-left: 2%;">
				<tr>
					<td>
						<a class="show" style="cursor: pointer;" onclick="more(getCategory(),undefined, getSort(), getInput())">Show more recipes</a><br>
					</td>
					<td>
						<a class="show"  style="cursor: pointer;" onclick="less(getCategory(),undefined, getSort(), getInput())">Show less recipes</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
