<?php

   if(isset($_POST[submit])){
	$message = $_POST['message'];
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject'];

	$mailTo = "info@bobbybrazzo.com";
	$headers =  "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("location: contact.html?mailsend");
   }   

?>