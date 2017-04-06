<?php include 'database.php';


$email = $_POST['username'];
$password = $_POST['password'];

$res = mysqli_query($connect,"SELECT * FROM usersinfo WHERE email='".$email."'");
$dbpassword = mysqli_fetch_assoc($res);

if(mysqli_num_rows($res)==0)
{
	echo "User not found. Please check the email id or create your account first";
}
elseif($dbpassword["password"] == $password){
	echo "successfully logged in";
}
else{
	echo "Username and password do not match. Please try again.";
}


?>
