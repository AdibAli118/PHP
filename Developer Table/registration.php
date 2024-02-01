<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Developer Jobs - Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<img src="header.png" alt="Developer Jobs" />
	<img src="developer.jpeg" alt="Developer Jobs" />
	<h3>Developer Jobs - Registration</h3>
<?php
if (isset($_POST['submit'])){

	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$desiredJob = $_POST['desiredjob'];
	$oForm = 'no';
	if (empty($firstName)) {
  echo `<p class=”error”>error</p>’;
  oForm ='Yes'
}
	if (empty($lastName)) {
  echo `<p class=”error”>error</p>’;
  oForm ='Yes'
}
	if (empty($email)) {
  echo `<p class=”error”>error</p>’;
  oForm ='Yes'
}
	if (empty($phone)) {
  echo `<p class=”error”>error</p>’;
  oForm ='Yes'
}
	if (empty(desiredJob)) {
  echo `<p class=”error”>error</p>’;
  oForm ='Yes'
}
}
else(){
	$oForm='Yes'
}
if ($oForm='Yes') {
	$firstName = '';
	$lastName = '';
	$email = '';
	$phone ='';
	$desiredJob = '';
?>

<p>Register with Developer Jobs, and post your resume.</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <span class="row">
        <label for="firstname">First Name:</label>
        <input id="firstname" name="firstname" type="text" value="<?php echo $first_name; ?>"/>
    </span>
	
    <span class="row">
        <label for="lastname">Last Name:</label>
        <input id="lastname" name="lastname" type="text" value="<?php echo $last_name; ?>"/>
    </span>
	
    <span class="row">
        <label for="email">Email:</label>
        <input id="email" name="email" type="text" value="<?php echo $email; ?>"/>
    </span>
	
    <span class="row">
        <label for="phone">Phone:</label>
        <input id="phone" name="phone" type="text" value="<?php echo $phone; ?>"/>
    </span>
	
    <span class="row">
        <label for="job">Desired Job:</label>
        <input id="job" name="job" type="text" value="<?php echo $job; ?>"/>
    </span>

    <span class="row">
        <label for="resume">Paste your resume here:</label>
        <textarea id="resume" name="resume" rows="4" cols="40"><?php echo $resume; ?></textarea>
    </span>
	
    <span class="row">
        <input type="submit" name="submit" value="Submit" />
    </span>
	
</form>

<?php
}
else if(oForm ='no'){
	echo $firstName;
	echo $lastName;`
	echo 'Thank you for applying to the job application'
}
include 'footer';
preg_match= ('/^\(?[2-9]\d{2}\)?[-\s]\d{3}-\d{4}$/', $phone);

?>