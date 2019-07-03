<?php

	session_start();
	  if($_SESSION["id"]){
	  
 }
   else {
	   header("location: index.php");
  }
	require_once('includes/config.php');

	//phpinfo();
?>

<html>
<head>
<title> Applicants Details </title>


<center>
<h1>Registered Users</h1>

    
</head>
<body style="background-image: url(img/login-bg.jpg);">

<?php
 $conn= mysqli_connect("localhost","root","","hostel");
  echo '<li><a href="admin-profile.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';

if(isset($_SESSION['id'])){		

  $result = $conn->query('SELECT * FROM userregistration');   
         
		 if($result === FALSE){
            die(mysql_error());
          }
		  
		  

          if($result){
			   echo '<table border ="1"><tr><th>Name</th><th>Surname</th><th>Email</th><th>Phone No.</th></tr> ';

            while($obj = $result->fetch_object()) {
				
             
              echo '<tr><td>'.$obj->firstName.'</td> <td>'.$obj->lastName.'</td> <td>'.$obj->email.'</td> <td>'.$obj->contactNo.'</td>';
                
			
         echo '<td><button style="float:right;">Accept</button></td>';
			 echo '<td><button style="float:right;">Reject</button></td></tr>';
             
			 }
              echo'</table>';	
              
            }
    
}
		
		
		
		
    
?>

</center>
</body>
</html>
