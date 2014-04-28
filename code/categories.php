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

$count_italian = -1;
$count_japanese = -1;
$count_american = -1;
$count_diners = -1;
$count_brunch = -1;
$count_chinese = -1;
$count_spanish = -1;
$count_mexican = -1;
$count_pizza = -1;
$count_sandwiches = -1;
$count_italian = -1;



$con = mysqli_connect($server, $user_name, $password, $database);

		//CHECK to make sure there is no MySQL database error
		if (mysqli_connect_errno()) 
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

$dishes_italian = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Italian' OR type2 = 'Italian'");
$dishes_japanese = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Japanese' OR type2 = 'Japanese'");
$dishes_american = mysqli_query($con, "SELECT * FROM dish Where type1 = 'American' OR type2 = 'American'");
$dishes_diners = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Diners' OR type2 = 'Diners'");
$dishes_brunch = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Brunch' OR type2 = 'Brunch'");
$dishes_chinese = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Chinese' OR type2 = 'Chinese'");
$dishes_spanish = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Spanish' OR type2 = 'Spanish'");
$dishes_mexican = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Mexican' OR type2 = 'Mexican'");
$dishes_pizza = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Pizza' OR type2 = 'Pizza'");
$dishes_sandwiches = mysqli_query($con, "SELECT * FROM dish Where type1 = 'Sandwiches' OR type2 = 'Sandwiches'");

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

for($i = 0; $i < mysqli_num_rows($dishes_diners); $i++)
{
	
	$row = mysqli_fetch_array($dishes_diners);
	$img_diners[$i] = $row['img_path'];
	$id_diners[$i] = $row['id'];
	$count_diners++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_brunch); $i++)
{
	
	$row = mysqli_fetch_array($dishes_brunch);
	$img_brunch[$i] = $row['img_path'];
	$id_brunch[$i] = $row['id'];
	$count_brunch++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_chinese); $i++)
{
	
	$row = mysqli_fetch_array($dishes_chinese);
	$img_chinese[$i] = $row['img_path'];
	$id_chinese[$i] = $row['id'];
	$count_chinese++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_mexican); $i++)
{
	
	$row = mysqli_fetch_array($dishes_mexican);
	$img_mexican[$i] = $row['img_path'];
	$id_mexican[$i] = $row['id'];
	$count_mexican++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_pizza); $i++)
{
	
	$row = mysqli_fetch_array($dishes_pizza);
	$img_pizza[$i] = $row['img_path'];
	$id_pizza[$i] = $row['id'];
	$count_pizza++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_sandwhiches); $i++)
{
	
	$row = mysqli_fetch_array($dishes_Sandwiches);
	$img_sandwiches[$i] = $row['img_path'];
	$id_sandwiches[$i] = $row['id'];
	$count_sandwiches++;
	
}

