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
// 	$row = mysqli_fetch_array($dishes_ammerican);
// 	$img_italian[$i] = $row['img_path'];
// }

    $info = $_GET['info'];
	$email_cookie = $_COOKIE['email'];
	$mode = $_GET['mode'];
	if ($mode == "vote") {
		$cookie = "dish.$id";
		if(isset($_COOKIE[$cookie])) {
			//Echo "Sorry You have already ranked that food <p>";
		}
		else { 
			$month = 2592000 + time(); 
			setcookie(dish.$id, Voted, $month);
			$voted = $_GET['voted'];
			$query = ("UPDATE dish SET total = total+'$voted', votes = votes+1 WHERE id = '$info'");
			mysqli_query ($con, $query); 
			//Echo "Your vote has been cast <p>"; 
		}
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
  
<!-- NAVBAR================================================== -->
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

		<!-- Food Info page code starts here -->
		<br><br><br>
		
		<hr class="featurette-divider">
		
	
	<div class="container marketing">
		<hr class="featurette-divider">
<<<<<<< HEAD
		
		<!-- Place/dish name and picture section -->
		<div class="col-md-7">
			<h2 class="featurette-heading"> Restaurant: <?php echo $array['rest_name'] ?> </h2>
			<br><br>
			<div>
			<!--<img class="img" data-src="holder.js/140x140" alt="Generic placeholder image">-->
			<?php
				//$dish_info = mysqli_query($con, "SELECT * FROM dish WHERE id='$info'");
				//$row = mysqli_fetch_array($dish_info);
				//$img = $row['img_path'];
				//var_dump($img);
			?>
			<img src="<?php echo $array['img_path'];?>1.jpg" width=140 height=140/></a></div>
			<p>Dish Name: <?php echo $array['dish_name'] ?></p>
=======
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading"> Restaurant: <?php echo $array['rest_name'] ?> </h2>
				<br><br>
				<div>
				<!--<img class="img" data-src="holder.js/140x140" alt="Generic placeholder image">-->
				<?php
					//$dish_info = mysqli_query($con, "SELECT * FROM dish WHERE id='$info'");
					//$row = mysqli_fetch_array($dish_info);
					//$img = $row['img_path'];
					//var_dump($img);
				?>
				<img src="<?php echo $array['img_path'];?>1.jpg" width=270 height=270/></a></div>
				<p>Dish Name: <?php echo $array['dish_name'] ?></p>
				</br>
				<form method="POST" name="favorite" action="food_info.php?info=<?php echo $info;?>">
					<button type="submit" name="future" class="btn btn-success">Save it for later!</button>
					<button type="submit" name="past" class="btn btn-success">I already ate this!</button>
				</form>
				
				<?php
					$dishInfo = $info;
					$i = 1;
					$newfav = 'f' . strval($i);
// 					echo $newfav;
					if(isset($_POST['future']))
					{
						mysqli_query($con, "UPDATE profile SET favorite_dishes = '".$dishInfo."' WHERE email='".$email_cookie."'");
						mysqli_query($con, "ALTER TABLE profile SET fav1 VARCHAR(255) DEFAULT NULL");

						echo "You can save it for later!";
					}

					if(isset($_POST['past']))
					{
						mysqli_query($con, "UPDATE profile SET past_dishes = '$dishInfo' WHERE email='".$email_cookie."'");
						echo "Hope it was good!";
					}

				?>
				</div>
>>>>>>> 82dde99adc107bcb9cb12f1f095332313186f389
			</div>
			
			
			<!-- Ratings section -->
			<div class="col-md-7">
			<h2> Ratings: </h2>
			<!--<div id="13980968631035" class="wE">-->
				<?php
					if(isset($email_cookie)){
						if($array['total'] > 0 && $array['votes'] > 0) {
							$current = $array['total'] / $array['votes'];
						}else {
							$current=0;
						}
						echo "Current Rating: " . round($current, 1) . " (" . $array['votes'] . " votes) <br>";
						echo "Rank Me: ";
						//echo "<a href=".$_SERVER['PHP_SELF']."?info=".$info."
						echo "<a href=".$_SERVER['PHP_SELF']."?mode=vote&voted=1&info=".$info.">Vote 1</a> | ";
						//$mode = $_GET['mode']; 
						//var_dump ($mode);
						//var_dump ($info);
						//var_dump($array['total']);
						//var_dump($array['votes']);
						//var_dump($current);
						echo "<a href=".$_SERVER['PHP_SELF']."?mode=vote&voted=2&info=".$info.">Vote 2</a> | ";
						echo "<a href=".$_SERVER['PHP_SELF']."?mode=vote&voted=3&info=".$info.">Vote 3</a> | ";
						echo "<a href=".$_SERVER['PHP_SELF']."?mode=vote&voted=4&info=".$info.">Vote 4</a> | ";
						echo "<a href=".$_SERVER['PHP_SELF']."?mode=vote&voted=5&info=".$info.">Vote 5</a> | ";
						//$mode = $_GET['mode'];
					} else {
						if($array['total'] > 0 && $array['votes'] > 0) {
							$current = $array['total'] / $array['votes'];
						}else {
							$current=0;
						}
						echo "Current Rating: " . round($current, 1) . " (" . $array['votes'] . " votes) <br>";
					}
				?>
			<!--</div>-->
			<br><br>
			</div>
			
			
			<!-- Description section -->
			<div class="col-md-7">
			<h2> Description: </h2>
			<p> ** Description goes here ** </p>
			<br><br>
			</div>
			
			
			<!-- Comment box section -->
			<div class="col-md-7">
			<h2> Let People Know What You Think: </h2>
			<!-- begin htmlcommentbox.com -->
			<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Widget</a> is loading comments...</div>
			<link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
			<script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=(hcb_user.PAGE || ""+window.location), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
			<!-- end htmlcommentbox.com -->
			</div>
		
		
			<!-- Directions/map display ========================== -->
			<div class="col-md-7">
			<br><br>
			<h2> Directions: </h2>
			</div>
			<div class = "directions">	
			<br><br>
			
			<head>
			<style>
			  html, body, #map-canvas {
				height: 450px;
				margin: 0px;
				padding: 0px;
				width: 50%;
			  }
			  #panel {
				position: absolute;
				top: 5px;
				left: 50%;
				margin-left: -180px;
				z-index: 5;
				background-color: #fff;
				padding: 5px;
				border: 1px solid #999;
			  }
			</style>
			<style>
			  #directions-panel {
				height: 450px;
				float: right;
				width: 50%;
				overflow: auto;
			  }
