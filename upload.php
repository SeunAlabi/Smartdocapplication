<?php
session_start();
require_once "uploadclass.php";
require_once "uploadDAO.php";
//require_once "connection.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SmartDocument</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

<!-- Iconic Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen" />

<!-- bootstrap Css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- Main Css -->
<link href="css/pdf.css" rel="stylesheet" type="text/css" media="screen" />

</head>

<body>
                
    <!-- Header starts here -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-collapse collapse" href="index.php"><h5>SmartDocument <sup>&reg;</sup></h5></a>
                <a class="navbar-brand navbar-toggle" data-toggle="collapse" href="index.php"><h6>SmartDocument</h6></a>

            </div>

            

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-exclamation-circle"></i> Logout</a>
                    </li>
                </ul>
            </div> 

        </div>

    </nav>
    <!-- header ends here -->

    
    <div class="container margin_top_250">


            <p class="bg-primary">
			<?php

$fileId= $_POST["fileId"];
$filename = basename($_FILES["fileToUpload"]["name"]);


/* accepts/gets Username*/
	if(isset($_POST["submit"])) {
			if(isset($_SESSION["username"]))
			{			
			$uploadDAO = new uploadDAO();		
			$uploadDAO->moveToDirectory($fileId, $filename);//copies file to specified directory

			//$uploadclass = new uploadclass($fileId, $filename);
			//$uploadDAO->uploadFile($uploadclass);
			}
			 else{
				/* Checks if the user is logged in*/
				$_SESSION["upload_error"] = "Log in to upload the file";
				header("location:signin.php");
							 return;
			} 
	}

?></p><br />
            <center><a href="index.php" class="btn btn-primary">Back</a></center>


            <div class="footer navbar-fixed-bottom">SmartDocument 2015. All rights reserved.</div>
    </div>
    

<!-- Javascript files for Sitewide Use of Bamigba-->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>

</body>

</html>