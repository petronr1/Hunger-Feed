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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="home.css" rel="stylesheet">
	
	<!--Extra CSS -->
	<style>
		.fleft {
			float:left;
		}	
		.introtext {
			font-size:24px;
		}
		.normtext {
			font-size:20px;
			float:left;
		}
		.normtextnf {
			font-size:20px;
		}		
		.tabletext {
			font-size:18px;
		}
		.headertext {
			font-size:16px;
		}		
	</style>
	
	
  </head>
  
<!-- NAVBAR ================================================== -->
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
                <li class="active"><a href="home.php">Home</a></li>
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

	  </body>
</html>


<!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
  </body>
</html>
 <?php
$con=mysqli_connect("127.0.0.1","student5","tOiTvwxpsM","student5");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "Hello";
}

	// escape variables for security
	$dishname = mysqli_real_escape_string($con, $_POST['dish_name']);
	$restname = mysqli_real_escape_string($con, $_POST['rest_name']);
	$restloc = mysqli_real_escape_string($con, $_POST['rest_location']);
	$type1 = mysqli_real_escape_string($con, $_POST['type1']);
	$type2 = mysqli_real_escape_string($con, $_POST['type2']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	
	
	//create queries and store it into $array 
	$sql=("SELECT * FROM dish WHERE dish_name ='$dishname' AND rest_name = '$restname' ");		
	$result= mysqli_query($con, $sql);
	$array = mysqli_fetch_array($result);	

	//Check if dish name and restaurant name are null and add them to databse if they are
	
	if(  is_null($array['dish_name']) || is_null($array['rest_name'])      ){
	$sql="INSERT INTO dish (dish_name, rest_name, rest_location, type1, type2, description)
			VALUES ('$dishname', '$restname', '$restloc', '$type1', '$type2', '$description')";
			echo "Thank you! Dish added "; 
	}
	
	//Check cases for dish name and restaurant name is not null 
	if(!is_null($array['dish_name']) && !is_null($array['rest_name'])){	
		if(  strcmp(  strtolower(  $array['dish_name']  ),strtolower($dishname)   ) != 0 
			&&strcmp(strtolower($array['rest_name']),strtolower($restname)) != 0 ){
				$sql="INSERT INTO dish (dish_name, rest_name, rest_location, type1, type2, description)
				VALUES ('$dishname', '$restname', '$restloc', '$type1', '$type2', '$description')";
				echo "Thank you! Dish added ";
				}
		elseif(strcmp(strtolower($array['dish_name']),strtolower($dishname)) != 0 
			&& strcmp(strtolower($array['rest_name']),strtolower($restname)) == 0 ){
				$sql="INSERT INTO dish (dish_name, rest_name, rest_location, type1, type2, description)
				VALUES ('$dishname', '$restname', '$restloc', '$type1', '$type2', '$description')";
				echo "Thank you! Dish added" ;
				}
		elseif(strcmp(strtolower($array['dish_name']),strtolower($dishname)) == 0 
			&& strcmp(strtolower($array['rest_name']),strtolower($restname)) != 0 ){
				$sql="INSERT INTO dish (dish_name, rest_name, rest_location, type1, type2, description)
				VALUES ('$dishname', '$restname', '$restloc', '$type1', '$type2', '$description')";
				echo "Thank you! Dish added ";
				}
		
	}
	//Check if dish is in database already.
	if(strcmp(strtolower($array['dish_name']),strtolower($dishname)) == 0 && strcmp(strtolower($array['rest_name']),strtolower($restname)) == 0 )
			echo "Sorry, we already have a record of that dish.";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?> 
