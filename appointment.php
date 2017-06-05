<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$contact = trim($_POST['phone']);
$subject = trim($_POST['date']);
$message = trim($_POST['time']);
$support_address = "priyam.95shah@gmail.com"; //Your Company Email ID//
$headers = "From: ".$email;
$headers2 = "From: ".$support_address;
$finalmessage = "


From:   $_POST[name]
email:  $_POST[email]
Phone:  $_POST[contact]
Appointment Date:$_POST[date]
Appointment Time:$_POST[time]

";

if ( $name == "" )

{
}
else
{
mail("$support_address","$subject","$finalmessage",$headers);
$result = "Your message has been sent succesfully!";
// Your Auto Replay Message//
mail("$email","Your appointment has been booked !","Contact us if you have any queries",$headers2);
unset($name,$email,$url,$subject,$message);
header('location: index.html');
}

 ?>
