<?php


if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$body = $_POST["body"];

	$message = "Email: $email\n\nText: $body \n\n--This is a message from the ECE Outreach Sr Design website.--";


	mail("jdri@rams.colostate.edu", "From: $name", $message);
	header("Location: contact.html?mailsend");
}

?>
