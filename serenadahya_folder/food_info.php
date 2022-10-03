<?php
// Connects the Database
$dbcon = mysqli_connect("localhost", "serenadahya", "tF93cjg", "serenadahya_assessment");
if($dbcon == NULL) {
	echo "Could not connect to the database";
	exit();
}

//Showing information from selected food_id
  if(isset($_GET['food_sel'])) {
        $food_id = $_GET['food_sel'];
    } else {
        $food_id = 1;
    }

// Display Food Information Query
$this_food_query = "SELECT * FROM food WHERE food.food_id = '" .$food_id . "'";
$this_food_result = mysqli_query($dbcon, $this_food_query);
$this_food_record = mysqli_fetch_assoc($this_food_result);

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
			<!-- Displays the food information -->
			<?php
				echo "<h3>" .$this_food_record['food']. "</h3>";
				echo "<p> Food Name: " . $this_food_record['food'] . "<br>";
				echo "<p> Cost: $" . $this_food_record['cost'] . "<br>";
				echo "<p> Calories: " .$this_food_record['calories'] . "<br>";
				echo "<p> Vegetarian: " .$this_food_record['vegetarian'] . "<br>";
				echo "<p> Category: " .$this_food_record['sweet_savoury'] . "<br>";
			?>					
		</article>
		<footer>
			<p>&copy; Serena Dahya</p>
		</footer>
	</body>
</html>