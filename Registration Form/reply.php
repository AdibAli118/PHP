<?php
$name = $_POST['name'] ;
$location = $_POST['location'];
?>

<!DOCTYPE html>
<html>
<head><title>Reply PHP - by {Syed Adib Ali}</title>
</head>
<body>
<?php


if (empty($name)) 
{
	print "You did not enter a username, Please rerturn to the form and re-enter information"  ;

}
else
{
	if (empty($location)) 
	{
	print "You did not enter a location, Please rerturn to the form and re-enter information";
	}
	
}
	echo "Thank you . $name";
	echo "You live in the lovely region of . $location";

?>
</body>
</html>