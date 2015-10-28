<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Wood Working Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="styler.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
	
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li class="selected">
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="gallery.html">Gallery</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body" id="about">
				<div id="sidebar">
					<br/>
<div class="col-md-0 col-md-offset-10" >
<?php if(isset($_SESSION["username"]))
{
if($_SESSION["role"] ==1)
{
?>



<a href="register.php">REGISTER USER</a>
<?php } } ?>
<a href="new.php"> RESET PASSWORD </a>	
 <a href="signout.php"> SIGN OUT </a></div>



  
	<div class="col-md-3 col-md-offset-4">
	<div class="title">
		PDFDoc Viewer
	</div>

	<div class="contenting">

	<!-- Form accepts the the Document Id and the file to be uploaded -->
	<form method="post" action="upload.php" enctype="multipart/form-data">
	<div class="row">
		<div class="form-group col-md-10 col-md-offset-1">
	<input type="text" name="fileId" class="form-control" placeholder="Document ID" maxlength="10" required="required">
		</div>
	


	<div class="row">
		<div class="pope">
		<div class="form-group col-md-10 col-md-offset-1">
	<input type="file" name="fileToUpload" id="fileToUpload" class="form-controlt" required="required"/>
		</div>
		</div>
	</div>
		
		
	<div class="row">
		<div class="form-group col-md-6 col-md-offset-4">
	<button type="submit" name="submit" class="btn btn-primary">Upload</button>
		</div>
	
</div>
</form>	
			
					
</div>					
				</div>
				
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			
			<ul class="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="gallery.html">Gallery</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>