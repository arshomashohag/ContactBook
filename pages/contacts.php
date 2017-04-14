<?php

include("../include/header.php");
include("../include/footer.php");

if(session_id()=='' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

if(!isset($_SESSION['username'])){
	header('Location: login.php');
}


?>


<!DOCTYPE html>
<html>

	<head>
		<title>CBook-Contacts</title>



		    <!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		    
		    <!-- Footer Style -->  
			<link rel="stylesheet" type="text/css" href="../css/footer-distributed.css">

			<!-- Panel Style -->
			<link rel="stylesheet" type="text/css" href="../css/main.css"> 

			<!-- Log In form style-->
			<link rel="stylesheet" type="text/css" href="../css/contact.css">

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
	  	head('../', '');
	  ?>
      
        <div class="container">
        	<div class="row">
        		<div class="col-md-8">
        			 <div class="panel panel-default">
	        			  <div class="panel-heading">All Contacts</div>

	        			  <div class="panel-body">
	        			      <table class="table table-striped">
	        			      		<thead>
	        			      			 <tr>
	        			      			 	<th>Name</th>
	        			      			 	<th>Email</th>
	        			      			 	<th>Contact No.</th>
	        			      			 	<th><i class="fa fa-cog fa-2x pull-right"></i></th>
	        			      			 </tr>
	        			      		</thead>

	        			      		<tbody>

	        			      			<tbody>
	        			      				<tr>
	        			      					<td>
	        			      						Md. Shohag Mia
	        			      					</td>
	        			      					<td>
	        			      						shohag_92_ru@yahoo.com
	        			      					</td>
	        			      					<td>
	        			      						01744431381
	        			      					</td>
	        			      					<td>
	        			      						<div class="btn-group" style="float:right;">
	        			      							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        			      								<span class="glyphicon glyphicon-cog"></span>
	        			      								<span class="sr-only">Toggle Dropdown</span>
	        			      							</button>
	        			      							<ul class="dropdown-menu">
	        			      								<li><button class="btn btn-default btn-block" data-toggle="modal" data-target="#editmodal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></li>
	        			      								<li role="separator" class="divider"></li>
	        			      								<li><a class="delete_anchor" href=""><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></li>
	        			      							</ul>
	        			      						</div>
	        			      					</td>
	        			      				</tr>
	        			      				<tr>
	        			      					<td>
	        			      						Md. Shohag Mia
	        			      					</td>
	        			      					<td>
	        			      						shohag_92_ru@yahoo.com
	        			      					</td>
	        			      					<td>
	        			      						01744431381
	        			      					</td>
	        			      					<td>
	        			      						<div class="btn-group" style="float:right;">
	        			      							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        			      								<span class="glyphicon glyphicon-cog"></span>
	        			      								<span class="sr-only">Toggle Dropdown</span>
	        			      							</button>
	        			      							<ul class="dropdown-menu">
	        			      								<li><button class="btn btn-default btn-block" data-toggle="modal" data-target="#editmodal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></li>
	        			      								<li role="separator" class="divider"></li>
	        			      								<li><a class="delete_anchor" href=""><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></li>
	        			      							</ul>
	        			      						</div>
	        			      					</td>
	        			      				</tr>
	        			      			</tbody>

	        			      		</tbody>
	        			      </table>


	        			      <!-- Modal -->
										  <div class="modal fade" id="editmodal" role="dialog">
										    <div class="modal-dialog">
										    
										      <!-- Modal content-->
										      <div class="modal-content">
										        <div class="modal-header">
										         
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title">Edit Contact</h4>
										        </div>
										        <div class="modal-body">
										           <form method="post" action="">
                                                     <input type="hidden" name="blog_id" value="">
										           	<textarea class="form-control" name="udpost" rows="5">
										           		Text here.
										           	</textarea>
										           	<button type="submit" class="btn btn-primary">Done</button>  
										           	 
										           </form>
										           
										        </div>
										        <div class="modal-footer"> 
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										        </div>
										      </div>
										      
										    </div>
										  </div>



	   					             <div class="clearfix"></div>
	        			  </div>

        			 </div>
        		</div>

        		<div class="col-md-4">
        			<div class="panel panel-info">
        				<div class="panel-heading">
        					Add Contact
        				</div>
        				<div class="panel-body">
        					<form >
        						<label for="FName" >First Name :</label>
        						<input class="form-control" type="text" name="fname" id="FName" placeholder="Example">
        						<label for="LName" >Last Name :</label>
        						<input class="form-control" type="text" name="lname" id="LName" placeholder="Sarkar">
        						<label for="Email" >Email :</label>
        						<input class="form-control" type="email" name="email" id="Email" placeholder="Example@example.com">
        						<label for="CNo" >Contact No :</label>
        						<input class="form-control" type="text" name="contact" id="CNo" placeholder="01*********">
        						<button class="form-control" type="submit" class="btn btn-primary" style="margin-top:5px"> Add </button>

        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
	  
	  <?php
 		foot('../', '');
	    ?>
		 

	</body>
</html>