<?php
session_start();

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
                        <a href="register.php"><i class="fa fa-users"></i> Register new user</a>
                    </li>
                    <li>
                        <a href="change_password.php"><i class="fa fa-refresh"></i> Change Password</a>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-exclamation-circle"></i> Logout</a>
                    </li>
                </ul>
            </div> 

        </div>

    </nav>
    <!-- header ends here -->

    
    <div class="container margin_top_220">


            <div class="login col-md-6 col-md-offset-3">

                <h4>Change your password</h4>
						<?php if(isset($_SESSION["passError"])){ ?>

						<p align="center"><b> <?php echo $_SESSION["passError"];?></b><p>

						<?php unset($_SESSION["passError"]);

						} ?>
                <form class="form-horizontal" method="post" action="setpassword.php">

                    <div class="form-group">
                        <label class="sr-only" for="password">new_password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-unlock-alt fa-2x"></i></div>
                            <input type="password" name="password"class="form-control" id="password" placeholder="New Password" required="required">
                        </div>
                    </div><br />

                    <div class="form-group">
                        <label class="sr-only" for="password">confirm_new_password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
                            <input type="password" class="form-control"name="password2" id="password" placeholder="Confirm New Password" required="required">
                        </div>
                    </div><br />

                    <button type="submit" name="submit" class="btn btn-primary col-md-4 col-md-offset-4">Change Password</button>
                </form>
            
            </div>

            <div class="footer navbar-fixed-bottom">SmartDocument 2015. All rights reserved.</div>
    </div>
    

<!-- Javascript files for Sitewide Use of Bamigba-->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>

</body>

</html>