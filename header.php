<?php include "includes/dbh.inc.php"; include "includes/fetch_data.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Haris Benzz</title>
	<link rel="stylesheet" href="fonts/stylesheet.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" /> 
	<link href="css/style.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<!-- page wrapper -->

<body class="boxed_wrapper">
	<!-- .preloader -->
	<!---div class="preloader"></div----->
	<!-- /.preloader -->
	<!-- Main Header -->
	<header class="main-header header-style-one header-main">
		<div class="outer-container">
			<div class="outer-box px-5">
				<div class="row">
					<div class = "col-lg-3 col-md-6 col-sm-6 fit-content">
						<a href = "./"><img src = "images/logo.png" style = "height: 50px;" alt = "Logo"></a>
					</div>
					<div class="col-lg-9 md-display-none">
						<nav class="nav-menu">
							<ul>
								<li><a href="./">Home  </a>
								</li>
								<li><a href="listings"> Listings   </a>
									<!--<ul class="dropdown">
										<li><a href="listings.php"> Our Listings </a>
										</li>
										<li><a href="javascript:void(0)"> Recent Sales  </a>
										</li>
										<li><a href="javascript:void(0)"> New Development  </a>
										</li>
										<li><a href="javascript:void(0)"> Interactive Map  </a>
										</li>
									</ul-->
								</li>
								<!-----li><a href="#"> Buyers  </a>
									<ul class="dropdown">
										<li><a href="javascript:void(0)"> Buy With Us </a>
										</li>
										<li><a href="javascript:void(0)"> Neighbourhood Guides  </a>
										</li>
										<li><a href="javascript:void(0)"> Search MLS  </a>
										</li>
									</ul>
								</li------>
								<!--<li><a href="#"> Sellers   </a>
									<ul class="dropdown">
										<li><a href="javascript:void(0)"> List With Us </a>
										</li>
										<li><a href="javascript:void(0)"> Concierge Type 02</a>
										</li>
										<li><a href="javascript:void(0)"> Marketing </a>
										</li>
										<li><a href="javascript:void(0)"> Our Numbers </a>
										</li>
										<li><a href="javascript:void(0)"> Local Exposure </a>
										</li>
										<li><a href="javascript:void(0)"> Global Exposure </a>
										</li>
										<li><a href="javascript:void(0)"> An Online Presence </a>
										</li>
										<li><a href="javascript:void(0)"> Press </a>
										</li>
										<li><a href="javascript:void(0)"> Industry Recognition </a>
										</li>
									</ul
								</li---->
								<li><a href="about"> About Us </a> </li>
								<!--<li><a href="javascript:void(0)">In The Media </a>-->
								</li>
								<li><a href="blog"> Blog</a>
								</li>
								<li><a href="contact">Contact Us </a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-1 col-md-6 col-sm-6 fit-content">
						<div class="pull-rights nav-toggler">
							<button class="nav-btn"> <span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Sticky Header-->
		<div class="sticky-header">
			<div class="container clearfix">
				<figure class="logo-box">
					<a href="./">
						<img src="images/small-logo.png" style="height: 35px;" alt="">
					</a>
				</figure>
				<div class="menu-area">
					<nav class="main-menu navbar-expand-lg">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix">
								<li><a href = "./"> Home </a></li>
								<li class="dropdown"><a href="listings"> Listings  </a>
									<!--------ul>
										<li><a href="listings.php"> Our Listings </a>
										</li>
										<li><a href="javascript:void(0)"> Recent Sales  </a>
										</li>
										<li><a href="javascript:void(0)"> New Development  </a>
										</li>
										<li><a href="javascript:void(0)"> Interactive Map  </a>
										</li>
									</ul------->
								</li>
								<!----li class="dropdown"><a href="buy-with-us.php"> Buyers </a>
									<ul>
										<li><a href="javascript:void(0)"> Buy With Us </a>
										</li>
										<li><a href="javascript:void(0)"> Neighbourhood Guides  </a>
										</li>
										<li><a href="javascript:void(0)"> Search MLS  </a>
										</li>
									</ul>
								</li----->
								<!-----li class="dropdown"><a href="javascript:void(0)"> Sellers</a>
									<ul>
										<li><a href="javascript:void(0)"> List With Us </a>
										</li>
										<li><a href="javascript:void(0)"> Concierge Type 02</a>
										</li>
										<li><a href="javascript:void(0)"> Marketing </a>
										</li>
										<li><a href="javascript:void(0)"> Our Numbers </a>
										</li>
										<li><a href="javascript:void(0)"> Local Exposure </a>
										</li>
										<li><a href="javascript:void(0)"> Global Exposure </a>
										</li>
										<li><a href="javascript:void(0)"> An Online Presence </a>
										</li>
										<li><a href="javascript:void(0)"> Press </a>
										</li>
										<li><a href="javascript:void(0)"> Industry Recognition </a>
										</li>
									</ul>
								</li------>
								<li class=""><a href="about"> About Us </a> </li> 
								
								<li class=""><a href="blog">Blog </a> 
								</li>
								<li class=""><a href="contact">Contact Us </a> 
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- sticky-header end -->
	</header>
	<div class="form-back-drop"></div>
	<!-- Hidden Bar -->
	<section class="hidden-bar">
		<div class="inner-box">
			<div class="cross-icon"><span class="fa fa-times"></span>
			</div>
			<!-- logo -->
			<div class="logo-box centred">
					<figure>
						<img src="images/logo.png" alt="">
					</figure>
				
			</div>
			<!-- side menu -->
			<div class="side-menu">
				<ul class="clearfix">
					<li class="current dropdown"><a href="listings">Our Listngs </a>
						
					</li>
					
					
					<li class="dropdown"><a href="about"> About Us </a>
						
					</li>
					
					<li><a href="blog">Blog </a> 
					</li>
					<li><a href="contact">Contact Us </a> 
					</li>
				</ul>
			</div>
			<ul class="social-links">
				<li class="" style="margin-bottom: 25px;">
					<a href="http://www.facebook.com/harisbenzz" target="_blank">
						Facebook
					</a>
				</li>
				<li class="">
					<a href="https://twitter.com/haris_benzz" target="_blank">
						Twitter
					</a>
				</li> 
			<li class=""><a href="https://www.instagram.com/harisbenzz/" target="_blank">Instagram</a></li> 
			</ul>
		</div>
	</section>