<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Control Structure</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="./style.css" />
 
</head>
<body>
<form action="reply.php"  method="post">
<h1> 
Welcome to the ABC Web Site
</h1>

<h2>
-Programmed by Syed Adib Ali
</h2>

	 <label for="name">Your Name :</label> 
	 <input type="text" id="name" name="name" >
	 
	 <br>  </br>
	 
	 <label for="name">You live in :</label> 
	 <input type="text" id="location" name="location" >
	 
	 <br>  </br>
		 
	 <button type="submit" id="submit" name="submit" class="button"> Submit </button>

	 <button type="submit" id="clear" name="clear" class="button"> Clear </button>
	 

	 </body>
	 </form>
<?php
echo "Date: "  .  date('F dS, Y');
?>

</html>