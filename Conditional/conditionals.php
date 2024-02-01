<html lang="en">

<head>
  <title>PHP Control Structure</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="./style.css" />
 
</head>
<body>

<?php

$quantity = $_POST['quantity'] ;
$cost = 2000;
$discount = 100;
$tax = 0.13;
 
if (empty($quantity)){
		echo 'Enter a valid quantity';	
}
	if (abs($quantity)){
		$tax = 1.13;
		$totalCost = $cost * $quantity;
	
	if($totalCost < 5000){
		echo 'Discount is not applied as sale is under $5000';
		$totalCost = $totalCost * $tax ;
	$totalCost = round($totalCost);
	$payment = $totalCost/12;
	}
	if($totalCost >= 5000 ){
		$totalCost = $totalCost - discount;
		$totalCost = $totalCost * $tax ;
		$totalCost = round($totalCost);
		$payment = $totalCost/12;
	}
	
	echo 'The PHP payment calculation conditionals program programmed by Syed Adib Ali';
	echo "you requested to purchase $quantity at $2000 each";
	echo "The Total with tax minus any discount,comes to $totalCost";
	echo "You may purchase the widgets in 12 monthly installments of $payment";
	
}
?>
</body>
</html>