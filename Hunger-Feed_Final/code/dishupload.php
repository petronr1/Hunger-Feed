
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
</html> 
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
<!-- Create fields to upload a new dish -->
</form>
		<form method="post" role="form" action="insert.php">
			<div class="form-group">
				<label for="inputDishName">Dish Name</label>
				<input type="text" name="dish_name" class="form-control" id="inputDishName" placeholder="Enter dish name">
			</div>
			<div class="form-group">
				<label for="inputRestName">Restaurant Name</label>
				<input type="text" name="rest_name" class="form-control" id="RestName" placeholder="Enter restaurant name">
			</div>
			<div class="form-group">
				<label for="inputRestLoc">Restaurant Address</label>
				<input type="text" name ="rest_location" class="form-control" id="restLoc" placeholder="Enter restaurant address">
			</div>
			<div class="form-group">
				<label for="inputType1">Type 1</label>
				<input type="text" name="type1" type="Type1" class="form-control" id="inputType1" placeholder="Enter the type of food. EG Italian, Chinese">
			</div>
			<div class="form-group">
				<label for="inputType2">Type 2</label>
				<input type="text" name="type2" type="Type2" class="form-control" id="inputType2" placeholder="Enter additional type of food. EG Italian, Chinese">
			</div>
			<div class="form-group">
				<label for="inputDescription">Dish description</label>
				<input type="text" name="description" type="desc" class="form-control" id="inputDesc" placeholder="Enter a brief description of the dish">
			</div>
			<div class="form-group">
				<label for="inputFile">Choose your picture of the dish</label>
				<input name="picture" type="file" id="inputFile">
				<p class="help-block">*jpeg, jpg, png</p> 
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>


    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
	<script src="../assets/js/docs.min.js"></script>
  </body>
	<?php
		mysqli_close($con);
	?> 
</html>




