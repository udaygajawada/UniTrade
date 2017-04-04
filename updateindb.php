<?php include 'database.php';?>

<?php
session_start();
$password = $_POST['pswrd'];
$email = $_SESSION['email'];
?>

<?php
if(mysqli_num_rows(mysqli_query($connect,"SELECT password FROM usersinfo WHERE email='".$email."'"))==0)
{
	echo "User not found. Please check the email id or create your account first";
}
else if(mysqli_query($connect,"UPDATE usersinfo SET password='".$password."' WHERE email='".$email."'"))
{
	echo "your password has been successfully changed.";
}
else
{
	echo "Some problem occured. Please try again.";
}
?>




