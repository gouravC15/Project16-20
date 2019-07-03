<html>
<head>
<title>online service</title>
<link  href="av.css" rel="stylesheet" type="text/css">
</head>
<body>
<form method="post">
<h1>Los servicios V-12</h1>

<br>
<br>
<br>

	<h4 align="center" >*Book a service*</h4>
<br>
<p>
    <label>
        Your First Name <span class="required">*</span>
        <input name="Client_FirstName" type="text" placeholder="First name" />

	</label>

    <label>
        Your Surname <span class="required">*</span>
        <input name="Client_surname" type="text" placeholder="Last name" />


    </label>
    <br>
	<br>
    <label>Telephone <span class="required">*</span>
        <input name="Phone_Number" type="text" placeholder="phone Number" />


    </label>

          <label>
        Email Address <span class="required">*</span>
        <input name="Email_Address" type="text" maxlength="300" placeholder="e-mail" />


    </label>

<br>
<br>
    

    <label>
            Model <span class="required">*</span>
            <input name="Model" type="text" placeholder="eg:Aventador" />


        </label>
<br>
<br>

        <label>
            Registration Number <span class="required">*</span>
            <input name="Reg" type="text" placeholder="serial no:" />
<span id="Reg_Reg_Validation" style="color:Red;display:none;">*</span>

        </label>
<label>
        Preferred Date
        <input name="PreferredDate" type="text" placeholder="DD/MM/YYYY" />

    </label>
<br>
<br>
<button  type="submit" name="book" >Book Now</button>
</p>
</form>
</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","lpsf");

if(isset($_POST{'book'}))
	{
		$name = $_POST['Client_FirstName'];
		$sname = $_POST['Client_surname'];
		$pno = $_POST['Phone_Number'];
			$email = $_POST['Email_Address'];
				$modl = $_POST['Model'];
					$reg = $_POST['Reg'];
					$date=$_POST['PreferredDate'];
		if($name =="" OR $sname =="" OR $pno =="" OR$email=="" OR $modl==""OR$reg=="" OR $date=="")
			
			{
				echo"<script> alert('please fill all field');
				</script>";
				exit();
			}
	$query = "insert into lpsf (f_name,s_name,phone,email,model,reg_no,b_date) values ('$name', '$sname','$pno','$email','$modl','$reg','$date')";	

			$run_query =mysqli_query($conn,$query);
		if ($run_query)
			{
				echo " <script>alert('Data is inserted'); </script>";
				exit();
			}
	}
?>
