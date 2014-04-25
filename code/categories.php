<!DOCTYPE html>
<html lang="en">

<?php
$user_name = "student5";
$password = "tOiTvwxpsM";
$database = "student5";
$server = "127.0.0.1";

$count_italian = -1;
$count_japanese = -1;
$count_american = -1;


$con = mysqli_connect($server, $user_name, $password, $database);

		//CHECK to make sure there is no MySQL database error
		if (mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$dishes_italian = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Italian' OR type2 = 'Italian'");
$dishes_japanese = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Japanese' OR type2 = 'Japanese'");
$dishes_american = mysqli_query($con, "SELECT * FROM dish Where type1 = 'American' OR type2 = 'American'");

for($i = 0; $i < mysqli_num_rows($dishes_italian); $i++)
{
	
	$row = mysqli_fetch_array($dishes_italian);
	$img_italian[$i] = $row['img_path'];
	$id_italian[$i] = $row['id'];
	$count_italian++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_japanese); $i++)
{
	
	$row = mysqli_fetch_array($dishes_japanese);
	$img_japanese[$i] = $row['img_path'];
	$id_japanese[$i] = $row['id'];
	$count_japanese++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_american); $i++)
{
	
	$row = mysqli_fetch_array($dishes_american);
	$img_american[$i] = $row['img_path'];
	$id_american[$i] = $row['id'];
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
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php  
			    $email_cookie = $_COOKIE['email'];
				if(isset($email_cookie)){
					echo '<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Past Selections</a></li>
								<li><a href="#">Favorite Dishes</a></li>
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


    <!-- Carousel
    ================================================== -->
    <h3>American</h3>
    <div id="myCarousel" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_american));?><a href="food_info.php?info=<?php echo $id_american[$var]?>" class="thumbnail"><img src="<?php echo $img_american[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


<!-- Italian -->
    <h3>Italian</h3>

	<div id="myCarousel2" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel2"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel2"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel2"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				
        	</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_italian));?><a href="food_info.php?info=<?php echo $id_italian[$var]?>" class="thumbnail"><img src="<?php echo $img_italian[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	
	
	<h3>Japanese</h3>

	<div id="myCarousel3" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><?php $var= (rand(1,$count_japanese));?><a href="food_info.php?info=<?php echo $id_japanese[$var]?>" class="thumbnail"><img src="<?php echo $img_japanese[($var)]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	
<!--
	<div id="myCarousel4" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel4"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel4"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel4"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-2"><a href="food_info.php" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
				<div class="col-xs-2"><a href="#x" class="thumbnail"><img src="img/food1.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-3"><a href="food_info.php" class="thumbnail"><img src="img/food1.jpg" /></a></div>
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
    </div>
    -->
    <!-- /.carousel -->
	
	
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Hunger-Feed, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
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