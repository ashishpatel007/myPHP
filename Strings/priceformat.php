<?php

// the format rule %.2f is replaced with the value of $price * (1 + $tax) 
// and formatted so that it has two decimal places
$price = 5; $tax = 0.075;
printf('The dish costs $%.2f', $price * (1 + $tax));

?>