<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
$reg_no=$_POST['reg_no'];
$full_name=$_POST['full_name'];
$b_gender=$_POST['b_gender'];
$father_name=$_POST['father_name'];
$mom_name=$_POST['mom_name'];
$b_date=$_POST['b_date'];
$b_time=$_POST['b_time'];
$b_place=$_POST['b_place'];
$query="insert into  bth(id,reg_no,full_name,b_gender,father_name,mom_name,b_date,b_time,b_place) values(?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssssss',$id,$reg_no,$full_name,$b_gender,$father_name,$mom_name,$b_date,$b_time,$b_place);
$stmt->execute();
echo"<script>alert('Data Succssfully Subitted');</script>";
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Enter details for Birth Certificate Generation </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
			<form method="post" action="" name="bth" class="form-horizontal" onSubmit="return valid();">
											
								
                
                
                
<div class="form-group">
<label class="col-sm-2 control-label">ID No: </label>
<div class="col-sm-8">
<input type="number" name="id" id="id"  class="form-control" required="required" >
</div>
</div>		

<div class="form-group">
<label class="col-sm-2 control-label">Reg No: </label>
<div class="col-sm-8">
<input type="number" name="reg_no" id="reg_no"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Child's Full Name : </label>
<div class="col-sm-8">
<input type="text" name="full_name" id="full_name"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<select name="b_gender" id="b_gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Father's Name : </label>
<div class="col-sm-8">
<input type="text" name="father_name" id="father_name"  class="form-control" required="required">
</div>
</div>
                
<div class="form-group">
<label class="col-sm-2 control-label">Mother's Name : </label>
<div class="col-sm-8">
<input type="text" name="mom_name" id="mom_name"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">DOB : </label>
<div class="col-sm-8">
<input type="date" name="b_date" id="b_date"  class="form-control" required="required">
</div>
</div>
                
<div class="form-group">
<label class="col-sm-2 control-label">Birth Time : </label>
<div class="col-sm-8">
<input type="time" name="b_time" id="b_time"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Birth Place : </label>
<div class="col-sm-8">
<input type="text" name="b_place" id="b_place"  class="form-control" required="required">
</div>
</div>
						



<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="SUBMIT" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>