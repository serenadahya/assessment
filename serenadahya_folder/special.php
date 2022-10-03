<?php
/* Connects to the database */
$dbcon = mysqli_connect("localhost", "serenadahya", "tF93cjg", "serenadahya_assessment");

if($dbcon == NULL) {
	echo "Could not connect to the database";
	exit();
}

/* Speicals Query */
$special_query = "SELECT special.special_id, food.food, drink.drink, special.cost, special.day 
				  FROM special, food, drink 
				  WHERE food.food_id = special.food_id 
				  AND special.drink_id = drink.drink_id";
$special_result = mysqli_query($dbcon, $special_query);

?>

<!DOCTYPE html>
<html lang="eg">
	<head>
		<meta charset="UTF-8">
		<title>WEGC Special</title>
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
			<h2>Speical</h2>
			<p>Each day of the week, there is a special combo containing one food item and one drink item that can be purchased at a reduced price. </p>
			<!-- Dropdown Special Form -->
			<form name='special_form' id='special_form' method='get' action='special_info.php'>
				<!-- Dropdown Menu -->
				<select name='special_sel' id='special_sel'>
					<!-- Options -->
					<?php
					/* Display the query results in an option tag */
					while($special_record = mysqli_fetch_assoc($special_result)){
						echo "<option value ='".$special_record['special_id']."'>";
						echo $special_record['day'];
						echo "</option>";
					}
					?>
				</select>
				<!--- Special Button -->
				<input type="submit" name="special_button" value="Get Info">
			</form>
						
		</article>
		<footer>
			<p>&copy; Serena Dahya</p>
		</footer>
	</body>
</html>