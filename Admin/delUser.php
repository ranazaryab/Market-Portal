<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['JobId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to Update Record
$sql = "DELETE FROM jobseeker_reg WHERE JobSeekId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("User Deleted");window.location=\'ManageUser.php\';</script>';
?>
</body>
</html>

