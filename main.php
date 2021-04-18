<?php

$name=$_POST['name'];
$email=$_POST['email'];
$mavzu=$_POST['mav'];
$message=$_POST['message'];
$to='xackercoder@gmail.com';

$headers="From: ".$name."\r\n" ."CC: hamimkabir@hamimkabir.webhostingindia.racing";

$txt="Sizning protofoliyayizdan xabar keldi shu insondan ".$name ."\r\nEmail ".$email."\r\nXabar: ". $message;

if($email!=NULL){
    mail($to,$mavzu,$txt,$headers);
}

header('Location:inndex.html');

?>
