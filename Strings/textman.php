<html>
<head><title>Text Man</title></head>
<body>
	<form method=post action="textman.php">
		<input name = 'zipcode'/><br>
		Please enter an email: <input type="Text" name = 'email'/>
		<button type='Submit'>Submit </button>

	</form>

<?php
// $_POST['zipcode'] holds the value of the submitted form parameter
// "zipcode"
$zipcode = trim($_POST['zipcode']);
// Now $zipcode holds that value, with any leading or trailing spaces removed
$zip_length = strlen($zipcode);
// Complain if the zip code is not 5 characters long
if ($zip_length != 5){
	print "Please enter a zip code that is 5 characters long.";
}
// strcasecmp compares two strings while ignoring the differences in capitalization.
$email = trim($_POST['email']);
if(strcasecmp($_POST['email'] , 'president@whitehouse.gov') == 0){
	print "Welcome back, US President.";
} else {
	print "<br>Enter correct email or make it all lowercase";
}




?>
</body>
</html>