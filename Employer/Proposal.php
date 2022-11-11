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
                <h2><span widhth="100%"><a href="#">Proposal</a></span></h2>
<?php
$ID=$_SESSION['ID'];
$con=mysqli_connect("localhost","root","","job");
$sql="select *from employer_reg where EmployerId='".$ID."'";
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result);
?>              <form action="submitproposal.php" method="post" accept-charset="utf-8">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                    	<td><strong>User Id:</strong></td>
                    <td>
                     <input type="" name="txtuid" id="txtuid" value="<?php echo $_GET['UserId'];?>">
                     </td> 
                    </tr>
                    <tr>
                          <td><strong>Worker ID:</strong></td>
                          <td>
                          <input type="" name="txtwid" id="txtwid" value="<?php echo $row['EmployerId'];?>">
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Worker Name:</strong></td>
                          <td>
                          <input type="" name="txtname" id="txtname" value="<?php echo $row['lname'];?>">
                          
                          </td>
                        </tr>
                    <tr>
                      <td>No. of Days:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtday" id="txtday" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Days</span></span></td>
                    </tr>
                   <tr>
                      <td>Budget:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtbud" id="txtbud" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Budget</span></span></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" name="txtCity" id="txtCity" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter City</span></span></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="Email" name="txtEmail" id="txtEmail" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Email Id</span></span></td>
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td><span id="sprytextfield7">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Mobile</span></span></td>
                    </tr>
                    <tr>
                      <td>Area:</td>
                      <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtArea" id="txtArea" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Area</span></span></td>
                    </tr>
                    <tr>
                      <td>Experience:</td>
                      <td><span id="sprytextfield7">
                        <label>
                        <input type="text" name="txtExp" id="txtExp" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Experience</span></span></td>
                    </tr>
                     <tr>
                      <td>Offer:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtof" id="txtof" cols="45" rows="5"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">Enter Description</span></span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <label></label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
              </form>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
