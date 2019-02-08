<?php
	include('config.php');
	
	// Get Total Questions
	$query = "SELECT * FROM questions";
	
	// Get results
	$results = $mysqli->query($query) or die($mysqli->error);
	$total = $results->num_rows;

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cpiworld Exams</title>
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
			<h2>Choose Exam Type</h2>
			<select>
				<option>Choose from the option</option>
				<option>Operating System</option>
				<option>Microsoft Word</option>
				<option>Microsoft Excel</option>
				<option>Microsoft Access</option>
				<option>Microsoft PowerPoint</option>
				<option>Corel Draw</option>
				<option>System Networking</option>
				<option>Web Design & Development</option>
			</select>
			<p>This is a multiple choice exams </p>
			<ul>
				<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Exam</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, CPIWORLD. All Right Reserved
		</div>
	</footer>
</body>
</html>