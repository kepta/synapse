<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Synapse v0.7.5</title>
	<link rel = "icon" href = "/favicon.png" type = "image/png"> <!-- NEED TO ADD FAVICON-->

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- custom style sheet-->
	<link href="css/anima.css" rel="stylesheet">
	<link href="css/magni.css" rel="stylesheet">
	<link href="css/magniq.css" rel="stylesheet">
	<!-- bxSlider Javascript file -->
	
	<!-- bxSlider CSS file -->
	
       
	<link href="css/jquery.fancybox.css" rel="stylesheet" >
	<link href = "css/kj.style.css" rel="stylesheet" >

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/magni.js"></script>
	<script src="js/jquery.slides.min.js"></script>
		
		
	<script src="js/kj.js"></script>
		
	<!-- meta discription -->
	<meta name="Discription" content="Some shit here " >
	<!--  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		-->
	</head>
	<body>
		
		<div class="loader" style="text-align:center">
			<img src="img/logo.png" class="slideright pulse" style="width:25%;padding-top:20%" >
			<div class="synapse-tareef"></div>
		</div>
		<div id="wrap">
			<div id="main">
				
				<nav class="navbar navbar-default navbar-fixed" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="logo">
								<img src="img/navLogo.png" id="logoIn">
							</div>
						</div>

						<div id ="navbarCollapse" class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right " id="navRight">
								
								<?
								if(isset($_SESSION['user_id'])) {
									echo '<li><a href = ""> Hi, '.$_SESSION['teamname'].'</a></li>';
									echo '<li><a href = "./coord.php">Control Panel</a></li>';
									echo '<li><a href = "./logout.php">Log out </a></li>';
								}
								else {
									?>
									<li><a href="/install">Home</a></li>
									<li><a href="#events">Events</a></li>
									<li><a href="#sponsorpic1">Sponsors</a></li>
									<li><a href="#slideshow" >Gallery</a></li>
								
									<li><a href="form-div"  data-effect="mfp-newspaper">Contact Us</a></li>
									<?php
									echo '<li class="inline-popups"><a href="#loginpopup" data-effect="mfp-move-from-top">Login</a></li>';
							
								}
								?>
								
							</ul>
						</div>
					</div>	
				</nav>
				
				<div id="loginpopup" class="login-popup container-fluid mfp-with-anim mfp-hide">
					<div class="login">
						<h1>Login to Synapse</h1>
						<?php
						if (empty($_COOKIE['user_id'])) {
						
							echo '<p class="error">' . $error_msg . '</p>';
						}
						?>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<p><input type="text" name="username" value="" placeholder="Username"></p>
							<p><input type="password" name="password" value="" placeholder="Password"></p>
					        
							<p class="submit"><input type="submit" name="submit" value="Login"></p>
						</form>
					</div>

					<div class="login-help">
					     
					</div>
				</div>
				<div id="errata">
				</div>
				<div id="home">
					<section class="intro" style="overflow:hidden">
                       	
						<div id="row-above-jumbo" class="row">
							<div class= "col-md-6 jeweltopleft">
								<svg width="100%" height="100%">
									<defs>
										
									</defs>
									<line id="n122"  x1="0" y1="0" x2="10%" y2="39%"></line>
									<line id="n123"  x1="10%" y1="39%" x2="17%" y2="0%"></line>
									<line id="n124"  x1="17%" y1="0%" x2="25%" y2="25%"></line>
									<line id="n125"  x1="0%" y1="60%" x2="10%" y2="39%"></line>
									<line id="n126"  x1="10%" y1="39%" x2="25%" y2="25%"></line>
									<line id="n127"  x1="25%" y1="25%" x2="37%" y2="0%"></line>
									<line id="n128"  x1="37%" y1="0%" x2="46%" y2="56%"></line>
									<line id="n129"  x1="46%" y1="56%" x2="25%" y2="25%"></line>
									<line id="n130"  x1="25%" y1="25%" x2="19%" y2="81%"></line>
									<line id="n131"  x1="19%" y1="81%" x2="10%" y2="39%"></line>
									<line id="n132"  x1="19%" y1="81%" x2="0%" y2="60%"></line>
									<line id="n134"  x1="46%" y1="56%" x2="47%" y2="0%"></line>
									<line id="n135"  x1="47%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n136"  x1="58%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n137"  x1="64%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n138"  x1="78%" y1="41%" x2="57%" y2="20%"></line>
									<line id="n138"  x1="54%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n139"  x1="69%" y1="80%" x2="57%" y2="20%"></line>
									<line id="n140"  x1="69%" y1="80%" x2="78%" y2="41%"></line>
									<line id="n141"  x1="73%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n142"  x1="100%" y1="25%" x2="78%" y2="41%"></line>
									<line id="n143"  x1="80%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n144"  x1="96%" y1="80%" x2="78%" y2="41%"></line>
									<line id="n145"  x1="96%" y1="80%" x2="100%" y2="25%"></line>
									<line id="n146"  x1="100%" y1="25%" x2="96%" y2="0%"></line>
									<line id="n147"  x1="96%" y1="80%" x2="100%" y2="70%"></line>
									<line id="n148"  x1="46%" y1="56%" x2="57%" y2="20%"></line>
									<line id="n149"  x1="46%" y1="56%" x2="57%" y2="20%"></line>

									<circle r="2" cx="10%" cy="39%"  ></circle>
									<circle r="2" cx="25%" cy="25%"  ></circle>
									<circle r="2" cx="0%" cy="60%"  ></circle>
									<circle r="2" cx="37%" cy="0%"  ></circle>
									<circle r="2" cx="17%" cy="0%"  ></circle>
									<circle r="2" cx="10%" cy="39%"  ></circle>
									<circle r="2" cx="19%" cy="81%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="57%" cy="20%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="69%" cy="80%"  ></circle>
									<circle r="2" cx="78%" cy="41%"  ></circle>

									<circle r="2" cx="96%" cy="80%"  ></circle>
									<circle r="2" cx="100%" cy="25%"  ></circle>


								</svg>
							</div>
							<div class= "col-md-6 hidden-sm hidden-xs jeweltopright">
								<svg width="100%" height="100%">
									<line id="n95"  x1="5%" y1="0" x2="10%" y2="39%"></line>
									<line id="n96"  x1="5%" y1="0" x2="0%" y2="26%"></line>
									<line id="n97"  x1="10%" y1="39%" x2="17%" y2="0%"></line>
									<line id="n98"  x1="17%" y1="0%" x2="25%" y2="25%"></line>
									<line id="n99"  x1="0%" y1="26%" x2="10%" y2="39%"></line>
									<line id="n100"  x1="10%" y1="39%" x2="25%" y2="25%"></line>
									<line id="n101"  x1="25%" y1="25%" x2="37%" y2="0%"></line>
									<line id="n102"  x1="37%" y1="0%" x2="46%" y2="56%"></line>
									<line id="n103"  x1="46%" y1="56%" x2="25%" y2="25%"></line>
									<line id="n104"  x1="25%" y1="25%" x2="19%" y2="81%"></line>
									<line id="n105"  x1="19%" y1="81%" x2="10%" y2="39%"></line>

									<line id="n106"  x1="10%" y1="39%" x2="0%" y2="70%"></line>


									<line id="n107"  x1="46%" y1="56%" x2="47%" y2="0%"></line>
									<line id="n108"  x1="47%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n109"  x1="58%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n110"  x1="64%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n111"  x1="78%" y1="41%" x2="57%" y2="20%"></line>
									<line id="n112"  x1="54%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n113"  x1="69%" y1="80%" x2="57%" y2="20%"></line>
									<line id="n114"  x1="69%" y1="80%" x2="78%" y2="41%"></line>
									<line id="n115"  x1="73%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n116"  x1="99%" y1="25%" x2="78%" y2="41%"></line>
									<line id="n117"  x1="80%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n118"  x1="96%" y1="80%" x2="78%" y2="41%"></line>
									<line id="n119"  x1="96%" y1="80%" x2="99%" y2="25%"></line>
									<line id="n120"  x1="99%" y1="25%" x2="96%" y2="0%"></line>
									<line id="n121"  x1="46%" y1="56%" x2="57%" y2="20%"></line>

									<circle r="2" cx="10%" cy="39%"  ></circle>
									<circle r="2" cx="25%" cy="25%"  ></circle>

									<circle r="2" cx="37%" cy="0%"  ></circle>
									<circle r="2" cx="17%" cy="0%"  ></circle>
									<circle r="2" cx="10%" cy="39%"  ></circle>
									<circle r="2" cx="19%" cy="81%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="57%" cy="20%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="69%" cy="80%"  ></circle>
									<circle r="2" cx="78%" cy="41%"  ></circle>

									<circle r="2" cx="96%" cy="80%"  ></circle>

									<circle r="2" cx="0%" cy="25%"  ></circle>
								</svg>
							</div>
						</div>
							
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="jumbotron">
										<div id ="othershit" style="text-align:center">
											<div id ="slide-intro">
												<h2 id="mainhead">A Song of fire & ice</h2>
												<h3 style="font-size:large;letter-spacing:5px">
													synapse is a structure that permits a neuron to pass an electrical signal to another neuron
												</h3>
											</div>
											<p class="text-center"><a href="/install" class="expandOpen btnmine btn" role="button">INFERNO</a></p>
										</div>
									</div>
								</div>
							</div>
							<span class="stats" id="firstball">
								<span class="value">20</span>
								<span class="stat-title">Events</span>
							</span>
							<span class="stats hidden-xs" id="secondball">
								<span class="value">15000+</span>
								<span class="stat-title">Footfall</span>
							</span>
							<span class="stats " id="thirdball">
								<span class="value">750+</span>
								<span class="stat-title">Participants</span>
							</span>
							<span class="stats " id="fourthball">
								<span class="value">82</span>
								<span class="stat-title">Colleges</span>
							</span>
							<span class="stats  hidden-xs" id="fifthball">
								<span class="value">$82</span>
								<span class="stat-title">Prizes</span>
							</span>
						</div>
							
						<div class="row bottomjewelsrow">
							<div class="col-md-6 lowerjewelleft lowerupperjewel">
								<svg width="100%" height="140px">

									<line id="n1" x1="10%" y1="39%" x2="17%" y2="4%"></line>
									<line id="n2" x1="17%" y1="4%" x2="25%" y2="25%"></line><line x1="0%" y1="60%" x2="5%" y2="100%"></line>
									<line id="n3" x1="0%" y1="60%" x2="10%" y2="39%"></line>
									<line id="n4" x1="10%" y1="39%" x2="25%" y2="25%"></line>
									<line id="n5"x1="25%" y1="25%" x2="37%" y2="4%"></line>
									<line id="n6" x1="37%" y1="4%" x2="46%" y2="56%"></line>
									<line id="n7" x1="46%" y1="56%" x2="25%" y2="25%"></line>
                                        
									<line id ="n8" x1="25%" y1="25%" x2="17%" y2="100%"></line><line id="n9" x1="25%" y1="25%" x2="37%" y2="100%"></line>
									<line id="n10" x1="17%" y1="100%" x2="10%" y2="39%"></line>
									<line id="n11" x1="17%" y1="100%" x2="0%" y2="60%"></line>
							                                           
							                                           
									<line id="n12" x1="46%" y1="56%" x2="17%" y2="100%"></line>
									<line id="n13" x1="70%" y1="100%" x2="46%" y2="56%"></line>
                                        
									<line id="n14" x1="37%" y1="100%" x2="46%" y2="56%"></line><line id="n15" x1="46%" y1="56%" x2="17%" y2="100%"></line><line id="n16" x1="78%" y1="43%" x2="80%" y2="76%"></line><line id="n17" x1="90%" y1="100%" x2="80%" y2="76%"></line>
									<line id="n18" x1="70%" y1="100%" x2="80%" y2="76%"></line>
									<line id="n19" x1="78%" y1="41%" x2="57%" y2="20%"></line>
									<line id="n20" x1="70%" y1="100%" x2="57%" y2="20%"></line>
                                        
									<line id="n21" x1="46%" y1="56%" x2="47%" y2="100%"></line><line x1="70%" y1="100%" x2="78%" y2="41%"></line><circle r="2" cx="47%" cy="100%"  ></circle>
							                                           
							                                           
							                                           
									<line id="n22" x1="90%" y1="100%" x2="78%" y2="41%"></line>
							                                           
							                                           
									<line id="n23" x1="46%" y1="56%" x2="57%" y2="20%"></line>
									<circle r="2" cx="80%" cy="76%"  ></circle><circle r="2" cx="37%" cy="100%"  ></circle>
									<circle r="2" cx="10%" cy="39%"  ></circle>
									<circle r="2" cx="17%" cy="4%"  ></circle>
									<circle r="2" cx="0%" cy="60%"  ></circle>
									<circle r="2" cx="25%" cy="25%"  ></circle>
									<circle r="2" cx="37%" cy="4%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="17%" cy="100%"  ></circle><circle r="2" cx="46%" cy="56%"  ></circle>
							                                           
									<circle r="2" cx="70%" cy="100%"  ></circle>
									<circle r="2" cx="90%" cy="100%"  ></circle>
							                                           
									<circle r="2" cx="78%" cy="41%"  ></circle>
									<circle r="2" cx="57%" cy="20%"  ></circle>
							  							                                          

								</svg>
							</div>
							<div class="col-md-6 lowerjewelright lowerupperjewel hidden-xs hidden-sm">
								<svg width="100%" height="140px">

                                        
                                        
                                        
                                        


									<line id="n24"  x1="46%" y1="56%" x2="25%" y2="25%"></line>
									<line id="n25"  x1="25%" y1="25%" x2="12%" y2="100%"></line>
                                        
                                        
									<line id="n26"  x1="46%" y1="56%" x2="47%" y2="4%"></line>
									<line id="n27"  x1="47%" y1="4%" x2="57%" y2="20%"></line>
									<line id="n28"  x1="46%" y1="56%" x2="12%" y2="100%"></line>
									<line id="n29"  x1="71%" y1="100%" x2="46%" y2="56%"></line>
									<line id="n30"  x1="46%" y1="56%" x2="32%" y2="100%"></line>
									<line id="n31"  x1="71%" y1="4%" x2="57%" y2="20%"></line>
									<line id="n32"  x1="78%" y1="41%" x2="57%" y2="20%"></line>
									<line id="n33"  x1="71%" y1="100%" x2="57%" y2="20%"></line>
									<line id="n34"  x1="71%" y1="100%" x2="78%" y2="41%"></line>
									<line id="n35"  x1="71%" y1="4%" x2="78%" y2="41%"></line>
									<line id="n36"  x1="99%" y1="25%" x2="78%" y2="41%"></line>
									<line id="n37"  x1="90%" y1="4%" x2="78%" y2="41%"></line>
									<line id="n38"  x1="90%" y1="100%" x2="78%" y2="41%"></line>
									<line id="n39"  x1="90%" y1="100%" x2="99%" y2="25%"></line>
									<line id="n40"  x1="99%" y1="25%" x2="90%" y2="4%"></line>
									<line id="n41"  x1="46%" y1="56%" x2="57%" y2="20%"></line>
									<line id="n"  x1="46%" y1="56%" x2="47%" y2="100%"></line>
                                        
                                        
                                        
                                        
									<circle r="2" cx="25%" cy="25%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="12%" cy="100%"  ></circle>
									<circle r="2" cx="47%" cy="4%"  ></circle>
									<circle r="2" cx="71%" cy="100%"  ></circle>
									<circle r="2" cx="90%" cy="100%"  ></circle>
									<circle r="2" cx="71%" cy="4%"  ></circle>
									<circle r="2" cx="78%" cy="41%"  ></circle>
									<circle r="2" cx="57%" cy="20%"  ></circle>
									<circle r="2" cx="99%" cy="25%"  ></circle>
									<circle r="2" cx="90%" cy="4%"  ></circle>
									<circle r="2" cx="47%" cy="100%"  ></circle>
								</svg>
							</div>
							<div class="col-md-6 lowerjewelleft">
								<svg width="100%" height="140px">

									<line id="n42"  x1="10%" y1="39%" x2="17%" y2="0%"></line>
									<line id="n43"  x1="17%" y1="0%" x2="25%" y2="25%"></line>
									<line id="n44"  x1="0%" y1="60%" x2="10%" y2="39%"></line>
									<line id="n45"  x1="10%" y1="39%" x2="25%" y2="25%"></line>
									<line id="n46"  x1="25%" y1="25%" x2="37%" y2="0%"></line>
									<line id="n47"  x1="37%" y1="0%" x2="46%" y2="56%"></line>
									<line id="n48"  x1="5%" y1="0%" x2="10%" y2="39%"></line>
									<line id="n49"  x1="46%" y1="56%" x2="25%" y2="25%"></line>
									<line id="n50"  x1="25%" y1="25%" x2="19%" y2="100%"></line>
									<line id="n51"  x1="19%" y1="100%" x2="10%" y2="39%"></line>
									<line id="n51"  x1="19%" y1="100%" x2="0%" y2="60%"></line>
									<line id="n53"  x1="46%" y1="56%" x2="47%" y2="0%"></line>
									<line id="n54"  x1="47%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n55"  x1="46%" y1="56%" x2="19%" y2="100%"></line>
									<line id="n56"  x1="69%" y1="100%" x2="46%" y2="56%"></line>
									<line id="n57"  x1="46%" y1="56%" x2="19%" y2="100%"></line>
									<line id="n58"  x1="70%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n59"  x1="78%" y1="41%" x2="57%" y2="20%"></line>
									<line id="n60"  x1="69%" y1="100%" x2="57%" y2="20%"></line>
									<line id="n61"  x1="69%" y1="100%" x2="78%" y2="41%"></line>
									<line id="n62"  x1="70%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n63"  x1="100%" y1="25%" x2="78%" y2="41%"></line>
									<line id="n64"  x1="90%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n65"  x1="96%" y1="100%" x2="78%" y2="41%"></line>
									<line id="n66"  x1="96%" y1="100%" x2="100%" y2="25%"></line>
									<line id="n67"  x1="100%" y1="25%" x2="90%" y2="0%"></line>
									<line id="n68"  x1="46%" y1="56%" x2="57%" y2="20%"></line>

									<circle r="2" cx="10%" cy="39%"  ></circle>
									<circle r="2" cx="17%" cy="0%"  ></circle>
									<circle r="2" cx="0%" cy="60%"  ></circle>
									<circle r="2" cx="25%" cy="25%"  ></circle>
									<circle r="2" cx="37%" cy="0%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="19%" cy="100%"  ></circle>
									<circle r="2" cx="47%" cy="0%"  ></circle>
									<circle r="2" cx="69%" cy="100%"  ></circle>
									<circle r="2" cx="96%" cy="99%"  ></circle>
									<circle r="2" cx="70%" cy="0%"  ></circle>
									<circle r="2" cx="78%" cy="41%"  ></circle>
									<circle r="2" cx="57%" cy="20%"  ></circle>
									<circle r="2" cx="100%" cy="25%"  ></circle>
									<circle r="2" cx="90%" cy="0%"  ></circle>


								</svg>
							</div>
							<div class="col-md-6 lowerjewelright hidden-xs hidden-sm">
								<svg width="100%" height="140px">

									<line id="n69"  x1="10%" y1="39%" x2="12%" y2="0%"></line>
									<line id="n70"  x1="12%" y1="0%" x2="25%" y2="25%"></line>
									<line id="n71"  x1="0%" y1="25%" x2="10%" y2="39%"></line>
									<line id="n72"  x1="10%" y1="39%" x2="25%" y2="25%"></line>
									<line id="n73"  x1="32%" y1="0%" x2="25%" y2="25%"></line>


									<line id="n74"  x1="46%" y1="56%" x2="25%" y2="25%"></line>
									<line id="n75"  x1="25%" y1="25%" x2="19%" y2="100%"></line>
									<line id="n76"  x1="19%" y1="100%" x2="10%" y2="39%"></line>
									<line id="n77"  x1="19%" y1="100%" x2="0%" y2="25%"></line>
									<line id="n78"  x1="46%" y1="56%" x2="47%" y2="0%"></line>
									<line id="n79"  x1="47%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n80"  x1="46%" y1="56%" x2="19%" y2="100%"></line>
									<line id="n81"  x1="69%" y1="100%" x2="46%" y2="56%"></line>
									<line id="n82"  x1="46%" y1="56%" x2="19%" y2="100%"></line>
									<line id="n83"  x1="71%" y1="0%" x2="57%" y2="20%"></line>
									<line id="n84"  x1="78%" y1="41%" x2="57%" y2="20%"></line>
									<line id="n85"  x1="69%" y1="100%" x2="57%" y2="20%"></line>
									<line id="n86"  x1="69%" y1="100%" x2="78%" y2="41%"></line>
									<line id="n87"  x1="71%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n88"  x1="99%" y1="25%" x2="78%" y2="41%"></line>
									<line id="n89"  x1="90%" y1="0%" x2="78%" y2="41%"></line>
									<line id="n90"  x1="96%" y1="100%" x2="78%" y2="41%"></line>
									<line id="n91"  x1="96%" y1="100%" x2="99%" y2="25%"></line>
									<line id="n92"  x1="99%" y1="25%" x2="90%" y2="0%"></line>
									<line id="n93"  x1="46%" y1="56%" x2="57%" y2="20%"></line>
									<line id="n94"  x1="25%" y1="25%" x2="47%" y2="0%"></line>
									<circle r="2" cx="10%" cy="39%"  ></circle>
									<circle r="2" cx="12%" cy="0%"  ></circle>
									<circle r="2" cx="0%" cy="25%"  ></circle>
									<circle r="2" cx="25%" cy="25%"  ></circle>
									<circle r="2" cx="46%" cy="56%"  ></circle>
									<circle r="2" cx="19%" cy="100%"  ></circle>
									<circle r="2" cx="47%" cy="0%"  ></circle>
									<circle r="2" cx="69%" cy="100%"  ></circle>
									<circle r="2" cx="96%" cy="99%"  ></circle>
									<circle r="2" cx="71%" cy="0%"  ></circle>
									<circle r="2" cx="78%" cy="41%"  ></circle>
									<circle r="2" cx="57%" cy="20%"  ></circle>
									<circle r="2" cx="99%" cy="25%"  ></circle>
									<circle r="2" cx="90%" cy="0%"  ></circle>
								</svg>
							</div>
						</div>
							
                       
					</section>
				
