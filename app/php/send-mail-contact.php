<?php
$addres  = "jmartinez@imaginacionweb.net";/*Your Email*/
$subject = "Messsage from Youmu Studio Html New Version";/*Issue*/
$date    = date("l, F jS, Y");
$time    = date("h:i A");
$Email   = $_REQUEST['Email'];

$msg = "
	Name: $_REQUEST[Name]
	Email: $_REQUEST[Email]
	Email: $_REQUEST[Message]

	Message sent from website on date  $date, hour: $time.\n

	Message:
$_REQUEST[Message]";

if ($Email == "") {
	echo "<div class='alert alert-danger'>Please enter your email</div>";
} else {
	mail($addres, $subject, $msg, "From: $_REQUEST[Email]");
	echo "<div class='alert alert-success'>Thank you for writing us! :D</div>";
}

?>
