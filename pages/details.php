<?php
include("../include/header.php");
include("../include/footer.php");
include("../php/db_function.php");


$details = getDetails($_GET['id']);


if($details!=false){
$name = $details['Name'];
}


?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name?></title>


	
	    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    
	    <!-- Footer Style -->  
		<link rel="stylesheet" type="text/css" href="../css/footer-distributed.css">

		<!-- Panel Style -->
		<link rel="stylesheet" type="text/css" href="../css/main.css"> 

		<!-- Log In form style-->
		<link rel="stylesheet" type="text/css" href="../css/details.css">

		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="../css/animate.css">


		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	    <!-- Font Awesome -->
		<script src="https://use.fontawesome.com/b3e68927bc.js"></script>


</head>

<body>

 <?php 
	  	head('../', 'contacts.php', 'logout.php');
  ?>
   <div class="container">

   <table class="table ">
	   	<thead>
	   		<tr>
	   			<th>#</th>
	   			<th>Details</th>
	   		</tr>
	   	</thead>
	   	<tbody>

	   		<tr>
	   			<th>Name</th>
	   			<td><?php echo $name; ?></td>
	   		</tr>

	   		<tr>
	   			<th>Address</th>
	   			<td><?php

	   					echo "<address>";
	   					echo "House No : ".$details['House_no']."<br>";
	   					echo "Road No : ".$details['Road_no']."<br>";
	   					echo "City : ".$details['City']."<br>";
	   					echo "</address>";
	   			?></td>
	   		</tr>

	   		<tr>
	   			<th>Date Of Birth</th>
	   			<td><?php

	   					echo "<span >";
	   					echo $details['Dob']."<br>";
	   					echo "</span>";
	   			?></td>
	   		</tr>

	   	</tbody>
   </table>
   	
   </div>


<div class="footer navbar-fixed-bottom">
   <?php
 		foot('../', 'contacts.php');
	    ?>
</div>
</body>


</html>