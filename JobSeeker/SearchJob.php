<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>
<?php $con=mysqli_connect("localhost","root","","job");?>

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
.style2 {font-weight: bold}
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
                <h2><span><a href="#">Search Worker</a></span></h2>
               

                <form id="form1" method="POST" action="">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>
                       <label><input type="text" name="textArea" placeholder="Enter Area of Work."></label>
                       <span class="textfieldRequiredMsg">A value is required.</span></td> 
                      </td>
                      <td>
                        <label><input type="text" name="txtCity" placeholder="Enter City."></label>
                        <span class="textfieldRequiredMsg">A value is required.</span></td>
                      </td>
                      <td>
                        <label><input type="submit" name="submit" value="Search"></label>
                      </td>
                    </tr>
                     </table>
              </form>
              <form method="POST" action="ViewProfile.php">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Available Workers</strong></td>
                  </tr>
                  </table>
                  <table width="100%" border="1" cellspacing="0" cellpadding="0">
                  <tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>City</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Area of Work</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Years of Experience</strong></div></th>
</tr>

                
                      <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

if(isset($_POST['submit'])){
  $area=$_POST['textArea'];
  $city=$_POST['txtCity'];

  $sql="select * from employer_reg where Area_Work='".$area."' and City='".$city."' and Status='Confirm'";
  $result= mysqli_query($con,$sql);
  
  while($row=mysqli_fetch_array($result))
  {
    $ID=$row['EmployerId'];
    $name=$row['lname'];
    $city=$row['City'];
    $work=$row['Area_Work'];
    $exp=$row['Experience'];
    $_SESSION['$ID']=$ID;
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $name;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $city;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $work;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $exp;?></strong></div></td>
<td><a href="ViewProfile.php?EmployerId=<?php echo $row['EmployerId']; ?>">View Details</a></td>
</tr>
<?php
  }
$records = mysqli_num_rows($result);
  if($records=='0')
  {
    echo '<script type="text/javascript">alert("No Record Found.");window.location=\'SearchJob.php\';</script>';
  }
  ?>
  <?php
// Close the connection
mysqli_close($con);
}
?>
</table>
</form>

                    </table></td>
                  </tr>
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

</body>
</html>

