<?php
//get data from form  
$name = $_GET['name'];
$email= $_GET['email'];
$message= $_GET['message'];
$to = "dariussnyman@gmail.com";
$subject = "Mail From Unitune";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@unitune.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("./index.html");
?>
