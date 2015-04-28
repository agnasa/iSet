<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="favicon.ico">

		<title>iPos - Practicum</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("/assets/css/bootstrap.min.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("/assets/css/bootstrap-reset.css")?>" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url("/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
		<link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="<?php echo base_url("/assets/css/style.css")?> "rel="stylesheet">
		<link href="<?php echo base_url("/assets/css/style-responsive.css")?> "rel="stylesheet" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<section id="container" class="">
			<!--header start-->
			<header class="header white-bg">
				<div class="sidebar-toggle-box">
					<div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
				</div>
				<!--logo start-->
				<a href="index.html" class="logo" >i<span>Pos</span></a>
				<!--logo end-->
				<div class="nav notify-row" id="top_menu">
					<!--  notification start -->
					<ul class="nav top-menu">
					<!-- settings start -->
					<!-- settings end -->
					<!-- inbox dropdown start-->
					<!-- inbox dropdown end -->
					<!-- notification dropdown start-->
					<!-- notification dropdown end -->
				</ul>
				</div>
				<div class="top-nav ">
					<ul class="nav pull-right top-menu">
						<!-- user login dropdown start-->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<img alt="" src="img/avatar1_small.jpg">
								<span class="username">Hi,<?php /*$data['username'] = $this->session->userdata('username'); echo $username; $query = $this->db->get('user');*/ ?></span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu extended logout">
								<div class="log-arrow-up"></div>
								<li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
								<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
								<li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
								<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- user login dropdown end -->
					</ul>
				</div>
			</header>
			<!--header end-->
			<!--sidebar start-->
			<aside>
				<div id="sidebar"  class="nav-collapse ">
					<!-- sidebar menu start-->
					<ul class="sidebar-menu" id="nav-accordion">
						<li>
							<a class="active" href="<?php echo site_url("index.php/main/home")?>">
								<i class="icon-dashboard"></i>
								<span>Practicum</span>
							</a>
						</li>
					  
						<li>
							<a href="<?php echo site_url("index.php/main/home")?>">
								<i class="icon-book"></i>
								<span>Materials</span>
							</a>
						</li>
					  
						<li>
							<a href="<?php echo site_url("guru/manage_score")?>">
								<i class="icon-cogs"></i>
								<span>Score</span>
							</a>
						</li>

					<!--multi level menu end-->

				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper site-min-height">
				<!-- page start-->
				Ini isinya~
				<!-- page end-->
			</section>
		</section>
		<!--main content end-->
		<!--footer start-->
		<footer class="site-footer">
			<div class="text-center">
				2015 &copy; iPos by Blanc Up.
				<a href="#" class="go-top">
					<i class="icon-angle-up"></i>
				</a>
			</div>
		</footer>
		<!--footer end-->
	</section>

	<!-- js placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url("/assets/js/jquery.js")?>"></script>
	<script src="<?php echo base_url("/assets/js/bootstrap.min.js")?>"></script>
	<script src="<?php echo base_url("/assets/js/jquery.scrollTo.min.js")?>"></script>
	<script src="<?php echo base_url("/assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url("/assets/data-tables/jquery.dataTables.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/assets/data-tables/DT_bootstrap.js")?>"></script>

	<!--common script for all pages-->
	<script src="<?php echo base_url("/assets/js/common-scripts.js")?>"></script>
	
	</body>
</html>
