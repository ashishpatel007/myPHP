<html>
<body>
<form method="POST" action="changingcase.php">
	<input type="text" name="comments" value="asiflsdgsdkgjbskfgjkjfdngkjsdfngkjnsdfkgjndskfjgnskjfdg"/><br>
	<input type="text" name="card" value="4000-1234-5678-9101"/><br>
	<button type="submit">Click</button>
</form>

<span class="Lunch">Fried Bean Curd</span>
<span class="lunch">Oil-Soaked Fish</span>

<?php
//upper case and lower case
print strtolower('Beef , CHICKEN, Pork, duCK');
print "<br>";
print strtoupper('Beef, CHICKEN, Pork, duCK');
print "<br>";


//first letter of each word is uppercase
print ucwords(strtolower('JOHN FRANKENHEIMER'));
print "<br>";


//truncating a string with substr()
//Grab the first 30 bytes of $_POST['comments']
print "original is " . "<br>" . $_POST['comments'];
print "<br>";
print substr($_POST['comments'], 0, 30);
//Add an ellipsis
print '...';
print "<br>";

//extracting the end of a string with substr()
print 'Card: XX';
print substr($_POST['card'], -4, 4);
print "<br>";

//using str_replace()
$html = '<span class="{class}">Fried Bean Curd</span>
<span class="{class}">Oil-Soaked Fish</span>';
$my_class = "ASH";
print str_replace('{class}', $my_class, $html);


?>
</body>
</html>