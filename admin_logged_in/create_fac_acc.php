<!-- faculty_logged_in -->
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'spacenext');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to the database:".mysqli_error($con));

$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to the database:".mysqli_error($con));

	$sql = "SELECT * FROM reg_fac";

	$fac_data = mysqli_query($con,$sql);



	// echo "
	// <script>
	// 	// var x = 5;
	// 	console.log($fac_data);
	// 	alert($fac_data);
	// </script>
	// ";
?>





<!DOCTYPE html>
<!-- saved from url=(0027)http://localhost/wordpress/ -->
<html lang="en-US" class="gr__localhost"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php">

<title>SpaceNext</title>
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel="stylesheet" type="text/css" href="create_fac_acc.css">
<link rel="alternate" type="application/rss+xml" title="SpaceNext » Feed" href="http://localhost/wordpress/feed/">
<link rel="alternate" type="application/rss+xml" title="SpaceNext » Comments Feed" href="http://localhost/wordpress/comments/feed/">
<link rel="stylesheet" id="bootstrap-css" href="./index_files/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" id="astrid-style-css" href="./index_files/style.css" type="text/css" media="all">
<style id="astrid-style-inline-css" type="text/css">
.site-header {position: fixed;}
.site-title a,.site-title a:hover { color:#ffffff}
.site-description { color:#BDBDBD}
.site-header,.site-header.header-scrolled { background-color:rgba(32,37,41,0.9)}
@media only screen and (max-width: 1024px) { .site-header.has-header,.site-header.has-video,.site-header.has-single,.site-header.has-shortcode { background-color:rgba(32,37,41,0.9)} }
body, .widget-area .widget, .widget-area .widget a { color:#656D6D}
.footer-widgets, .site-footer, .footer-info { background-color:#202529}
body {font-family: 'Open Sans', sans-serif;}
h1, h2, h3, h4, h5, h6, .fact .fact-number, .fact .fact-name, .site-title {font-family: 'Josefin Sans', sans-serif;}
.site-title { font-size:36px; }
.site-description { font-size:14px; }
h1 { font-size:36px; }
h2 { font-size:30px; }
h3 { font-size:24px; }
h4 { font-size:16px; }
h5 { font-size:14px; }
h6 { font-size:12px; }
body { font-size:14px; }

</style>
<link rel="stylesheet" id="astrid-body-fonts-css" href="./index_files/css" type="text/css" media="all">
<link rel="stylesheet" id="astrid-headings-fonts-css" href="./index_files/css(1)" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="./index_files/font-awesome.min.css" type="text/css" media="all">
<script type="text/javascript" src="./index_files/jquery.js.download"></script>
<script type="text/javascript" src="./index_files/jquery-migrate.min.js.download"></script>
<link rel="https://api.w.org/" href="http://localhost/wordpress/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/wordpress/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/wordpress/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 4.8.1">
<style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>

<body class="home blog hfeed" style="" data-gr-c-s-loaded="true" cz-shortcut-listen="true">

<div class="preloader preloader-hidden" style="display: none;">
<div class="preloader-inner">
	<ul><li></li><li></li><li></li><li></li><li></li><li></li></ul>
</div>
</div>

<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="http://localhost/wordpress/#content">Skip to content</a> -->

	<header id="masthead" class="site-header has-header" role="banner">
		<div class="container">
			<div class="site-branding col-md-4 col-sm-6 col-xs-12">
				<h1 class="site-title"><a href="#" rel="home">SpaceNext</a></h1><p class="site-description"></p>			</div>
			<div class="btn-menu col-md-8 col-sm-6 col-xs-12"><i class="fa fa-navicon"></i></div>
			<nav id="mainnav" class="main-navigation col-md-8 col-sm-6 col-xs-12" role="navigation">
				<div id="primary-menu" class="menu"><ul>
<li class="page_item page-item-2"><a href="index.html">Home</a></li>
<li class="page_item page-item-21"><a href="industrial_visit.html">Industrial Visit</a></li>
<li class="page_item page-item-23"><a href="#">Quiz</a></li>
<li class="page_item page-item-25"><a href="#">Knowledge Centre</a></li>
<li class="page_item page-item-27"><a href="../index.html">Logout</a></li>
</ul></div>
			</nav>
		</div>
	</header>
			<div class="header-image">


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<nav id="footernav" class="footer-navigation" role="navigation">
					<div id="footer-menu" class="menu"><ul>
			<li class="page_item page-item-2"><a href="index.html">Home</a></li>
			<li class="page_item page-item-21"><a href="industrial_visit.html">Industrial Visit</a></li>
			<li class="page_item page-item-23"><a href="#">Quiz</a></li>
			<li class="page_item page-item-25"><a href="#">Knowledge Centre</a></li>
			<li class="page_item page-item-27"><a href="../index.html">Logout</a></li>
			</ul></div>
				</nav>
		</footer>

		</div>
</div>


<script type="text/javascript" src="./index_files/main.js.download"></script>
<script type="text/javascript" src="./index_files/scripts.min.js.download"></script>

<script type="text/javascript" src="./index_files/wp-embed.min.js.download"></script>

<div class="row">
<br>
	<div class="col-md-1"></div>
	<div class="col-md-5">
		<h1 >You are about to create a new faculty account...</h1>
	</div>
	<div class="col-md-2"></div>
</div>


<div>
<div class="col-md-2"></div>
<div class="col-md-8">
	<form class="form" action="create_fac_acc.php" method="post" style="margin-bottom: 50px">
		<div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Name:</label>
			</div>
			<div class="col-md-5 ">
				<input type="text" name="name" id="name_id" class="inputc" required>
			</div>		
		</div>
		<div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Email ID:</label>
			</div>
			<div class="col-md-5 ">
				<input type="email" name="emailid" id="email_id_id" class="inputc" required>
			</div>
		</div>

		<div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Phone No:</label>
			</div>
			<div class="col-md-5 ">
				<input type="number" name="phoneno" id="phoneno_id" class="inputc" required>  
				<!-- restrict to 10 digits -->
			</div>	
		</div>

		<div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Address:</label>
			</div>
			<div class="col-md-5 ">
				<textarea name="address" class="inputc" id="address_id" required="true" style="height: 100px;">
					
				</textarea>
				
			</div>		
		</div>
		
		<div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Designation:</label>
			</div>
			<div class="col-md-5 ">
				<input type="text" name="desg" id="desg_id" class="inputc" required>
			</div>		
		</div>

		<div class="row fields">
		<div class="col-md-3"></div>
			<div class="col-md-2">
				<label >Institute Name:</label>
			</div>
			<div class="col-md-5 ">
				<input type="text" name="insname" id="insname_id" class="inputc" required >
			</div>		
		</div>

		<!-- <?php

			// while ($reg_fac=mysqli_fetch_assoc($fac_data)) {

				// echo "<script>
				// 	document.getElementById("name_id").value =".$reg_fac['uname']."
				// </script>
				// ";

				// $nid = name_id;
				
				// $nid = $divId=get_the_ID();


//value="<?php echo "".$reg_fac['uname']; ?>"

				// echo "<script>
				// 	var x = 5;
				// 	document.getElementById($nid).value = x;
				// </script>
				// ";


				// document.getElementById("mytext").value = "My value";
			
			// }

		?> -->


		<br><br>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-8">
				<div class="row fields">
					<div class="col-md-3">
						<input type="submit" value="Accept" name="accept" />
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<input type="submit" value="Decline" name="decline" />
					</div>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>
			
		</div>
			

		
			
			<!-- just add to database in faculty table -->
	</form>


</div>



</div>
<div class="col-md-2"></div>


</div>




</body>
</html>
