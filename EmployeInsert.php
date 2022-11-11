<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$fName=$_POST['fName'];
	$lname=$_POST['lname'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Area=$_POST['txtAreaWork'];
	$Exp=$_POST['txtexp'];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserType="Worker";
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "INSERT INTO employer_reg(fname,lname,Address,City,Email,Mobile,Area_Work,Experience,Status,UserName,Password) VALUES('".$fName."','".$lname."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Area."','".$Exp."','".$Status."','".$UserName."','".$Password."')";
	// execute query
      
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';

?>
</body>
</html>
