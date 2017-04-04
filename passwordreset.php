<?php
session_start();
$var = $_SESSION['varname'];
$email = $_SESSION['email'];
$_SESSION['email'] = $email;
?>
<html>
<head>
</head>
<body>
 <script type="text/javascript">
  var varname='<?php echo $var?>';
  var pin='<?php echo $_POST['pin'];?>';
  if( varname == pin){
	  document.write('<html><head><link rel="stylesheet" type="text/css" href="style.css"><style>form{ width:93%;float:left;padding:3%;}</style></head><body><form class="newpwdenter" name="enternewpwd" action="updateindb.php" method="post"><h2>Reset Password</h2><label><b>Type New Password:</b></label><input type="password" placeholder="Enter password" name="pswrd" style="width:50%" required></br><label><b>Re-Type New Password:</b></label><input type="password" placeholder="confirm password" name="cpswrd" style="width:50%" required></br><button class="submit" type="submit "  style="margin-left:40%" >Submit</button></form></body></html>');
  }
  else{
	  document.write("<html><body><p>The pin you entered doesnot match our records. please try again.</p></body></html>");
	  window.location.replace("localhost/sem");
  }
  </script>
</body>
</html>