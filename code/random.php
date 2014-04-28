<!DOCTYPE html>
<html lang="en">

<?php
$user_name = "student5";
$password = "tOiTvwxpsM";
$database = "student5";
$server = "127.0.0.1";

$count = -1;

$con = mysqli_connect($server, $user_name, $password, $database);

		//CHECK to make sure there is no MySQL database error
		if (mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$dishes = mysqli_query($con, "SELECT * FROM dish");

for($i = 0; $i < mysqli_num_rows($dishes); $i++)
{
	
	$row = mysqli_fetch_array($dishes);
	$id[$i] = $row['id'];
	$img[$i] = $row['img_path'];
	$count++;
	
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
              <a class="navbar-brand" href="#">Place Picker</a>
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
    <div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
		<?php
		for($i=0;$i<11;$i++)
			if($i==0)
				echo '<li class="active" data-slide-to="$i" data-target="#myCarousel"></li>';
			else
				echo '<li class="" data-slide-to="$i" data-target="#myCarousel"></li>';
			//<li class="" data-slide-to="1" data-target="#myCarousel"></li>
			//<li class="" data-slide-to="2" data-target="#myCarousel"></li>
		?>
		</ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
		<div class="item">
			<div class="row">
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-4"><?php $var= (rand(1,$count));?><a href="food_info.php?info=<?php echo $id[$var]?>" class="thumbnail">
				<img src="<?php echo $img[($var)];?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->	

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