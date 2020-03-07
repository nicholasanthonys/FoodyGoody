<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="../../CSS/Pages.css">
</head>

<body>
	<div id="all">
	<script type="text/javascript">
		var countIngredient = 1;
		var countMethod = 1;

		function createField(type) {
			var li = document.createElement('li');
			var input = document.createElement('input');
			input.setAttribute("type", "text");
			input.setAttribute("name", type + "[]");
			if (type == 'ingredient') {
				input.setAttribute("placeholder", "Bahan " + (++countIngredient));
				li.appendChild(input);
			} else if (type == 'method') {
				file = document.createElement('input');
				file.setAttribute("type", "file");
				file.setAttribute("name", "method" + (++countMethod));
				input.setAttribute("placeholder", "Langkah " + (countMethod));
				li.appendChild(input);
				li.appendChild(file);
			}
			document.getElementById(type).appendChild(li);
		}
	</script>

	<?php
	require '../Includes/configDB.php';
	require '../Includes/header.php';
	?>

	<?php
	if (isset($_GET['publish'])) {
		if ($_GET['publish'] == 'fail') {

			echo "<div class = 'warning' style = 'color: red'>";
			echo "<center> <h3> publish error </h3>";
			echo " 1. please fill in all field <br>";
			echo " 2. image should be below 500 KB <BR><br><BR>";
			echo "</center></div>";
		}
	}

	?>


	<?php
	if (isset($_SESSION) && !empty($_SESSION)) {
		echo '<form method="post" action="generate.php" enctype="multipart/form-data" class="center">
		<div id="addRecipe">
			<table>
				<tr>
					<td>Cover</td>
					<td>Category</td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr>
					<td>
						<input class="index_recipe" type="file" name="cover" placeholder="Cover">
					</td>
					<td>
						<select class="index_recipe" id="upload_Category" name="category" placeholder="Category">
							<option>Breakfast</option>
							<option>Lunch</option>
							<option>Dinner</option>
							<option>Dessert</option>
						</select>
					</td>
				</tr>
			</table>

			<br>

			<table>
				<tr>
					<td><input required id="title_text" type="text" name="title" placeholder="Title"><td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td><textarea required cols="40" rows="20" style="border-radius: 30px; padding-left: 5%; padding-top: 5%;" name="subtitle" placeholder="Notes"></textarea></td>
				</tr>
			</table>

			<table>
				<tr>
					<td>Ingredient</td>
					<td style = "padding-left:20%">Step</td>
				</tr>
				<tr>
					<td id="ingredient" style="list-style-type: none;"><input required type="text" name="ingredient[]" placeholder="Bahan 1"></td>
					<td style = "padding-left:20%" id="method" style="list-style-type: none;"><input required type="text" name="method[]" placeholder="Langkah 1"><input type="file" name="method1"></td>
				</tr>
				<tr>
					<td><a  style="cursor: pointer;" onClick="createField(\'ingredient\');"><img src ="../../Multimedia/Images/Header/plus.png" width="30px">Tap to add Ingredient</a></td>
					<td style = "cursor: pointer;padding-left:20%"><a onClick="createField(\'method\');"><img src ="../../Multimedia/Images/Header/plus.png" width="30px">Tap to add Step</a></td>
				</tr>
			</table>
			<br><br>
			<input  style="cursor: pointer;" class="submit" type="submit" name="publish" value="Publish Recipe">
		</div>
		</form>';
	} else {
		header('location: ../Login/index.php');
	}

	?>

</div>
</body>

</html>