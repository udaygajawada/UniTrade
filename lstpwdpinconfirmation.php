<?php
require_once 'swiftmailer/swiftmailer/lib/swift_required.php';
$var = rand(100000,999999);
session_start();
$_SESSION['varname'] = $var;
$_SESSION['email'] = $_POST['lstpwdemail'];


$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('unitradeksu')
  ->setPassword('unitradekentstateuniversity');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('UNI-TRADE Confirmation Pin for new user ')
  ->setFrom(array('unitradeksu@gmail.com' => 'unitrade'))
  ->setTo(array($_POST['lstpwdemail']))
  ->setBody("Here is the confirmation pin  ". $var .". Please enter it in the space provided to successfully create your account.");

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
	<form class="lstpwdpinconfirm" name="lstpwdform" action="passwordreset.php" method="post">
		<h2>Forgot Password</h2></br>
		<label><b>Enter the Confirmation pin:</b></label></br>
		<input type="text" placeholder="Enter the pin" name="pin" style="width:50%" 	required></br>
		<button class="submit" type="submit "  style="margin-left:40%" >Submit</button>
	</form>
</body>
</html>