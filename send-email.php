<?php
$name= $_POST["name"];
// $email= $_POST["email"];
$subject= $_POST["subject"];
$mes= $_POST["message"];


$to = "";
$headers = "From: webmaster@example.com";

mail($to,$subject,$mes,$headers);
?>
