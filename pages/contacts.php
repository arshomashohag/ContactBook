<?php

include("../include/header.php");
include("../include/footer.php");
include("../php/db_function.php");

if(session_id()=='' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

if(!isset($_SESSION['username'])){
	header('Location: login.php');
}

$info="";

if(isset($_POST['add'])){
	 $ret = insertNewContact($_SESSION['username'], $_POST['name'], $_POST['email'], $_POST['phone']);
	 if($ret==5){
	 	$info = "New contact not added!!";
	 }
	 else if($ret==1){
	 	$info = "User not found !!";
	 }
	 else if($ret==2){
	 	$info = "Contact ID can't be retrived!!!";
	 }
	 else if($ret==3){
	 	$info="Email and Phone no not set !!";
	 }
	 else if($ret==4){
	 	$info="Phone no not set !!";
	 }

	 else{
	 	$info="Contact Added !!";
	 }
	unset($_POST);
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


			<script type="text/javascript">
		 	function searchContact(str){

		 		 

		 		           var xmlhttp;
                            

								  if (window.XMLHttpRequest){

								  xmlhttp = new XMLHttpRequest();

								  }

								   else{ 
								     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
						          }

						       xmlhttp.onreadystatechange = function(){
						         
						         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						                document.getElementById("cBody").innerHTML = xmlhttp.responseText;
						            }

						       }

						      xmlhttp.open("GET", "../php/getSearching.php?q=" + str, true);
						      xmlhttp.send();
							
                    return;							 

		 	}
		 </script>


	</head>

	<body>
	 
	 <?php 
	  	head('../', '', 'logout.php');
	  ?>
      

        <div class="container">
        <?php 
           if($GLOBALS['info']!=""){
           	printf('<div class="alert alert-info" style="text-align:center">
			  <strong>%s</strong>
			</div>', $GLOBALS['info']);

           }
         ?>
        	<div class="row">
        		<div class="col-md-8">
        			 <div class="panel panel-default">
	        			  <div class="panel-heading">
	        			  	<span class="contactHead">All Contacts</span>
							<div class="searchHead pull-right">
								<div class="btn-group" style="float:right;">
				        			<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        			     <span class="glyphicon glyphicon-cog"></span>
				        			     <span class="sr-only">Toggle Dropdown</span>
			        			     </button>
			        			      <ul class="dropdown-menu">
			        			      		<li>
				        			      		<button class="btn btn-default" style="width: 100%">
				        			      		<span aria-hidden="true"><i class="fa fa-cloud-upload" aria-hidden="true"></i>Import</span>
				        			      		</button>
			        			      		</li>
			        			      		<li role="separator" class="divider"></li>
			        			      		<li><button class="btn btn-default" style="width: 100%"><span aria-hidden="true"><i class="fa fa-cloud-download" aria-hidden="true"></i>Export</span></button></li>
			        			      	</ul>
			        			  </div>
								<input type="text" id="srcCont" class="search" name="search" placeholder="Search" onkeyup="searchContact(this.value)">
							</div>
	        			  </div>

	        			  <div class="panel-body" id="pBody">
	        			      <table class="table table-striped">
	        			      		<thead>
	        			      			 <tr>
	        			      			 	<th>Name</th>
	        			      			 	<th>Email</th>
	        			      			 	<th>Contact No.</th>
	        			      			 	<th><span pull-right">More</span></th>
	        			      			 </tr>
	        			      		</thead>
 

	        			      			<tbody id="cBody">

	        			      			   <?php 
	        			      			    $result = getAllContacts($_SESSION['username']);
	        			      			      
	        			      			    if($result){ 
                                             if(count($result)>=1){
	        			      			    foreach ($result as $row) {
	        			      			    	
			        			      			  printf('
			        			      				<tr>
			        			      					<td>
			        			      						%s
			        			      					</td>
			        			      					<td>
			        			      						%s
			        			      					</td>
			        			      					<td>
			        			      						%s
			        			      					</td>
			        			      					<td>
			        			      						<div class="btn-group" >
			        			      							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        			      								<span class="glyphicon glyphicon-cog"></span>
			        			      								<span class="sr-only">Toggle Dropdown</span>
			        			      							</button>
			        			      							<ul class="dropdown-menu">
			        			      								<li>
				        			      								<button class="btn btn-default btn-block" data-toggle="modal" data-target="#%s"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
				        			      								</button>
			        			      								</li>
			        			      								<li role="separator" class="divider"></li>
			        			      								<li><a   href=""><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></li>
			        			      								<li role="separator" class="divider"></li>
			        			      								<li><a href="details.php?id=%s">
			        			      								<span aria-hidden="true">
																	<i class="fa fa-info" aria-hidden="true"></i>
																	 Details
			        			      								</span></a>
			        			      								</li>
			        			      							</ul>
			        			      						</div>
			        			      					</td>
			        			      				</tr>

			        			      	  <!-- Modal -->
										  <div class="modal fade" id="%s" role="dialog">
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

										           	<input class="form-control" name="name" value="%s">
										           	
										           	<input class="form-control" name="email" value="%s">
										           	<input class="form-control" name="phone" value="%s">
													
										           	<button type="submit" class="btn btn-primary">Done</button>  
										           	 
										           </form>
										           
										        </div>
										        <div class="modal-footer"> 
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										        </div>
										      </div>
										      
										    </div>
										  </div>



	   					             <div class="clearfix"></div>', $row['Name'], $row['Email'], $row['P_Number'], $row['CID'], $row['CID'], $row['CID'], $row['Name'], $row['Email'], $row['P_Number']);

			        			      			}
			        			      		}
			        			      		else{
			        			      			print("No Contacts !!!");
			        			      		}
	        			      			   }
	        			      			   else{
	        			      			   	print('Query Problem !!!');
	        			      			   }
	        			      			  ?>
	        			      			</tbody>

	        			      		 
	        			      </table>


	        			                  
	        			  </div>

        			 </div>
        		</div>

        		<div class="col-md-4">
        			<div class="panel panel-info">
        				<div class="panel-heading">
        					<span class="contactHead">Add Contact</span>
        				</div>
        				<div class="panel-body">
        					<form action="insertc.php" method="post">
        						<label for="name" >Name</label>
        						<input class="form-control" type="text" name="name" id="name" placeholder="Example">
        						<label for="Email" >Email</label>
        						<input class="form-control" type="email" name="email" id="Email" placeholder="Example@example.com">
        						<label for="CNo" >Contact No</label>
        						<input class="form-control" type="text" name="phone" id="CNo" placeholder="01*********">
        						<label for="CNo" >Date Of Birth</label>
        						<input class="form-control" type="text" name="dob" id="dob" placeholder="Date of birth">
        						<label for="CNo" >House No</label>
        						<input class="form-control" type="text" name="house" id="house" placeholder="House No">
        						<label for="CNo" >Road No</label>
        						<input class="form-control" type="text" name="road" id="road" placeholder="Road no">
        						<label for="CNo" >City</label>
        						<input class="form-control" type="text" name="city" id="city" placeholder="City">

        						<button name="add"  type="submit" class="form-control btn btn-primary" style="margin-top:5px">Add Contact</button>

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