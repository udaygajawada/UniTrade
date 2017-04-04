<?php include 'database.php';?>
 
<?php
session_start();
$var = $_SESSION['varname'];
$fname= $_SESSION['firstname'];
$lname = $_SESSION['lastname'];
$emailid = $_SESSION['email'];
$bannerid = $_SESSION['banner'];
$pswd = $_SESSION['password'];
$pin = $_POST['pin'];
 
//Execute the query
 
if($var == $pin){
	mysqli_query($connect,"INSERT INTO usersinfo(firstname,lastname,email,banner,password)
				VALUES('$fname','$lname','$emailid','$bannerid','$pswd')");
	if(mysqli_affected_rows($connect) > 0){
		echo "<p style='font-family:calibri'>Your account has been successfully registered </p>";
	}
	else{
		echo "<p style='font-family:calibri'>The email id you entered is already registered.Please try logging in.</p>";
	}
}	
else{
	echo "<p style='font-family:calibri'>The pin you entered doesnot match our records. Please try again.</p>";

}
?>

