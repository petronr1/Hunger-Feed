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

$email_cookie = $_COOKIE['email'];


?>


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
<!-- NAVBAR
================================================== -->
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

<!-- ================================================== -->
<?php

$sql=("SELECT favorite_dishes FROM profile WHERE email='$email_cookie'");
//$sql = ("SELECT `email` FROM `profile` WHERE `email` like '$email'");
$result= mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);
$id_fav = $array['favorite_dishes'];

$sql=("SELECT * FROM dish WHERE id='$id_fav'");
$result= mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);
$path_fav = $array['img_path'];
$name_fav = $array['dish_name'];


?>

<div class="container marketing">

<!-- Past Selections Page -->
<br>
<hr class="featurette-divider">
<div class="container marketing">
<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7">
<h2 class="featurette-heading"><?php echo $name_fav;?></h2>
<div>
<!--<img class="img" data-src="holder.js/140x140" alt="Generic placeholder image">

// $dish_info = mysqli_query($con, "SELECT * FROM dish WHERE id='$info'");
// $row = mysqli_fetch_array($dish_info);
// $img = $row['img_path'];
// var_dump($img);
-->

<a href="food_info.php?info=<?php echo $id_fav;?>"><img src="<?php echo $path_fav;?>1.jpg" width=270></a></div>
</div>
</div>
<div class="col-md-7">
<br><br>
</div>
</body>
</div>
</div>

<br><br>
<hr class="featurette-divider">
<!-- FOOTER -->
<footer>
<p class="pull-right"><a href="#">Back to top</a></p>
<p>&copy; 2014 Hunger-Feed, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</div> <!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../dist/js/bootstrap.min.js"></script>
<script src="../assets/js/docs.min.js"></script>
</body>
</html>
