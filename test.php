<?php
$otp='5432';
$phnum='918247624626';
//$str="Dear Customer,\nThank you for using AutoOla\nyour OTP:$otp";
$msg="Dear%20Customer,\nThank%20you%20for%20using%20AutoOla\nyour%20OTP:$otp";
echo $msg;
file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".$msg);
//header('Location : http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".$msg');
?>

