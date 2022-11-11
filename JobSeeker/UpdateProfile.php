<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$fName=$_POST['txtName'];
$lName=$_POST['txtName1'];
$txtAddress = $_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtGender=$_POST['txtGender'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");
// Select Database

// Specify the query to Update Record
$sql = "Update jobseeker_reg  set fname='".$fName."',lname='".$lName."',Address='".$txtAddress."',City='".$txtCity."',Email='".$txtEmail."',Mobile='".$txtMobile."',Gender='".$txtGender."',UserName='".$txtUser."',Password='".$txtPassword."' where JobSeekId=".$txtId."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>