for($i = 0; $i < mysqli_num_rows($dishes_spanish); $i++)
{
	
	$row = mysqli_fetch_array($dishes_spanish);
	$img_spanish[$i] = $row['img_path'];
	$id_spanish[$i] = $row['id'];
	$count_spanish++;
	
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
				<?php 
					$var1= (rand(1,$count_american));
					do
					{
						$var2 = (rand(1,$count_american));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_american))
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_american));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var1]?>" class="thumbnail"><img src="<?php echo $img_american[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var2]?>" class="thumbnail"><img src="<?php echo $img_american[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var3]?>" class="thumbnail"><img src="<?php echo $img_american[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var4]?>" class="thumbnail"><img src="<?php echo $img_american[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_american));
					do
					{
						$var2 = (rand(1,$count_american));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_american));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_american));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var1]?>" class="thumbnail"><img src="<?php echo $img_american[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var2]?>" class="thumbnail"><img src="<?php echo $img_american[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var3]?>" class="thumbnail"><img src="<?php echo $img_american[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var4]?>" class="thumbnail"><img src="<?php echo $img_american[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_american));
					do
					{
						$var2 = (rand(1,$count_american));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_american));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_american));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var1]?>" class="thumbnail"><img src="<?php echo $img_american[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var2]?>" class="thumbnail"><img src="<?php echo $img_american[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var3]?>" class="thumbnail"><img src="<?php echo $img_american[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_american[$var4]?>" class="thumbnail"><img src="<?php echo $img_american[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    <h3>Brunch</h3>
    <div id="myCarousel" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_brunch));
					do
					{
						$var2 = (rand(1,$count_brunch));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_brunch));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_brunch));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var1]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var2]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var3]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var4]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_brunch));
					do
					{
						$var2 = (rand(1,$count_brunch));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_brunch))
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_brunch));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var1]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var2]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var3]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var4]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_brunch));
					do
					{
						$var2 = (rand(1,$count_brunch));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_brunch));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_brunch));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var1]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var2]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var3]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_brunch[$var4]?>" class="thumbnail"><img src="<?php echo $img_brunch[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

<!-- Chinese -->
    <h3>Chinese</h3>

	<div id="myCarousel2" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel2"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel2"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel2"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_chinese));
					do
					{
						$var2 = (rand(1,$count_chinese));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_chinese));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_chinese));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var1]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var2]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var3]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var4]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				
			</div>
        </div>
        <div class="item">
				<?php 
					$var1= (rand(1,$count_chinese));
					do
					{
						$var2 = (rand(1,$count_chinese));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_chinese));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_chinese));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var1]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var2]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var3]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var4]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			
        	</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_chinese));
					do
					{
						$var2 = (rand(1,$count_chinese));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_chinese));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_chinese));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var1]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var2]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var3]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_chinese[$var4]?>" class="thumbnail"><img src="<?php echo $img_chinese[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
			
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

<!-- Diners -->

	<h3>Diners</h3>

	<div id="myCarousel3" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_diners));
					do
					{
						$var2 = (rand(1,$count_diners));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_diners));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_diners));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var1]?>" class="thumbnail"><img src="<?php echo $img_diners[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var2]?>" class="thumbnail"><img src="<?php echo $img_diners[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var3]?>" class="thumbnail"><img src="<?php echo $img_diners[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var4]?>" class="thumbnail"><img src="<?php echo $img_diners[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_diners));
					do
					{
						$var2 = (rand(1,$count_diners));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_diners));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_diners));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var1]?>" class="thumbnail"><img src="<?php echo $img_diners[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var2]?>" class="thumbnail"><img src="<?php echo $img_diners[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var3]?>" class="thumbnail"><img src="<?php echo $img_diners[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var4]?>" class="thumbnail"><img src="<?php echo $img_diners[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_diners));
					do
					{
						$var2 = (rand(1,$count_diners));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_diners))
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_diners));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var1]?>" class="thumbnail"><img src="<?php echo $img_diners[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var2]?>" class="thumbnail"><img src="<?php echo $img_diners[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var3]?>" class="thumbnail"><img src="<?php echo $img_diners[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_diners[$var4]?>" class="thumbnail"><img src="<?php echo $img_diners[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
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
				<?php 
					$var1= (rand(1,$count_italian));
					do
					{
						$var2 = (rand(1,$count_italian));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_italian));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_italian));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var1]?>" class="thumbnail"><img src="<?php echo $img_italian[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var2]?>" class="thumbnail"><img src="<?php echo $img_italian[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var3]?>" class="thumbnail"><img src="<?php echo $img_italian[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var4]?>" class="thumbnail"><img src="<?php echo $img_italian[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				
			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_italian));
					do
					{
						$var2 = (rand(1,$count_italian));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_italian));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_italian));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var1]?>" class="thumbnail"><img src="<?php echo $img_italian[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var2]?>" class="thumbnail"><img src="<?php echo $img_italian[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var3]?>" class="thumbnail"><img src="<?php echo $img_italian[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var4]?>" class="thumbnail"><img src="<?php echo $img_italian[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				
        	</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_italian));
					do
					{
						$var2 = (rand(1,$count_italian));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_italian));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_italian));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var1]?>" class="thumbnail"><img src="<?php echo $img_italian[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var2]?>" class="thumbnail"><img src="<?php echo $img_italian[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var3]?>" class="thumbnail"><img src="<?php echo $img_italian[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_italian[$var4]?>" class="thumbnail"><img src="<?php echo $img_italian[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				
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
				<?php 
					$var1= (rand(1,$count_japanese));
					do
					{
						$var2 = (rand(1,$count_japanese));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_japanese));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_japanese));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var1]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var2]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var3]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var4]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_japanese));
					do
					{
						$var2 = (rand(1,$count_japanese));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_japanese));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_japanese));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var1]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var2]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var3]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var4]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_japanese));
					do
					{
						$var2 = (rand(1,$count_japanese));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_japanese));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_japanese));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var1]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var2]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var3]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_japanese[$var4]?>" class="thumbnail"><img src="<?php echo $img_japanese[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

	<h3>Mexican</h3>

	<div id="myCarousel3" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_mexican));
					do
					{
						$var2 = (rand(1,$count_mexican));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_mexican));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_mexican));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var1]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var2]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var3]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var4]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_mexican));
					do
					{
						$var2 = (rand(1,$count_mexican));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_mexican));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_mexican));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var1]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var2]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var3]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var4]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_mexican));
					do
					{
						$var2 = (rand(1,$count_mexican));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_mexican));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_mexican));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var1]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var2]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var3]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_mexican[$var4]?>" class="thumbnail"><img src="<?php echo $img_mexican[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

	<h3>Pizza</h3>

	<div id="myCarousel3" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_pizza));
					do
					{
						$var2 = (rand(1,$count_pizza));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_pizza));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_pizza));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var1]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var2]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var3]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var4]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_pizza));
					do
					{
						$var2 = (rand(1,$count_pizza));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_pizza));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_pizza));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var1]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var2]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var3]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var4]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_pizza));
					do
					{
						$var2 = (rand(1,$count_pizza));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_pizza));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_pizza));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var1]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var2]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var3]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_pizza[$var4]?>" class="thumbnail"><img src="<?php echo $img_pizza[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

	<h3>Sandwiches</h3>

	<div id="myCarousel3" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_sandwiches));
					do
					{
						$var2 = (rand(1,$count_sandwiches));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_sandwiches));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_sandwiches));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var1]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var2]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var3]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var4]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_sandwiches));
					do
					{
						$var2 = (rand(1,$count_sandwiches));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_sandwiches));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_sandwiches));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var1]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var2]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var3]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var4]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_sandwiches));
					do
					{
						$var2 = (rand(1,$count_sandwiches));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_sandwiches));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_sandwiches));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var1]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var2]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var3]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $id_sandwiches[$var4]?>" class="thumbnail"><img src="<?php echo $img_sandwiches[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

	<h3>Spanish</h3>

	<div id="myCarousel3" class="carousel slide">
	  <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="1" data-target="#myCarousel3"></li>
		<li class="" data-slide-to="2" data-target="#myCarousel3"></li>
	  </ol>
      <div class="carousel-inner">
        <div class="item active">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_spanish));
					do
					{
						$var2 = (rand(1,$count_spanish));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_spanish));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_spanish));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var1]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var2]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var3]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var4]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_spanish));
					do
					{
						$var2 = (rand(1,$count_spanish));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_spanish));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_spanish));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var1]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var2]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var3]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var4]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

			</div>
        </div>
        <div class="item">
			<div class="row">
				<?php 
					$var1= (rand(1,$count_spanish));
					do
					{
						$var2 = (rand(1,$count_spanish));
					} while ($var2 == $var1);
					do
					{
						$var3 = (rand(1,$count_spanish));
					} while (($var3 == $var1) || ($var3 = $var2));
					do
					{
						$var4 = (rand(1,$count_spanish));
					} while (($var4 == $var1) || ($var4 = $var2) || ($var4 = $var3));
				?>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var1]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var1]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var2]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var2]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var3]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var3]; ?><?php echo rand(1,1);?>.jpg" /></a></div>
				<div class="col-xs-3"><a href="food_info.php?info=<?php echo $img_spanish[$var4]?>" class="thumbnail"><img src="<?php echo $img_spanish[$var4]; ?><?php echo rand(1,1);?>.jpg" /></a></div>

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