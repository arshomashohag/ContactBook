<?php
session_start();

if(!isset($_SESSION['username'])){
	header('Location: login.php');
}


?>


<!DOCTYPE html>
<html>

	<head>
		<title>CBook-Contacts</title>
	</head>

	<body>
	 
		<?php
			if($_POST){
				echo $_SESSION['username']."<br>";
				echo $SESSION['password'];
			}
		?>

	</body>
</html>