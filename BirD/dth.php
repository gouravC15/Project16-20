<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
    $id=$_POST['id'];

$reg_no=$_POST['reg_no'];
$full_name=$_POST['full_name'];
$d_gender=$_POST['d_gender'];
$father_name=$_POST['father_name'];
$mom_name=$_POST['mom_name'];
$d_date=$_POST['d_date'];
$d_time=$_POST['d_time'];
$d_cause=$_POST['d_cause'];    
$d_place=$_POST['d_place'];
$query="insert into  dth(id,reg_no,full_name,d_gender,father_name,mom_name,d_date,d_time,d_cause,d_place) values(?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssssss',$id,$reg_no,$full_name,$d_gender,$father_name,$mom_name,$d_date,$d_time,$d_cause,$d_place);
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
					
						<h2 class="page-title">Enter details for Death Certificate Generation </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
		
                                        
                                        
                                        
                                        <form method="post" action="" name="dth" class="form-horizontal" onSubmit="return valid();">

                
                
<div class="form-group">
<label class="col-sm-2 control-label">Id No: </label>
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
<label class="col-sm-2 control-label">Person's Full Name : </label>
<div class="col-sm-8">
<input type="text" name="full_name" id="full_name"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<select name="d_gender" id="d_gender" class="form-control" required="required">
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
<input type="date" name="d_date" id="d_date"  class="form-control" required="required">
</div>
</div>
                
<div class="form-group">
<label class="col-sm-2 control-label">Death Time : </label>
<div class="col-sm-8">
<input type="time" name="d_time" id="d_time"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Cause of end (with date): </label>
<div class="col-sm-8">
<input type="text" name="d_cause" id="d_cause"  class="form-control" required="required">
</div>
</div>
                
<div class="form-group">
<label class="col-sm-2 control-label">Death Place : </label>
<div class="col-sm-8">
<input type="text" name="d_place" id="d_place"  class="form-control" required="required">
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