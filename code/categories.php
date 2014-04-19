<!DOCTYPE html>
<html lang="en">

<?php
$user_name = "root";
$password = "pass";
$database = "netfoods";
$server = "127.0.0.1";

$count_italian = 0;
$count_japanese = 0;
$count_american = 0;

$img = array();

$con = mysqli_connect($server, $user_name, $password, $database);

		//CHECK to make sure there is no MySQL database error
		if (mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$dishes_italian = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Italian' OR type2 = 'Italian'");
$dishes_japanese = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Japanese' OR type2 = 'Japanese'");
$dishes_american = mysqli_query($con, "SELECT * FROM dish Where type1 = 'American' OR type2 = 'American'");

while(mysqli_fetch_array($dishes_italian) != NULL)
{
	
	$row = mysqli_fetch_array($dishes_italian);
	$img_italian[$count_italian] = $row['img_path'];
	$count_italian++;
	
}

$count = 0;

while(mysqli_fetch_array($dishes_japanese) != NULL)
{
	
	$row = mysqli_fetch_array($dishes_japanese);
	$img_japanese[$count_japanese] = $row['img_path'];
	$count_japanese++;
	
}


while(mysqli_fetch_array($dishes_american) != NULL)
{
	
	$row = mysqli_fetch_array($dishes_american);
	$img_american[$count_american] = $row['img_path'];
	$count_american++;
	
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

    <!-- Custom styles for this template -->
    <link href="categories.css" rel="stylesheet">
	
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
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Past Selections</a></li>
                    <li><a href="#">Favorite Dishes</a></li>
                  </ul>
                </li>
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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-2"><a href="index2.html" class="thumbnail"><img src="<?php echo $img_american[(rand(0,$count_american))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="<?php echo $img_american[(rand(0,$count_american))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="<?php echo $img_american[(rand(0,$count_american))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="<?php echo $img_american[(rand(0,$count_american))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="<?php echo $img_american[(rand(0,$count_american))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="<?php echo $img_american[(rand(0,$count_american))];?><?php echo rand(1,1);?>" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><a href="index2.html" class="thumbnail"><img src="<?php echo $img_italian[(rand(0,$count_italian))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="<?php echo $img_italian[(rand(0,$count_italian))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="<?php echo $img_italian[(rand(0,$count_italian))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="<?php echo $img_italian[(rand(0,$count_italian))];?><?php echo rand(1,1);?>" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="<?php echo $img_japanese[(rand(0,$count_japanese))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="<?php echo $img_japanese[(rand(0,$count_japanese))];?><?php echo rand(1,1);?>" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="<?php echo $img_japanese[(rand(0,$count_japanese))];?><?php echo rand(1,1);?>" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

	<div id="myCarousel2" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel2"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel2"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel2"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-2"><a href="index2.html" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><a href="index2.html" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	
	<div id="myCarousel3" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-2"><a href="index2.html" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><a href="index2.html" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	
	<div id="myCarousel4" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel4"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel4"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel4"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-2"><a href="index2.html" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><a href="index2.html" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-3"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-4"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel4" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel4" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	
	
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
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