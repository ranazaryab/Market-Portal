<?php
if (!isset($_SESSION)) 
{
  session_start();
  
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
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {font-weight: bold}
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
                <h2><span><a href="#">Post Job</a></span></h2>


              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Requirments:</strong></td>
                  </tr>
                  <tr>
                    <?php
$ID=$_SESSION['ID'];
$con=mysqli_connect("localhost","root","","job");
$sql="select *from jobseeker_reg where JobSeekId='".$ID."'";
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>               
                    <td><form id="form1" method="post" action="Post.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>User ID:</strong></td>
                          <td>
                          <input type="" name="txtid" id="txtid" value="<?php echo $row['JobSeekId'];?>">
                          </td>
                        </tr>
                         <tr>
                          <td><strong>Posted by:</strong></td>
                          <td>
                          <input type="" name="txtpost" id="txtpost" value="<?php echo $row['lname'];?>">
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Area:</strong></td>
                          <td>
                        <input type="text" name="txtArea" id="txtArea" required="Enter area">
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                          </td>
                        </tr>
                        <tr>
                          <td><strong>City:</strong></td>
                          <td><label>
                            <input type="text" name="txtCity" id="txtCity" required="Enter City">
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td></td>
                        </tr>
                        <tr>
                          <td><strong>Experience:</strong></td>
                          <td><label>
                            <input type="text" name="txtexp" id="txtexp" required="Enter Experience">
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td></td>
                        </tr>
                         <tr>
                          <td><strong>No of Days:</strong></td>
                          <td><label>
                            <input type="text" name="txtDay" id="txtDay" required="Enter Days">
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td></td>
                        </tr>
                         <tr>
                          <td><strong>Budget:</strong></td>
                          <td><label>
                            <input type="text" name="txtBug" id="txtBug"  placeholder="Enter Your Budget(5 or $5)">
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td></td>
                        </tr>
                        <tr>
                          <td><strong>Details:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtDetail" id="txtDetails" cols="45" rows="5">
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Post" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                </table>
 <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Posts Created by You:</strong></td>
                  </tr>
                </table>
<table width="100%" border="1" cellspacing="2" cellpadding="2">                
                    <tr>
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
$sql="select *from user_posts where UserId='".$ID."'";
$result=mysqli_query($con,$sql);
$records=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
$area=$row['Area'];
$city=$row['City'];
$exp=$row['Experience'];
$day=$row['Days'];
$bud=$row['Budget'];
$det=$row['Detail'];
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $area;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $city;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $exp;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $day;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $bud;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $det;?></strong></div></td>
</tr>
<?php
}
mysqli_close($con);
?>
                </table>

                <p>&nbsp;</p>
                
                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

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
//-->
</script>
</body>
</html>
