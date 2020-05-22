<?php

$to="aspiredevelopersann@gmail.com";
$subject="Test";
$message="Testing";
$headers="From: aslamviruthully01@gmail.com";

if(mail($to, $subject, $message, $headers)){
echo"Mail sent success";
}else{
echo"failed";
}

?>