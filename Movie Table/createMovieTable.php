


<!DOCTYPE html>
<html>
<head>
<h2>Final Project</h2>
<body>
<?php
 // Define the database connection constants here!
    define('DB_HOST', 'localhost');
    define('DB_USER', 's22ajd');    // scweb username
    define('DB_PASSWORD', 'l6cxql6cxqv6gnmv6gnm');  // 20-char p/w
    define('DB_NAME', ' https://s22ajd.scweb.ca');   // scweb username + db
?>

<?php  require_once 'connectvars.php';  ?>
<?php 
	$connectionString = new mysqli("https://s22ajd.scweb.ca","s22ajd","520cv520cv","l6cxql6cxqv6gnmv6gnm");
	
	$table_exists_query = "SELECT * FROM Movies";
if (mysqli_query ($connectionString, $table_exists_query)) {
    echo "Table with name Movies already exists. <br>Go to 
             <a href='movieForm.php'>Movie Insert</a> to add movies";
} else {
      
//Create fields and specify datatypes and primary key
 )";

?>
</body>
</html>
