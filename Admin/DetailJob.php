<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="cs"/>
    <meta name="robots" content="all,follow"/>

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz"/>
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz"/>

    <title>WEB PORTAL</title>
    <meta name="description" content="..."/>
    <meta name="keywords" content="..."/>

    <link rel="index" href="./" title="Home"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css"/>
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css"/>
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css"/>
    <style type="text/css">
        <!--
        .style1 {
            color: #000066;
            font-weight: bold;
        }

        -->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
    <?php
    include "Header.php"
    ?>
    <?php
    include "menu.php"
    ?>
    <!-- Page (2 columns) -->
    <div id="page" class="box">
        <div id="page-in" class="box">

            <div id="strip" class="box noprint">

                <!-- RSS feeds -->
                <hr class="noscreen"/>

                <!-- Breadcrumbs -->
                <p id="breadcrumbs">&nbsp;</p>
                <hr class="noscreen"/>

            </div> <!-- /strip -->

            <!-- Content -->
            <div id="content">


                <!-- /article -->

                <hr class="noscreen"/>


                <!-- /article -->

                <hr class="noscreen"/>

                <!-- Article -->

                <!-- /article -->

                <hr class="noscreen"/>

                <!-- Article -->
                <div class="article">
                    <h2><span><a href="#">Welcome To Control Panel</a></span></h2>


                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $ID = $_GET['JobId'];
                                // Establish Connection with Database
                                $con = mysqli_connect("localhost", "root", "", "job");
                                // Specify the query to execute
                                $sql = "select * from JobSeeker_Reg where JobSeekId='" . $ID . "'  ";
                                // Execute query
                                $result = mysqli_query($con,$sql);
                                // Loop through each records
                                $row = mysqli_fetch_array($result)
                                ?>
                                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <tr>
                                        <td>Id:</td>
                                        <td><?php echo $row['JobSeekId']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>First Name:</td>
                                        <td><?php echo $row['fname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name:</td>
                                        <td><?php echo $row['lname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><?php echo $row['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>City:</td>
                                        <td><?php echo $row['City']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><?php echo $row['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile:</td>
                                        <td><?php echo $row['Mobile']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td><?php echo $row['Gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><a href="ApprovJob.php?JobId=<?php echo $row['JobSeekId']; ?>">Approve
                                                    User</a></strong></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <p>&nbsp;</p>

                    <p class="btn-more box noprint">&nbsp;</p>
                </div> <!-- /article -->

                <hr class="noscreen"/>

            </div> <!-- /content -->

            <?php
            include "right.php"
            ?>

        </div> <!-- /page-in -->
    </div> <!-- /page -->


    <?php
    mysqli_close($con);
    include "footer.php"

    ?>
</div> <!-- /main -->

</body>
</html>