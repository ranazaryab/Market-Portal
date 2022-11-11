<?php
session_start();
if(isset($_SESSION['$UserName_emp'])){

} 
else{
		header('location:../index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
<title>WEB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<img src="../design/cusheader.jpg" alt="image">
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span widhth="120%"><a href="#">Welcome <?php echo $_SESSION['$UserName_emp'];?></a></span></h2>
               <table width="100%" length="600px" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td bgcolor="#A0B9F3"><strong>Jobs For You:</strong></td>
                  </tr>
               </table>
              <form action="Proposal.php" method="post" accept-charset="utf-8">
<table width="100%" length="600px" border="1" cellspacing="2" cellpadding="2">                
                    <tr>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Posted By</strong></div></th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Area</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>City</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Experience</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Days</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Budget</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Details</strong></div></th>
</tr>
<?php
$ID=$_SESSION['ID'];
$con=mysqli_connect("localhost","root","","job");
$sql="select *from user_posts";
$result=mysqli_query($con,$sql);
$records=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
$by=$row['Posted_by'];
$area=$row['Area'];
$city=$row['City'];
$exp=$row['Experience'];
$day=$row['Days'];
$bud=$row['Budget'];
$det=$row['Detail'];
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $by;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $area;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $city;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $exp;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $day;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $bud;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $det;?></strong></div></td>
<td><label><a href="Proposal.php?UserId=<?php echo $row['UserId']; ?>">Submit Proposal</a></label></td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
</form>
                

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