<<<<<<< HEAD

			  #map-canvas {
				margin-right: 400px;
			  }

			  #control {
				background: #fff;
				padding: 5px;
				font-size: 14px;
				font-family: Arial;
				border: 1px solid #ccc;
				box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
				display: none;
			  }

			  @media print {
				#map-canvas {
				  height: 500px;
				  margin: 0;
				}

				#directions-panel {
				  float: none;
				  width: auto;
				}
			  }
			</style>
			
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
			
			<script>
		var directionsDisplay;
		var directionsService = new google.maps.DirectionsService();

		function initialize() {
		  directionsDisplay = new google.maps.DirectionsRenderer();
		  var mapOptions = {
			zoom: 14,
			center: new google.maps.LatLng(40.268835200000000000, -74.780910000000000000)
		  };
		  var map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
		  directionsDisplay.setMap(map);
		  directionsDisplay.setPanel(document.getElementById('directions-panel'));

		  var control = document.getElementById('control');
		  control.style.display = 'block';
		  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
		}

=======

			  #map-canvas {
				margin-right: 400px;
			  }

			  #control {
				background: #fff;
				padding: 5px;
				font-size: 14px;
				font-family: Arial;
				border: 1px solid #ccc;
				box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
				display: none;
			  }

			  @media print {
				#map-canvas {
				  height: 500px;
				  margin: 0;
				}

				#directions-panel {
				  float: none;
				  width: auto;
				}
			  }
			</style>
			
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
			
			<script>
		var directionsDisplay;
		var directionsService = new google.maps.DirectionsService();

		function initialize() {
		  directionsDisplay = new google.maps.DirectionsRenderer();
		  var mapOptions = {
			zoom: 14,
			center: new google.maps.LatLng(40.268835200000000000, -74.780910000000000000)
		  };
		  var map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
		  directionsDisplay.setMap(map);
		  directionsDisplay.setPanel(document.getElementById('directions-panel'));

		  var control = document.getElementById('control');
		  control.style.display = 'block';
		  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
		}

