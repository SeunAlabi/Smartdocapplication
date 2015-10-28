<?php 

	session_start();
	if(isset($_SESSION["username"])){
		header ("location:index.php");
	}
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

    
    <div class="container">

        <h3>SmartDocument <sup>&reg;</sup></h3>

            <div class="login col-md-6 col-md-offset-3">

                <h4>Login to your account</h4>

                <form class="form-horizontal" method="post" action="login.php">
					<?php 
									    /* Checks if the user is logged in and unchecks the session if the user is logged-in */
										if (isset($_SESSION["signinCheck"])){	
								?>	
											<p align="center"><b>	
												<?php echo $_SESSION["signinCheck"]; ?> <b></p>
												<?php unset($_SESSION["signinCheck"]);
									} ?>
									
								<?php if (isset($_SESSION["upload_error"])){	?>		
										<p align="center"><b>
										<?php	echo $_SESSION["upload_error"]; ?> <b></p>
										<?php unset($_SESSION["upload_error"]);
								}?>
                    <div class="form-group">
                        <label class="sr-only" for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user fa-2x"></i></div>
                            <input type="text" name="username"class="form-control" id="username" maxlength="14" placeholder="Username" required="required">
                        </div>
                    </div><br />


                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock fa-2x"></i></div>
                            <input type="password" name="password" class="form-control" maxlength="8" id="password" placeholder="Password" required="required">
                        </div>
                    </div><br />

                    <button type="submit" class="btn btn-primary col-md-3 col-md-offset-4">Login</button>
                </form>
            
            </div>

            <div class="footer navbar-fixed-bottom">SmartDocument 2015. All rights reserved.</div>
    </div>
    

<!-- Javascript files for Sitewide Use of Bamigba-->
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>

</body>

</html>