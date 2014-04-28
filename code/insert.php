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
$con=mysqli_connect("127.0.0.1","student5","tOiTvwxpsM","student5");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
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
			echo "Thank you! Dish added case 0"; 
	}
	
	//Check cases for dish name and restaurant name is not null 
	if(!is_null($array['dish_name']) && !is_null($array['rest_name'])){	
		if(  strcmp(  strtolower(  $array['dish_name']  ),strtolower($dishname)   ) != 0 
			&&strcmp(strtolower($array['rest_name']),strtolower($restname)) != 0 ){
				$sql="INSERT INTO dish (dish_name, rest_name, rest_location, type1, type2, description)
				VALUES ('$dishname', '$restname', '$restloc', '$type1', '$type2', '$description')";
				echo "Thank you! Dish added case 1";
				}
		elseif(strcmp(strtolower($array['dish_name']),strtolower($dishname)) != 0 
			&& strcmp(strtolower($array['rest_name']),strtolower($restname)) == 0 ){
				$sql="INSERT INTO dish (dish_name, rest_name, rest_location, type1, type2, description)
				VALUES ('$dishname', '$restname', '$restloc', '$type1', '$type2', '$description')";
				echo "Thank you! Dish added case 2";
				}
		elseif(strcmp(strtolower($array['dish_name']),strtolower($dishname)) == 0 
			&& strcmp(strtolower($array['rest_name']),strtolower($restname)) != 0 ){
				$sql="INSERT INTO dish (dish_name, rest_name, rest_location, type1, type2, description)
				VALUES ('$dishname', '$restname', '$restloc', '$type1', '$type2', '$description')";
				echo "Thank you! Dish added case 3";
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