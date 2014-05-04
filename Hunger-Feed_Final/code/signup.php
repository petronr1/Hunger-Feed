<!-- 
CSC470
NetFood
Created 04/28/2014

Rocco Petrongolo
Warren Smith
Pedro Furlanetto
Jared Milburn
Chris Borm
-->
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
	
	$lastName=			$_POST['lastName'];	
	$firstName=			$_POST['firstName'];	
	$email=				$_POST['email'];
	$password=			$_POST['password'];
	$password_crip=		MD5($_POST['password']);
	$confPassword=		$_POST['confPassword']; 
	$confpassword_crip=	MD5($_POST['confPassword']);	
	
	//$email = stripslashes($email);
	//$password = stripslashes($password);
	$sql=("SELECT email FROM profile WHERE email='$email'");
	//$sql = ("SELECT `email` FROM `profile` WHERE `email` like '$email'");
	$result= mysqli_query($con, $sql);
	$array = mysqli_fetch_array($result);
	$logarray = $array['email'];
	
	//if (!strcmp($password, $confPassword)) {
	if ($password_crip == $confpassword_crip) {
	
		if(!isset($password[5])){
			echo"<script language='javascript' type='text/javascript'>alert('6 NUMBERS');window.location.href='signup_form.php'</script>";
		}else{
		
			if($email == "" || $email == null){
				echo"<script language='javascript' type='text/javascript'>alert('Fill login');window.location.href='signup_form.php';</script>";
 
			}else{
				if($logarray == $email){
					//echo 'teste';
					//print_r($result);
					//print_r($array);
					//print_r($logarray);
					//var_dump(mysqli_fetch_array($result));
					echo"<script language='javascript' type='text/javascript'>alert('Login existent');window.location.href='signup_form.php';</script>";
					die();
				}else{
					$query = "INSERT INTO profile (lastName,firstName,email,password) VALUES ('$lastName','$firstName','$email','$password_crip')";
					$insert = mysqli_query($con, $query);
                
					if($insert){
						echo"<script language='javascript' type='text/javascript'>alert('OKAY!');window.location.href='home.php'</script>";
					}else{
						//echo 'teste';
						//print_r($result);
						//var_dump(mysqli_fetch_array($result));
						//echo"<script language='javascript' type='text/javascript'>alert('NO OKAY');window.location.href='signup_form.php'</script>";
					}
				}
			}
		}
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('DIFFERENT PASSWORDS');window.location.href='signup_form.php'</script>";
	}
	
?>