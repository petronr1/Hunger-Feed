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
//
// $dishes_american = mysqli_query($con, "SELECT * FROM dish Where type1 = 'American' OR type2 = 'American'");
//
// for($i = 0; $i < mysqli_num_rows($dishes_american); $i++)
// {
// $row = mysqli_fetch_array($dishes_ammerican);
// $img_italian[$i] = $row['img_path'];
// }

    $info = $_GET['info'];
$email_cookie = $_COOKIE['email'];
$mode = $_GET['mode'];
}
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
$sql=("SELECT * FROM dish WHERE id='$info'");
//$sql = ("SELECT `email` FROM `profile` WHERE `email` like '$email'");
$result= mysqli_query($con, $sql);
$array = mysqli_fetch_array($result);
//$logarray = $array['info'];
//print_r($logarray);

?>
<div class="container marketing">

<!-- Past Selections Page -->
<br><br><br>
<hr class="featurette-divider">
<div class="container marketing">
<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7">
<h2 class="featurette-heading"><?php echo $array['rest_name'] ?> </h2>
<br><br>
<div>
<!--<img class="img" data-src="holder.js/140x140" alt="Generic placeholder image">-->
<?php
$dish_info = mysqli_query($con, "SELECT * FROM dish WHERE id='$info'");
$row = mysqli_fetch_array($dish_info);
$img = $row['img_path'];
var_dump($img);
?>
<img src="<?php echo $array['img_path'];?>1.jpg" width=140 height=140/></a></div>
<p>** Image goes here **</p>
</div>
</div>
<div class="col-md-7">
<h2> Description: </h2>
<p> ** Description goes here ** </p>
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
<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
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
