<?php


  function isValidUser($email, $password){
  	$db = mysqli_connect("localhost", 'root', '', 'cbook') or die('Could not connect !'.mysqli_connect_error());
  	 $query = "SELECT * FROM  users WHERE Email='$email' and Password=sha1('$password')";

     $result = mysqli_query($db, $query);

     if(mysqli_num_rows($result)==1){
     	return true;
     }
     return false;
  }





?>