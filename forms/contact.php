
<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "youness.jabar.pro@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: aibrain4b@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>