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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/food.ico">

    <title>Netfoods</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signup.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <div class="navbar-wrapper">
      <div class="container">
		<!--Navbar-->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Netfoods</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              <?php  
				//If the user is logged in show this on navbar
			    $email_cookie = $_COOKIE['email'];
				if(isset($email_cookie)){
					echo '<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="past.php">Past Selections</a></li>
								<li><a href="favorite.php">Favorite Dishes</a></li>
								<li><a href="dishupload.php">Upload a dish</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="form" method="post" action="logout.php">
						<button name="logout" type="submit" class="btn btn-success">Log Out</button>
					</form>';
				
				//If the user is not logged in show this on navbar
				} else {
					echo '</ul>
						<form class="navbar-form navbar-right" role="form" method="post" action="login.php">
							<div class="form-group">
								<input name="email" type="text" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
								<input name="password" type="password" placeholder="Password" class="form-control">
							</div>
							<button name="signin" type="submit" class="btn btn-success">Sign in</button>
							<p><font color = "ffffff">Don\'t have an account?</font><a href="signup_form.php"><font color = "0000ff"><b> Sign up now</b></font></a></p>
						</form>';
				}
			  ?>
			</div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

		<form method="post" role="form" action="signup.php">
			<!--Sign up form-->
			<div class="form-group">
				<label for="inputLastName">Last Name</label>
				<input name="lastName" class="form-control" id="inputLastName" placeholder="Enter last name">
			</div>
			<div class="form-group">
				<label for="inputFirstName">First Name</label>
				<input name="firstName" class="form-control" id="inputFirstName" placeholder="Enter first name">
			</div>
			<div class="form-group">
				<label for="inputEmail">Email address</label>
				<input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="inputPassword">Password (6 Numbers)</label>
				<input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="inputConfirmPassword">Confirm your password</label>
				<input name="confPassword" type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm your password">
			</div>
			<div class="form-group">
				<label for="inputFile">Choose your picture</label>
				<input name="picture" type="file" id="inputFile">
				<p class="help-block">*jpeg, jpg, png</p>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		<!--End of sign up form-->


    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
	<script src="../assets/js/docs.min.js"></script>
  </body>
</html>