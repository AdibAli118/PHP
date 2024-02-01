<!DOCTYPE html>

<html lang="en">

<head>
  <title>PHP Control Structure</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="./style.css" />
 
</head>
<body>

<?php


$name = $_POST['name'];
$answer1 = $_POST['q1'];
$answer2 = $_POST['q2'];
$answer3 = $_POST['q3'];
$answer4 = $_POST['q4'];
$answer5 = $_POST['q5'];
$score = 0;

	echo "$name . ' Thanks for submitting the form. <br>'";
	if ($answer1 == "c") {
		echo "Answer 1 is correct";
		$score++; 
	}
	else {
		echo "Answer 1 is wrong";
	}
	
	if ($answer2 == "a") {
		echo "Answer 2 is correct";
		$score++;
	}
	else {
		echo "Answer 2 is wrong";
	}
	
	if ($answer3 == "c") {
		echo "Answer 3 is correct";
		$score++; }
	else {
		echo "Answer 3 is wrong";
	}
	
	if ($answer4 == "d") {
		echo "Answer 4 is right";
	$score++;}
	else {
		echo "Answer 4 is wrong";
	}
	
	if ($answer5 == "c") {
		echo "Answer 5 is correct";
		$score++; }
		
	else {
		echo "Answer 5 is wrong";
	}
	
	echo ("$name .your score was .$score.  out of 5")  ; 
	
	
	
?>
</body>
</html>