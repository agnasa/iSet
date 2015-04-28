<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Schedule</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />

		<link href="<?php echo base_url("assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css")?>" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/gallery.css")?>" />

		<!-- Custom styles for this template -->
		<link href="<?php echo base_url("assets/css/style.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/style-responsive.css")?>" rel="stylesheet" />

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
						<li>
							<input type="text" class="form-control search" placeholder="Search">
						</li>
						<!-- user login dropdown start-->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								
								<span class="username">Hello, <?php echo $this->session->userdata('nama'); ?></span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu extended logout">
								<li><a href="<?php echo site_url("guru/profile")?>"><i class=" icon-suitcase"></i>Profile</a></li>
								<li><a href="#"><i class="icon-unlock-alt"></i> Lock Screen</a></li>
								<li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
								<li><a href="<?php echo site_url('login/logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
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
						<a href="<?php echo site_url("murid")?>">
							<i class="icon-dashboard"></i>
							<span>Start Practicum</span>
						</a>
						</li>

						<li class="sub-menu">
							<a href="javascript:;" class="active">
								<i class="icon-laptop"></i>
								<span>Materials</span>
							</a>
							<ul class="sub">
								<li>
									<a  href=#>From iPos</a>
								</li>
								<li class="active">
									<a class="active" href="<?php echo site_url("guru/upload")?>">From Teacher</a>
								</li>
							</ul>
						</li>

						<li class="sub-menu">
							<a href="<?php echo site_url("guru/manage_score")?>" >
								<i class=" icon-bar-chart"></i>
								<span>Manage Score</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?php echo site_url("guru/schedule")?>">
								<i class="icon-th"></i>
								<span>Schedule</span>
							</a>
						</li>
						<!--multi level menu start-->
						<!--multi level menu end-->
					</ul>
					<!-- sidebar menu end-->
				</div>
			</aside>
			<!--sidebar end-->
			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<!-- page start-->
					<div class="row">
						<aside class="col-lg-3">
							<h4 class="drg-event-title"> Draggable Events</h4>
							<div id='external-events'>
								<div class='external-event label label-primary'>My Event 1</div>
								<div class='external-event label label-success'>My Event 2</div>
								<div class='external-event label label-info'>My Event 3</div>
								<div class='external-event label label-inverse'>My Event 4</div>
								<div class='external-event label label-warning'>My Event 5</div>
								<div class='external-event label label-danger'>My Event 6</div>
								<div class='external-event label label-default'>My Event 7</div>
								<div class='external-event label label-primary'>My Event 8</div>
								<div class='external-event label label-info'>My Event 9</div>
								<div class='external-event label label-success'>My Event 10</div>
								<p class="border-top drp-rmv">
									<input type='checkbox' id='drop-remove' />
									remove after drop
								</p>
							</div>
						</aside>
						<aside class="col-lg-9">
							<section class="panel">
								<div class="panel-body">
									<div id="calendar" class="has-toolbar"></div>
								</div>
							</section>
						</aside>
					</div>
                    <!-- page end-->
				</section>
			</section>
			<!--main content end-->
			<!--footer start-->
			<footer class="site-footer">
				<div class="text-center">
					2013 &copy; FlatLab by VectorLab.
					<a href="#" class="go-top">
						<i class="icon-angle-up"></i>
					</a>
				</div>
			</footer>
			<!--footer end-->
		</section>

		<!-- js placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url("assets/js/jquery.js")?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui-1.9.2.custom.min.js")?>"></script>
		<script src="<?php echo base_url("assets/assets/fullcalendar/fullcalendar/fullcalendar.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
		<script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>

		<!--common script for all pages-->
		<script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>

		<!--script for this page only-->
		<script src="<?php echo base_url("assets/js/external-dragging-calendar.js")?>"></script>

	</body>
</html>
