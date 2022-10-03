<?php
/* Connects to the database */
$dbcon = mysqli_connect("localhost", "serenadahya", "tF93cjg", "serenadahya_assessment");

if($dbcon == NULL) {
	echo "Could not connect to the database";
	exit();
}

//Showing information from selected special_id
  if(isset($_GET['special_sel'])) {
        $special_id = $_GET['special_sel'];
    } else {
        $special_id = 1;
    }

// Display Special Information Query
$this_special_query = "SELECT * FROM special WHERE special.special_id = '" .$special_id . "'";
$this_special_result = mysqli_query($dbcon, $this_special_query);
$this_special_record = mysqli_fetch_assoc($this_special_result);

// Selects food name from food table
$food = "SELECT special.food_id, food.food FROM food, special WHERE food.food_id = special.food_id AND special.special_id = '" .$special_id . "'";
$food_result = mysqli_query($dbcon, $food);
$food_record = mysqli_fetch_assoc($food_result);

// Selects drink name from drink table
$drink = "SELECT special.drink_id, drink.drink FROM drink, special WHERE drink.drink_id = special.drink_id AND special.special_id = '" .$special_id . "'";
$drink_result = mysqli_query($dbcon, $drink);
$drink_record = mysqli_fetch_assoc($drink_result);

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
			<?php
				echo "<h3>" .$this_special_record['day']. "</h3>";
				echo "<p> Food Item: " . $food_record['food'] . "<br>";
				echo "<p> Drink Item: " . $drink_record['drink'] . "<br>";
				echo "<p> Cost: $" . $this_special_record['cost'] . "<br>";
				echo "<p> Calories: " . $this_special_record['calories'] . "<br>";
			?>
				
		</article>
		<footer>
			<p>&copy; Serena Dahya</p>
		</footer>
	</body>
</html>