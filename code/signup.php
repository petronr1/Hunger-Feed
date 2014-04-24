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
	
	$email=$_POST['email']; 
	$password=($_POST['password']);
	
	$email = stripslashes($email);
	$password = stripslashes($password);
	$sql=("SELECT email FROM profile WHERE email='$email'");
	$result= mysqli_query($con, $sql);
	$array = mysql_fetch_array($result);
	$logarray = $array['email'];
	
	if($email == "" || $email == null){
        echo"<script language='javascript' type='text/javascript'>alert('Fill login');window.location.href='signup_form.php';</script>";
 
        }else{
            if($logarray == $email){
 
                echo"<script language='javascript' type='text/javascript'>alert('Login existent');window.location.href='signup_form.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO profile (email,password) VALUES ('$email','$password')";
                $insert = mysql_query($query,$con);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('OKAY!');window.location.href='home.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('NO OKAY');window.location.href='signup_form.php'</script>";
                }
            }
        }
	
?>