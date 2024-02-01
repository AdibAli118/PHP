<?php
$studentGrades = [25 , 64 , 23 , 87 , 56, 38 , 78 , 57, 98 ,95 , 81, 67 , 75 ,76,74 ,84 ,36,39,54,43,49, 65 , 69, 69 , 78 , 17, 91];
$top = 0;
$bottom = 0;
$totalGrades =0;
for ($i=0; $i<27; $i++){
	$totalGrades += $studentGrades[$i];
	
	if ($studentGrades[$i]<20){
		$bottom++;
	}
	else if ($studentGrades[$i]>80){
		$top++;
	}
}
$average = $totalGrades / count($studentGrades);

	echo "<h1>Grade Averaging by Syed Adib Ali</h1>";
	echo "Class Average" , $average;
	echo "Number of students in bottom 20% " , $bottom;
	echo "Number of students in top 20% " , $top;
?>