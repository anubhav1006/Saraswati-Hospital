<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$contact = trim($_POST['contact']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);
$support_address = "priyam.95shah@gmail.com"; //Your Company Email ID//
$headers = "From: ".$email;
$headers2 = "From: ".$support_address;
$finalmessage = "


From:   $_POST[name]
email:  $_POST[email]
Phone:  $_POST[contact]
Subject:$_POST[subject]
Message:$_POST[message]

";

if ( $name == "" )

{
}
else
{
mail("$support_address","$subject","$finalmessage",$headers);
$result = "Your message has been sent succesfully!";
// Your Auto Replay Message//
mail("$email","Thankyou for contacting us !","We will contact you with in next 24 hrs ",$headers2);
unset($name,$email,$url,$subject,$message);
header('location: index.html');
}

 ?>
