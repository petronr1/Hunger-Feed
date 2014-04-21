<?php
$user_name = "root";
$password = "boomshakalaka";
$database = "netfoods";
$server = "127.0.0.1";

$con = mysqli_connect($server, $user_name, $password, $database);

		//CHECK to make sure there is no MySQL database error
		if (mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$email=$_POST['email1']; 
$password=$_POST['password1']; 

$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$sql=("SELECT * FROM profile WHERE email='$email' and password='$password'");
$result= mysqli_query($con, $sql);

$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
if (!isset($_SESSION[$user]))
  $_SESSION[$var] = $$user;
// session_register($user);
if (!isset($_SESSION[$password]))
  $_SESSION[$var] = $$password;

// session_is_registered($user);

header("location:login_success.php");

}
else {
echo "Wrong Username or Password";
}

// function session_is_registered($user)
// {
//     if (isset($_SESSION['$user']))
//    		return true;
//     else 
//     	return false;
// }



?>