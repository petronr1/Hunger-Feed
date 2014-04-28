<?php
//Connecting the database
$user_name = "student5";
$password = "tOiTvwxpsM";
$database = "student5";
$server = "127.0.0.1";

$con = mysqli_connect($server, $user_name, $password, $database);

		//CHECK to make sure there is no MySQL database error
		if (mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
//get the value of email
$email=		$_POST['email'];
//return if the signin button was clicked or no 
$signin=	$_POST['signin'];
//encrypt the password
$password=	MD5($_POST['password']);

//if the signin button was clicked
if(isset($signin)) {
	//try to find the user in the database
	$sql=("SELECT * FROM profile WHERE email='$email' and password='$password'");
	$result= mysqli_query($con, $sql);
	$count=mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		setcookie("email",$email);
		header("location:home.php");
	}else {
		echo"<script language='javascript' type='text/javascript'>alert('Login and/or password wrong');window.location.href='home.php';</script>";
        die();
	}
}
?>