<?php include('config.php'); ?>
<?php session_start(); ?>
<?php 
	// Set question number 
	$number =(int) $_GET['n'];
	
	// Get total question
	$query = "SELECT * FROM questions";
	// Get result
	$results = $mysqli->query($query) or die($mysqli->error);
	$total = $results->num_rows;
	
	// Get Question
	$query = "SELECT * FROM questions
				WHERE question_number = $number";
	
	$result = $mysqli->query($query) or die($mysqli->error);
	
	$question = $result->fetch_assoc();
	
	// Get Question
	$query = "SELECT * FROM choices
				WHERE question_number = $number";
	
	$choices = $mysqli->query($query) or die($mysqli->error);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>questions</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Cpiworld System Service Students Exams</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
			<p class="question">
				<?php echo $question['text']; ?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php while($row = $choices->fetch_assoc()): ?>
						<li><input type="radio" required name="choice" value="<?php echo $row['text']; ?>" /><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Submit">
				<input type="hidden" name="number" value="<?php echo $number; ?>">
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, CPIWORLD. All Right Reserved
		</div>
	</footer>
</body>
</html>