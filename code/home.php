<?php 
	include_once("config.php");
?>

<?php if( !(isset( $_POST['login'] ) ) ) { ?>

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
                <li class="active"><a href="#">Home</a></li>
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

<?php 
} else {
	$usr = new Users;
	$usr->storeFormValues( $_POST );
	
	if( $usr->userLogin() ) {
		echo "Welcome";	
	} else {
		echo "Incorrect Username/Password";	
	}
}
?>  

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Title Page -->
 
		<div align = "center">
		<img src="img/logo.jpg" class="img-responsive" alt="Generic placeholder thumbnail " height = "400" width = "400">
        </div> 
		
      <table id = 'table1' class='resizable' align = "center">
		<tr>
			<th width = "50%"><a href="categories.html"><img src="img/categories.jpg"/></a></th>
			<th width = "50%"><a href="random.php"><img src="img/random.jpg"/></a></th>
		</tr>
		</table>
	
		<hr class="featurette-divider">
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