<!DOCTYPE html>
<html>
<head>
	<title>OPI Finder</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="style.css" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="app.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
<div class="col-md-6">
	<form method="POST">
    <div class="form-group">
    				<br><br>
    				<label>First Name</label>
    				<input type="name" class="form-control" name="fname" placeholder="Enter First Name"><br>
    				<label>Last Name</label>
    				<input type="name" class="form-control" name="lname" placeholder="Enter Last Name"><br>
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Email"><br>
        <label>Date of Birth</label>
        <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth"><br>
        <label>Aadhar Number</label>
        <input type="Number" class="form-control" name="dob" placeholder="Aadhar Number"><br>
        <label>Upload Image</label>

        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse<input type="file" id="imgInp">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
        <img id='img-upload'/>
    </div>
    <input type="submit" name="submit" value="Submit">
 </form>
</div>
</div>
</body>
</html>

<?php
              
if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>