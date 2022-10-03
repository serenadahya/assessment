<?php
// Connects the Database
$dbcon = mysqli_connect("localhost", "serenadahya", "tF93cjg", "serenadahya_assessment");
if($dbcon == NULL) {
	echo "Could not connect to the database";
	exit();
}

// Showing information from selected drink_id
if(isset($_GET['drink_sel'])) {
        $drink_id = $_GET['drink_sel'];
    } else {
        $drink_id = 1;
    }

//Display Drink Information Query
$this_drink_query = "SELECT * FROM drink WHERE drink.drink_id = '" .$drink_id . "'";
$this_drink_result = mysqli_query($dbcon, $this_drink_query);
$this_drink_record = mysqli_fetch_assoc($this_drink_result);

?>

<!DOCTYPE html>
<html lang="eg">
	<head>
		<meta charset="UTF-8">
		<title>WEGC Drink</title>
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
			<h2>Drink</h2>
			
			<?php
				echo "<h3>" .$this_drink_record['drink']. "</h3>";
				echo "<p> Drink Name: " . $this_drink_record['drink'] . "<br>";
				echo "<p> Cost: $" . $this_drink_record['cost'] . "<br>";
				echo "<p> Calories: " .$this_drink_record['calories'] . "<br>";
			?>
		
		</article>
		<footer>
			<p>&copy; Serena Dahya</p>
		</footer>
	</body>
</html>
