<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['button2']))
{
	$Uid=$_POST['txtuid'];
	$Wid=$_POST['txtwid'];
	$Wname=$_POST['txtname'];
	$day=$_POST['txtday'];
	$bud=$_POST['txtbud'];
	$city=$_POST['txtCity'];
	$email=$_POST['txtEmail'];
	$mbl=$_POST['txtMobile'];
	$area=$_POST['txtArea'];
	$Exp=$_POST['txtExp'];
	$off=$_POST['txtof'];
$con=mysqli_connect("localhost","root","","job");
$sql="insert into proposal(UserId,WId,Name,Days,Budget,City,Email,Mobile,Area_work,Experience,Description) values('$Uid','$Wid','$Wname','$day','$bud','$city','$email','$mbl','$area','$Exp','$off')";
$result=mysqli_query($con,$sql);
if($result)
{
echo '<script type="text/javascript">alert("Proposal Sent Successfully.");window.location=\'Managejob.php\';</script>';  
}
else
{
  echo "Not Created" . mysqli_error($con);
}
mysqli_close($con);

}
?>
</body>
</html>
