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
	//get the user's data
	$lastName=			$_POST['lastName'];	
	$firstName=			$_POST['firstName'];	
	$email=				$_POST['email'];
	$password=			$_POST['password'];
	//encrypt the password
	$password_crip=		MD5($_POST['password']);
	$confPassword=		$_POST['confPassword']; 
	//encrypt the password
	$confpassword_crip=	MD5($_POST['confPassword']);	
	
	$sql=("SELECT email FROM profile WHERE email='$email'");
	$result= mysqli_query($con, $sql);
	$array = mysqli_fetch_array($result);
	$logarray = $array['email'];
	
	//check if the password and the password confirmation are equals
	if ($password_crip == $confpassword_crip) {
		//check if the password has 6 or more characters
		if(!isset($password[5])){
			echo"<script language='javascript' type='text/javascript'>alert('Please enter a password of 6 characters.');window.location.href='signup_form.php'</script>";
		}else{
			//check if there is an email
			if($email == "" || $email == null){
				echo"<script language='javascript' type='text/javascript'>alert('Fill email');window.location.href='signup_form.php';</script>";
 
			}else{
				//check if the user is new
				if($logarray == $email){
					echo"<script language='javascript' type='text/javascript'>alert('Existing User');window.location.href='signup_form.php';</script>";
					die();
				}else{
					$query = "INSERT INTO profile (lastName,firstName,email,password) VALUES ('$lastName','$firstName','$email','$password_crip')";
					$insert = mysqli_query($con, $query);
                
					if($insert){
						echo"<script language='javascript' type='text/javascript'>alert('User created successfully!');window.location.href='home.php'</script>";
					}else{
						echo"<script language='javascript' type='text/javascript'>alert('Problem creating user. Try again.');window.location.href='signup_form.php'</script>";
					}
				}
			}
		}
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('Different passwords.');window.location.href='signup_form.php'</script>";
	}
	
?>