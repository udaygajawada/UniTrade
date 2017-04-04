<?php
require_once 'swiftmailer/swiftmailer/lib/swift_required.php';
$var = rand(100000,999999);
session_start();
$_SESSION['varname'] = $var;
$_SESSION['firstname'] = $_POST['fname'];
$_SESSION['lastname'] = $_POST['lname'];
$_SESSION['email'] = $_POST['emailid'];
$_SESSION['banner'] = $_POST['bannerid'];
$_SESSION['password'] = $_POST['pswd'];


$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('unitradeksu')
  ->setPassword('unitradekentstateuniversity');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('UNI-TRADE Confirmation Pin for new user ')
  ->setFrom(array('unitradeksu@gmail.com' => 'unitrade'))
  ->setTo(array($_POST['emailid']))
  ->setBody("Here is the confirmation pin ". $var .". Please enter it to successfully create your account.");

$result = $mailer->send($message);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
form{
	width:93%;
	float:left;
	padding:3%;
}
</style>
</head>
<body>
	<form class="emailver" action="savetodb.php" method="post">
		<h2>Email Confirmation</h2></br>
		<label><b>Enter the Confirmation pin:</b></label></br>
		<input type="text" placeholder="Enter the pin" name="pin" style="width:50%" required></br>
		<button class="submit" type="submit" style="margin-left:40%" >Submit</button>
	</form>
</body>
</html>