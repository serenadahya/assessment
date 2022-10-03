<?php
// Connects the Database
$dbcon = mysqli_connect("localhost", "serenadahya", "tF93cjg", "serenadahya_assessment");
if($dbcon == NULL) {
	echo "Could not connect to the database";
	exit();
}

// Food Query
$food_query = "SELECT food_id, food FROM food";
$food_result = mysqli_query($dbcon, $food_query);
?>

<!DOCTYPE html>
<html lang="eg">
	<head>
		<meta charset="UTF-8">
		<title>WEGC Food</title>
		<link rel="stylesheet" href="css/styles.css">		<!-- Connects the Web Page to the Database -->
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="index.html"> Home </a></li>
				<li><a href="food.php"> Food </a></li>
				<li><a href="drink.php"> Drink </a></li>
				<li><a href="special.php"> Special </a></li>
			</ul>
		</nav>
		<header>
			<h1>Wellington East Girls College Cafe</h1>
		</header>
		<article>
			<h2>Food</h2>
			<p>There are many avaliable items of food avaliable from the Wellington East Girls College including many differnet hot foods, cold foods and baking goods.</p>
			
			<!-- Dropdown Food Form -->
			<form name='food_form' id='food_form' method='get' action='food_info.php'>
				<!-- Dropdown Menu -->
				<select name='food_sel' id='food_sel'>
					<!-- Options -->
					<?php
					/* Display the query results in an option tag */
					while($food_record = mysqli_fetch_assoc($food_result)){
						echo "<option value ='".$food_record['food_id']."'>";
						echo $food_record['food'];
						echo "</option>";
					}
					?>
				</select>
				<!--- Food	 Button -->
				<input type="submit" name="food_button" value="Get Info">
			</form>
			
		</article>
		<footer>
			<p>&copy; Serena Dahya</p>
		</footer>
	</body>
</html>