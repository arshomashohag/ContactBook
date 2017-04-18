<?php
include("include/header.php");
include("include/footer.php");
include("php/db_function.php");

if(session_id()=='' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CBook</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Footer Style -->  
	<link rel="stylesheet" type="text/css" href="css/footer-distributed.css">

	<!-- Panel Style -->
	<link rel="stylesheet" type="text/css" href="css/main.css"> 

	<!-- Log In form style-->
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
	<script src="https://use.fontawesome.com/b3e68927bc.js"></script>


</head>

<body>

<?php 
	head("", "pages/contacts.php", "pages/logout.php");
?>

<section class="homebody">

	<div class="container">
		<div class="row">
			<div class="col col-md-8 intro">
				<h2>Easy & Free Online Address Book</h2>
				<p>
					Easily consolidate all your contacts in one secure, online location. With CBook, your information is stored in the cloud so you can view & edit your address book from any device, anywhere, 24/7.
				</p>
				<p>
                    You can share addresses with others, add notes, images, and more from one central location.
				</p>
			</div>
			<?php

			if(!isset($_SESSION['username'])){
					printf('<div class="col col-md-4">
						
						            <div class="account-wall">
						                <h1 class="text-center login-title">Sign in </h1>
						                <form class="form-signin" action="pages/login.php" method="post">
						                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
						                <input type="password" class="form-control" name="password" placeholder="Password" required>
						                <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">
						                    Sign in</button>
						                <label class="checkbox pull-left">
						                    <input type="checkbox" value="remember-me">
						                    Remember me
						                </label>
						                <a href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=what+is+online+address+book" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
						                </form>
						                <a href="pages/createaccount.php" class="text-center new-account">Create an account </a>
						            </div>
						            
					</div>');
		      }
		 ?>
		</div>
	</div>

</section>

<section class="homeadd">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p class="col-head">
					<span class="bold toUpper">
						<i class="fa fa-cogs fa-3x" style="color:#ffa62f;float:left;padding-right:5px"></i>
						A CUSTOMIZABLE CONTACT MANAGEMENT SYSTEM
					</span>

				</p> 
					<p>Add links, multiple addresses and phone numbers, keep a log of all calls & emails, paste in images or screenshots, attach addresses to your calendar events... It’s all easy in your powerful CBook address book!</p>
				
			</div>
			<div class="col-md-4">
				<p class="col-head">
					<span class="bold toUpper">
						<i class="fa fa-calendar-check-o fa-3x" style="color:#a568a5;vertical-align:middle;padding-right:5px"></i>
						 YOU’RE ALWAYS UP-TO-DATE
					</span>

				</p> 
					<p>No more mix-ups after referencing an out-of-date address book! Since your contacts are stored online, you can access them anywhere, anytime, and you’ll always see the current version. Easily keep friends/family/staff informed by giving them a link.</p>
			</div>
			<div class="col-md-4">
				<p class="col-head">
					<span class="bold toUpper">
						<i class="fa fa-lock fa-3x" style="color:gold;float:left;padding-right:5px"></i>
						SECURE ONLINE ADDRESS BOOKS — YOU ALWAYS CONTROL WHO SEES WHAT
					</span>

				</p>  
					<p>Your address books are private by default — your addresses will only be visible to others if you actively change the share settings. Simple icons tell you at-a-glance who can see what, so you can be 100% sure only the right people have access.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p class="col-head">
					<span class="bold toUpper">
						<i class="fa fa-cloud-upload fa-3x" style="color:pink;float:left;padding-right:5px"></i>
						IMPORT YOUR EXISTING ADDRESS BOOKS FOR EASY SETUP
					</span>

				</p> 
					<p>You can import contacts from another software program in a snap (or export them from CBook, too). Sophisticated field mapping options make importing & exporting address book data flawless. We accept vCard .VCF and .CSV file formats.</p>
			</div>
			<div class="col-md-4">
				<p class="col-head">
					<span class="bold toUpper">
						<i class="fa fa-globe fa-3x" style="color:cadetblue;padding-right:5px;vertical-align:middle"></i>
						THE MOST ORGANIZED WEB-BASED CRM
					</span>

				</p> 
					<p>Make searching for specific contacts easy by adding keyword tags or group related contacts into folders. Filter, and sort through your contacts by name, address, and number or create custom fields for each entry. Add up to 20 pages of notes per contact.</p>
			</div>
			<div class="col-md-4">
				<p class="col-head">
					<span class="bold toUpper">
						<i class="fa fa-thumbs-o-up fa-3x" style="color:#79c2f9;vertical-align:middle;padding-right:5px"></i>
						LIFE-TIME FREE!
					</span>

				</p> 
					<p>CBook is 100% free: no subscription of any kind is required. And by the way, we do not add advertising in your address book nor do we alter them in any way.</p>
			</div>
		</div>
	</div>
</section>


 <?php
 	foot("", "pages/contacts.php");
 ?>


</body>
</html>