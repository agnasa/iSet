<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Start Practicum</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>"	rel="stylesheet">
		<link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<link href="<?php echo base_url("assets/css/tasks.css")?>" rel="stylesheet">
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
								<li><a href="<?php echo site_url("murid/profile")?>"><i class=" icon-suitcase"></i>Profile</a></li>
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
							<a href="<?php echo site_url("murid/start_practicum")?>" class="active">
								<i class="icon-dashboard"></i>
								<span>Start Practicum</span>
							</a>
						</li>

						<li class="sub-menu">
							<a href="javascript:;">
								<i class="icon-laptop"></i>
								<span>Materials</span>
							</a>
							<ul class="sub">
								<li>
									<a href="<?php echo site_url("murid/materi")?>">From iPos</a>
								</li>
								<li>
									<a href="<?php echo site_url("murid/download_materi")?>">From Teacher</a>
								</li>
							</ul>
						</li>

						<li class="sub-menu">
							<a href="<?php echo site_url("murid/score")?>">
								<i class=" icon-bar-chart"></i>
								<span>Score</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?php echo site_url("murid/schedule")?>">
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
				<section class="wrapper site-min-height">
				<!-- page start-->
					<section class="panel">
						<header class="panel-heading">
							Mulai Praktikum 
						</header>
						<div class="panel-body">

                            <div class="task-content">

								<ul class="task-list">
                                    <li>
										<span class="task-title-sp">Asam, Basa dan Garam</span>
										<span class="badge badge-sm label-info">Kimia</span>
										<div class="pull-right hidden-phone">
											<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
										</div>
                                    </li>
									<br>
                                    <li>
										<span class="task-title-sp">Gerak Lurus Beraturan</span>
										<span class="badge badge-sm label-danger">Fisika</span>
										<div class="pull-right hidden-phone">
											<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
										</div>
                                    </li>
									<br>
									<li>
										<span class="task-title-sp">Sistem Eksresi</span>
										<span class="badge badge-sm label-success">Biologi</span>
										<div class="pull-right hidden-phone">
											<a class="btn btn-primary btn-xs" href="viewsoal/1/1"><i class="icon-pencil"></i></a>
										</div>
                                    </li>
                                    <br> 
									<li>
										<span class="task-title-sp">Flatlab is Modern Dashboard</span>
										<span class="badge badge-sm label-success">2 Days</span>
										<div class="pull-right hidden-phone">
											<button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
											<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
											<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
										</div>
                                    </li>
                                    <br> 
									<li>
										<span class="task-title-sp">Flatlab is Modern Dashboard</span>
										<span class="badge badge-sm label-success">2 Days</span>
										<div class="pull-right hidden-phone">
											<button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
											<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
											<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
										</div>
                                    </li>
                                    <br> 
                                </ul>
                            </div>
                        </div>
                    </section>
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
    <script src="<?php echo base_url("assets/js/jquery.js")?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>
    <script src="<?php echo base_url("assets/js/tasks.js")?>" type="text/javascript"></script>




    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>


	</body>
</html>
