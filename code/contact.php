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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="contact.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
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
                <li class="active"><a href="#">Contact</a></li>
                <?php
					//If the user is logged in show this on navbar
					$email_cookie = $_COOKIE['email'];
					if(isset($email_cookie)){
						echo '<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="past.php">Past Selections</a></li>
									<li><a href="favorite.php">Favorite Dishes</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-form navbar-right" role="form" method="post" action="logout.php">
							<p>
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


    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
	  <hr class="featurette-divider">

      <!-- Show our pictures and informations -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/borm.jpg" width="140" height="140" alt="Chris picture">
          <h2>Chris Borm</h2>
          <p>Email: borm2@tcnj.edu</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/pedro.jpg" width="140" height="140" alt="Pedro picture">
          <h2>Pedro Furlanetto</h2>
          <p>Email: furlanp1@tcnj.edu</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/jared.jpg" width="140" height="140" alt="Jared picture">
          <h2>Jared Milburn</h2>
          <p>Email: milburj1@tcnj.edu</p>
       
        </div><!-- /.col-lg-4 -->
         <div class="col-lg-4">
          <img class="img-circle" src="img/rocco.jpg" width="140" height="140" alt="Rocco picture">
          <h2>Rocco Petrongolo</h2>
          <p>Email: petronr1@tcnj.edu</p>		
         
        </div><!-- /.col-lg-4 -->
         <div class="col-lg-4">
          <img class="img-circle" src="img/warren.jpg" width="140" height="140" alt="Warren picture">
          <h2>Warren Smith</h2>
          <p>Email: smith332@tcnj.edu</p>
    
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->

	  <hr class="featurette-divider">
      

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; Hunger-Feed, Inc. &middot;</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
  </body>
</html>