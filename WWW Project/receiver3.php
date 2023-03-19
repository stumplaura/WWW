<?php
$email = "stumpl@kean.edu";
echo "Check your email" . "<br>";
echo "The form was sent by: " . $_POST['name'] . "<br>";
echo "The email is : " . $_POST['mail']. "<br>";
echo "My comments are : " . $_POST['comment']. "<br>";

$to = "stumpl@kean.edu";
$subject = "Thank You for using my page!" . $_POST['name'];
$txt = $_POST['comment'];
$headers = "From " . $_POST['mail'] . "\r\n" . "CC: stumpl@eve.kean.edu" ;

mail($to,$subject,$txt,$headers);
?>