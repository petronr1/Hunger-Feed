<?php
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

$email=		$_POST['email']; 
$signin=	$_POST['signin'];
//$password=	$_POST['password']; 
$password=	MD5($_POST['password']);

//$email = stripslashes($email);
//$password = stripslashes($password);
// $email = mysql_real_escape_string($email);
// $password = mysql_real_escape_string($password);
//echo $email . "\n";
//echo $password;

if(isset($signin)) {

	$sql=("SELECT * FROM profile WHERE email='$email' and password='$password'");
	$result= mysqli_query($con, $sql);
	// var_dump($result);
	$count=mysqli_num_rows($result);
	//echo $count;

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		setcookie("email",$email);
		header("location:home.php");
		//echo "teste \n";
		//echo $sql;
		//echo $result['email'];
		//print_r ($result);
		
	}else {
		echo"<script language='javascript' type='text/javascript'>alert('Login and/or password wrong');window.location.href='home.php';</script>";
        die();

		// session_start();

		// Register $myusername, $mypassword and redirect to file "login_success.php"
		//if (!isset($_SESSION[$email]))
		//$_SESSION[$email] = $$email;
		// session_register($user);
		//if (!isset($_SESSION[$password]))
		//$_SESSION[$password] = $$password;

		//var_dump($_SESSION);

		// session_is_registered($user);

		//header("location:home.php");

	}
}

// function session_is_registered($user)
// {
//     if (isset($_SESSION['$user']))
//    		return true;
//     else 
//     	return false;
// }



?>