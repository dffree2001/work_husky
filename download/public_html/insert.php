//insert.php
//get values from form

<?php 
$name=$_POST['name'];
$city=$_POST['company'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$to="Kelly@generalcraneservice.net, kelly@huskyequipment.com, Dave@1husky.com, bills@huskyequipment.com, Dave@huskyequipment.com";

$subject="Website Contact Form";
$message=" I would like more information about Husky Equipment. ";
$message .= "\r\n \r\n Name: " . $name . "\r\n Company: " . $company . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Comments: " . $comment;

$from = "Husky Equipment";
$headers = " From: " . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "/r/n";

if(@mail($to, $subject, $message, $headers))
{
	print "<script>document.location.href='http://huskyequipment.com';</script>";

}else{
	echo "Error! Please try again.";
}

?>