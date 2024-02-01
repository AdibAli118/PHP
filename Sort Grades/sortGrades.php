<!DOCTYPE html>
<html>
<head>
<h2>sortGrades.php - Programmed by - Syed Adib Ali</h2>
<body>
<?php
$grades = array("Stephen"=>"99" ,"Luca"=>"62" ,"Will"=>"92" ,"Cole"=>"87" ,"Nathan"=>"75" ,"Jack"=>"15" );
print "Original Array :";
foreach($grades as $student => $grade){
	print "$student: $grade";
}
arsort ($grades);
print "Arsoft sorted array";
foreach ($grades as $student => $grade) {
	print "$student: $grade";
}
ksort($grades);
print "Ksoft sorted array";
foreach ($grades as $student => $grade) {
	print"$student : $grade";
} 
?>


</body>
</head>