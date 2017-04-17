<?php


  function addUser($fname, $lname, $email, $password){
  	$db = mysqli_connect("localhost", 'root', '', 'cbook') or die('Could not connect !'.mysqli_connect_error());

    $query = "SELECT * FROM users WHERE Email='$email'";

    $result = mysqli_query($db, $query);
    $password = sha1($password);

    if(mysqli_num_rows($result)==0){

  	$query = "INSERT INTO users (First_Name, Last_Name, Email, Password) VALUES ('$fname', '$lname', '$email', '$password')";

  	if(mysqli_query($db, $query)){
  		return "User Added !!";
  	}
  	else{
  		return "Problem creating new profile ! Please try again !";
  	}

   }
   else{
   	return "User already exist with this email .";
   }

  } 


  function isValidUser($email, $password){
  	$db = mysqli_connect("localhost", 'root', '', 'cbook') or die('Could not connect !'.mysqli_connect_error());
  	 $query = "SELECT * FROM  users WHERE Email='$email' and Password=sha1('$password')";

     $result = mysqli_query($db, $query);

     if(mysqli_num_rows($result)==1){
     	return true;
     }
     return false;
  }
 


  function getAllContacts($email){
 	$db = mysqli_connect("localhost", 'root', '', 'cbook') or die('Could not connect !'.mysqli_connect_error());

 	$query = "SELECT 
 	u.ID,
 	c.CID,
 	c.Name,
 	e.EID,
 	e.Email,
 	p.PID,
 	p.P_Number
 	FROM users AS u left outer join contacts AS c 
 	on u.ID=c.User_ID 
 	left outer join email AS e 
 	on c.CID=e.C_ID 
 	left outer join phone AS p
 	on c.CID=p.C_ID 
 	WHERE u.Email='$email'";

 	$r = mysqli_query($db, $query);

 	$ret = array();

    if($r){

        while ($row = mysqli_fetch_assoc($r) ) {
        	$ret[] =  $row;
        }
        return $ret;
    }

    else return false;

  }

  function insertNewContact($user, $name, $email, $contactn, $dob, $house, $road, $city){
  	$db = mysqli_connect("localhost", 'root', '', 'cbook') or die('Could not connect !'.mysqli_connect_error());

  	$query = "SELECT * FROM users WHERE Email='$user'";

  	$r = mysqli_query($db, $query);

  	    if($r){
			  		$row = mysqli_fetch_assoc($r);
			  		$userid = $row['ID'];

			  		$query = "INSERT INTO contacts (Name, User_ID) VALUES ('$name', '$userid')";
			  		if(mysqli_query($db, $query)){
			  			$query = "SELECT * FROM contacts WHERE User_ID='$userid' order by CID desc";
			  			$result = mysqli_query($db, $query);

			  			if($result){
			  			$row = mysqli_fetch_assoc($result);
			  			$CID = $row['CID'];

			  			$query1 = "INSERT INTO email (Email, C_ID) VALUES ('$email', '$CID')";
			  			$query2 = "INSERT INTO phone (P_Number, C_ID) VALUES ('$contactn', '$CID')";
			  			$query3 = "INSERT INTO address (City, Road_no, House_no, C_ID, Dob) VALUES ('$city', '$road', '$house', '$CID', '$dob')";
			  			if(mysqli_query($db, $query1)){
			                
			                if(mysqli_query($db, $query2)){

			                	if(!mysqli_query($db, $query3)){
			                		return 10;
			                	 }
			                      
			                }

			                else{
			                	return 4;     
			                	
			                }
			                 
			  			}
			  			else{
			  				return 3;
			  			}
			          }
			  		
			  		else{
			  			return 2;
			  		}
			  	 }
			  	 else{
			  	 	return 5;
			  	 }
  	    }
  	    else{
  			return 1;
   		}
  }

  function deleteContact($userId, $cid){

  }

  function editContact($email, $fname, $lname, $contact){

  }

 function getDetails($cid){
 	$db = mysqli_connect("localhost", 'root', '', 'cbook') or die('Could not connect !'.mysqli_connect_error());

 	$query = "SELECT
 	c.Name,
 	a.City,
 	a.Road_no,
 	a.House_no,
 	a.Dob
    FROM contacts AS c left outer join address AS a on c.CID=a.C_ID WHERE c.CID='$cid'";

   $r=mysqli_query($db, $query);
 
   if($r){
   	return mysqli_fetch_assoc($r);
   }
   else{
   	return false;
   }

 }


?>