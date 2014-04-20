<?php 
	include_once("config.php");
?>

<?php if( !(isset( $_POST['register'] ) ) ) { ?>

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
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
			  <form class="navbar-form navbar-right" role="form">
				<div class="form-group">
					<input type="text" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control">
				</div>
				<button type="submit" class="btn btn-success">Sign in</button>
				<p><font color = "ffffff">Don't have an account?</font><a href="signup.html"><font color = "0000ff"><b> Sign up now</b></font></a></p>
			  </form>
			</div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

		<form method="post" role="form">
			<div class="form-group">
				<label for="inputLastName">Last Name</label>
				<input class="form-control" id="inputLastName" placeholder="Enter last name">
			</div>
			<div class="form-group">
				<label for="inputFirstName">First Name</label>
				<input class="form-control" id="inputFirstName" placeholder="Enter first name">
			</div>
			<div class="form-group">
				<label for="inputUsername">Username</label>
				<input type="username" class="form-control" id="inputUsername" placeholder="Enter username">
			</div>
			<div class="form-group">
				<label for="inputEmail">Email address</label>
				<input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="inputPassword">Password</label>
				<input type="password" class="form-control" id="inputPassword" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="inputConfirmPassword">Confirm your password</label>
				<input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm your password">
			</div>
			<div class="form-group">
				<label for="inputFile">Choose your picture</label>
				<input type="file" id="inputFile">
				<p class="help-block">*jpeg, jpg, png</p>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>


    </div> <!-- /container -->

<?php 
} else {
	$usr = new Users;
	$usr->storeFormValues( $_POST );
	
	if( $_POST['password'] == $_POST['conpassword'] ) {
		echo $usr->register($_POST);	
	} else {
		echo "Password and Confirm password not match";	
	}
}
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
	<script src="../assets/js/docs.min.js"></script>
  </body>
</html>