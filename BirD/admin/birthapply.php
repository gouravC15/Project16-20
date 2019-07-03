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
<title>Birth Applicants Details </title>
    <center>

<h1>Birth certifications</h1>

    
</head>
<body style="background-image: url(img/login-bg.jpg);">
<?php
 $conn= mysqli_connect("localhost","root","","hostel");
  echo '<li><a href="admin-profile.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';

if(isset($_SESSION['id'])){		

  $result = $conn->query('SELECT * FROM bth');   
         
		 if($result === FALSE){
            die(mysql_error());
          }
		  
		  

          if($result){
			   echo '<table border ="1"><tr><th>ID</th><th>RegNo.</th><th>Child Name</th><th>Gender</th><th>Place</th>';

            while($obj = $result->fetch_object()) {
				
             
              echo '<tr><td>'.$obj->id.'</td><td>'.$obj->reg_no.'</td><td>'.$obj->full_name.'</td><td>'.$obj->b_gender.'</td> <td>'.$obj->b_place.'</td>';
        
			  //echo '<td><button style="float:right;">Confirm</button></td>';
			 //echo '<td><button style="float:right;">Reject</button></td></tr>';
             
			 }
              echo'</table>';			 
            }
}
		
		
		
		
    
?>
</body>
</head>    
</html>
