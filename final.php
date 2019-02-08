<?php session_start(); ?>

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
			<h2>You're Done</h2>
				<p>Congrats! You have completed the exams</p>
				<p>Final Score: <?php echo $_SESSION['score']; $_SESSION['score'] = 0;?></p>
				<a href="question.php?n=1" class="start">Take again</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, CPIWORLD. All Right Reserved
		</div>
	</footer>
</body>
</html>