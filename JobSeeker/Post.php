<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if(isset($_POST['button'])){
$ID=$_POST['txtid'];
$Name=$_POST['txtpost'];
$area=$_POST['txtArea'];
$City=$_POST['txtCity'];
$Exp=$_POST['txtexp'];
$day=$_POST['txtDay'];
$Bud=$_POST['txtBug'];
$det=$_POST['txtDetail'];
$con = mysqli_connect("localhost","root","","job");
$sql="INSERT INTO user_posts(UserID,Posted_by,Area,City,Experience,Days,Budget,Detail) VALUES ('$ID','$Name','$area','$City','$Exp','$day','$Bud','$det')";

$result=mysqli_query($con,$sql);
if($result)
{
echo '<script type="text/javascript">alert("Post Created Succesfully");window.location=\'index.php\';</script>';  
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