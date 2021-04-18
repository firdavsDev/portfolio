<?php



$name=$_POST['name'];
$email=$_POST['email'];
$mavzu=$_POST['mav'];
$message=$_POST['message'];
$to='xackercoder@gmail.com';



$txt="Sizning protofoliyayizdan xabar keldi shu insondan ".$name ."\r\nEmail ".$email."\r\nXabar: ". $message;

if($email!=NULL){
    mail($to,$mavzu,$txt);
}

header('Location:index.html');



?>