<?php
// Connects the Database
$dbcon = mysqli_connect("localhost", "serenadahya", "tF93cjg", "serenadahya_assessment");
if($dbcon == NULL) {
	echo "Could not connect to the database";
	exit();
}

// Drink Query
$drink_query = "SELECT drink_id, drink FROM drink";
$drink_result = mysqli_query($dbcon, $drink_query);

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
			<p>There are many avaliable items of drinks avaliable from the Wellington East Girls College including many differnet hot drinks and cold drinks.</p>
			
			<div id="column1">
				<!-- Dropdown Drink Form -->
				<form name='drink_form' id='drink_form' method='get' action='drink.php'>
					<!-- Dropdown Menu -->
					<select name='drink_sel' id='drink_sel'>
						<!-- Options -->
						<?php
						/* Display the query results in an option tag */
						while($drink_record = mysqli_fetch_assoc($drink_result)){
							echo "<option value ='".$drink_record['drink_id']."'>";
							echo $drink_record['drink'];
							echo "</option>";
						}
						?>
					</select>
					<!--- Drink Button -->
					<input type="submit" name="drink_button" value="Get Info">
				</form>
			</div>
			
			<div id="column2">
				<?php
					echo "<h3>" .$this_drink_record['drink']. "</h3>";
					echo "<p> Drink Name: " . $this_drink_record['drink'] . "<br>";
					echo "<p> Cost: $" . $this_drink_record['cost'] . "<br>";
					echo "<p> Calories: " .$this_drink_record['calories'] . "<br>";
				?>
			</div>
			
		</article>
		<footer>
			<p>&copy; Serena Dahya</p>
		</footer>
	</body>
</html>
