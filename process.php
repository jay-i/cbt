<?php session_start(); ?>
<?php include('config.php'); ?>

<?php
	// Check to see if score is set 
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
		// Get total questions
		$query = "SELECT * FROM questions";
		// Get Results
		if($results = $mysqli->query($query) or die($mysqli->error)){
		$total = $results->num_rows;
		}
		else{
			echo "error occurred <br />";
		}

		
		// Get correct choice
		$query = "SELECT * FROM `choices`
					WHERE question_number = $number AND is_correct = 1";
					
		// Get Result
		$result = $mysqli->query($query) or die($mysqli->error);
		
		// Get row
		$row = $result->fetch_assoc();
		
		// Set correct choice
		$correct_choice = $row['id'];
		$db_correct_choice = $row['text'];
//echo $selected_choice . "--" . $db_correct_choice;
		//echo $number;
		
				if($selected_choice == $db_correct_choice){
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}							
				if($number == $total){
				header("Location: final.php");
				}else{
				header("Location: question.php?n=".$next);	
				}
				
		
		
		
		}
		else{
			
			echo "Nothing posted<br />";
		}



?>
