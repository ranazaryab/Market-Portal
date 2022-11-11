<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
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
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<img src="../design/userheader.jpg" alt="image">
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">

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
                <h2><span><a href="#">Proposals on your Posts:</a></span></h2>
               <table width="110%" border="1" cellspacing="2" cellpadding="2" style="background-color: #FFF;">                
                    <tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Workers Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Days</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Budget</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>City</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Mobile</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Field</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Experience</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Description</strong></div></th>
</tr>
                <?php
                $ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "select * from proposal where UserId='".$ID."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Wname=$row['Name'];
$days=$row['Days'];
$bud=$row['Budget'];
$city=$row['City'];
$mail=$row['Email'];
$mbl=$row['Mobile'];
$area=$row['Area_work'];
$exp=$row['Experience'];
$des=$row['Description'];
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Wname;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $days;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $bud;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $city;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $mail;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $mbl;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $area;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $exp;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $des;?></strong></div></td>
</tr>

               
                  <?php
}

?>               
                  <?php
// Close the connection
mysqli_close($con);
?>
</table>
              
              <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
//include "right.php"
?>

    </div> <!-- /page-in -->
     <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>