>>>>>>> 82dde99adc107bcb9cb12f1f095332313186f389
		function calcRoute() {
		  var start = document.getElementById('start').value;
		  var end = document.getElementById('end').value;
		  var request = {
			origin: start,
			destination: end,
			travelMode: google.maps.TravelMode.DRIVING
		  };
		  directionsService.route(request, function(response, status) {
			if (status == google.maps.DirectionsStatus.OK) {
			  directionsDisplay.setDirections(response);
			}
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);

			</script>
		  </head>

		  <body>
		  
			<div id="control">
			  <strong>Start:</strong>
			  <select id="start" onchange="calcRoute();">
				<option value="2000 Pennington Road, Ewing Township, NJ 08628">TCNJ</option>
			  </select>
			  <strong>End:</strong>
			  <select id="end" onchange="calcRoute();">
				<option value="72 Upper Ferry Road, Ewing Township, NJ">Cafe 72</option>
				<option value="11 S Delaware Ave, Yardley, PA 19067">Charcoal BYOB</option>
				<option value="3349 U.S. 1, Lawrenceville, NJ 08648">Cheeburger Cheeburger</option>
				<option value="1410 Parkway Ave, Ewing Township, NJ 08628">Danny's Tomato Pie</option>
				<option value="235 Nassau St, Princeton, NJ 08540">Despana</option>
				<option value="1099 Parkway Ave, Ewing Township, NJ 08628">Ewing Diner</option>
				<option value="7 Scotch Rd, Ewing Township, NJ 08628">Five Guys</option>
				<option value="217 Clarksville Rd, West Windsor Township, NJ 08550">Hot Wok Cafe</option>
				<option value="511 Lalor St, Hamilton Township, NJ 08611">Malaga Restaurant</option>
				<option value="1750 N Olden Ave, Ewing Township, NJ 08638">Mama Flora's Trattoria</option>
				<option value="160 Lawrenceville Pennington Rd, Lawrenceville, NJ 08648">Masa 8 Japanese Cuisine</option>
				<option value="144 U.S. 130, Bordentown Township, NJ 08505">Mastoris</option>
				<option value="172 Scotch Rd, Ewing Township, NJ 08628">Metro Grill</option>
				<option value="800 Denow Rd, Pennington, NJ 08534">Mizuki Asian Bistro</option>
				<option value="7 Tree Farm Rd #101, Pennington, NJ 08534">Osteria Procaccini</option>
				<option value="1292 Lower Ferry Rd, Ewing Township, NJ 08628">Palermo's III</option>
				<option value="1540 Pennington Rd, Ewing Township, NJ 08618">Ray's Subs</option>
				<option value="17 E Front St Trenton, NJ 08608">Settimo Cielo</option>
				<option value="2022 Nottingham Way, Hamilton Township, NJ 08619">Szechuan House</option>
				<option value="109 S Olden Ave, Trenton, NJ 08609">Taqueria El Mariachi</option>
				<option value="94 S Main St, Yardley, PA 19067">Trattoria Rosa Bianca</option>
				<option value="1769 N Olden Ave, Ewing Township, NJ 08638">Two Peters Diner</option>
				<option value="2572 Pennington Rd, Pennington, NJ 08534">Wildflowers Inn</option>
				<option value="82 E Afton Ave, Yardley, PA 19067">Yardley Inn Restaurant & Bar</option>
				<option value="1400 Parkway Ave # A3, Ewing Township, NJ 08628">Yummy Sushi</option>
			  </select>
			</div>
			<div id="directions-panel"></div>
			<div id="map-canvas"></div>
			
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