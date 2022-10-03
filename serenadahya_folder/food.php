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

// Sort Query
$sort_query = "SELECT sort_id, sort FROM sort";
$sort_result = mysqli_query($dbcon, $sort_query);


if(isset($_GET['sort_sel'])) {
        $sort_id = $_GET['sort_sel'];
    } else {
        $sort_id = 1;
    }

// Sorts the Food Dropdown Menu
if($sort_id == 1) {
	$food_query = "SELECT food_id, food FROM food ORDER BY food ASC";
	$food_result = mysqli_query($dbcon, $food_query);
} elseif($sort_id == 2) {
	$food_query = "SELECT food_id, food FROM food ORDER BY food DESC";
	$food_result = mysqli_query($dbcon, $food_query);
} elseif($sort_id == 3) {
	$food_query = "SELECT food_id, food FROM food ORDER BY cost ASC";
	$food_result = mysqli_query($dbcon, $food_query);
} elseif($sort_id == 4) {
	$food_query = "SELECT food_id, food FROM food ORDER BY cost DESC";
	$food_result = mysqli_query($dbcon, $food_query);
} elseif($sort_id == 5) {
	$food_query = "SELECT food_id, food FROM food ORDER BY calories ASC";
	$food_result = mysqli_query($dbcon, $food_query);
} elseif($sort_id == 6) {
	$food_query = "SELECT food_id, food FROM food ORDER BY calories DESC";
	$food_result = mysqli_query($dbcon, $food_query);
}

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
			
			<div id="column1">
				
				<!-- Dropdown Sort Form -->
				<form name='sort_form' id='sort_form' method='get' action='food.php'>
					<label for="sort_by">Sort By: </label>
					<!-- Dropdown Menu -->
					<select name='sort_sel' id='sort_sel'>
						<!-- Options -->
						<?php
						/* Display the query results in an option tag */
						while($sort_record = mysqli_fetch_assoc($sort_result)){
							echo "<option value ='".$sort_record['sort_id']."'>";
							echo $sort_record['sort'];
							echo "</option>";
						}
						?>
					</select>
					<!--- Sort Button -->
					<input type="submit" name="sort_button" id="sort_button" value="Sort Items">
				</form>
			
				<br><br>
				
				<!-- Dropdown Food Form -->
				<form name='food_form' id='food_form' method='get' action='food.php'>
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
				
			</div>
			
			<div id="column2">
				<?php
					echo "<h3>" .$this_food_record['food']. "</h3>";
					echo "<p> Food Name: " . $this_food_record['food'] . "<br>";
					echo "<p> Cost: $" . $this_food_record['cost'] . "<br>";
					echo "<p> Calories: " .$this_food_record['calories'] . "<br>";
					echo "<p> Vegetarian: " .$this_food_record['vegetarian'] . "<br>";
					echo "<p> Category: " .$this_food_record['sweet_savoury'] . "<br>";
				?>			
			</div>
		
		</article>
		<footer>
			<p>&copy; Serena Dahya</p>
		</footer>
	</body>
</html>