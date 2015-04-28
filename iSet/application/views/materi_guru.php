
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Materials</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />

		<link href="<?php echo base_url("assets/assets/fancybox/source/jquery.fancybox.css")?>" rel="stylesheet" />
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
            
				</div>
				<div class="top-nav ">
					<ul class="nav pull-right top-menu">
						<!-- user login dropdown start-->
						
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="username"><?php echo $this->session->userdata('nama'); ?></span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu extended logout">
								<div class="log-arrow-up"></div>
								<li><a href="<?php echo site_url("guru/profile")?>"><i class=" icon-suitcase"></i>Profile</a></li>
								<li><a href="#"><i class="icon-unlock-alt"></i> Lock Screen</a></li>
								<li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
								<li><a href="<?php echo site_url('login/logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
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
						<a href="<?php echo site_url("guru/start_practicum")?>">
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
								<li class="active">
									<a href="<?php echo site_url("guru/materi")?>">From iPos</a>
								</li>
								<li>
									<a href="<?php echo site_url("guru/upload")?>">From Teacher</a>
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
					<section class="panel">
						<header class="panel-heading">
							Materials from iPos
						</header>
						<div class="panel-body">
							<ul class="grid cs-style-3">
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img04">
										<figcaption>
											<h3>Cermin</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/mirror2.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img01">
										<figcaption>
											<h3>Mata Dalam</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/mata dalam.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img02">
										<figcaption>
											<h3>Pembiasan Ikan - Snellius</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/PEMBIASAN-Snellius-ikan.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img05">
										<figcaption>
											<h3>Lensa Bekonkaf</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/LENSA-BEKONKAF-int.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img03">
										<figcaption>
											<h3>Asam, Basa dan Garam</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/AsamBasa.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/organ.jpg")?>" alt="img01">
										<figcaption>
											<h3>Organ Tubuh Manusia</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/organ.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img04">
										<figcaption>
											<h3>Otot Mata</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/oto mata.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img01">
										<figcaption>
											<h3>Efek Doppler</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/EfekDoppler.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img02">
										<figcaption>
											<h3>Elektrolit</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/elektrolit1.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img03">
										<figcaption>
											<h3>Hukum Pascal</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/Hukum Pascal.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img06">
										<figcaption>
											<h3>Mata Luar</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/mata luar.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
								<li>
									<figure>
										<img src="<?php echo base_url("assets/img/gallery/4.jpg")?>" alt="img04">
										<figcaption>
											<h3>Gerak Lurus Berubah Beraturan</h3>
											<a class="fancybox" rel="group" href="<?php echo base_url("assets/img/gallery/GLBB2.swf")?>">View</a>
										</figcaption>
									</figure>
								</li>
							</ul>

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
		<script src="<?php echo base_url("assets/assets/fancybox/source/jquery.fancybox.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>

		<script src="<?php echo base_url("assets/js/modernizr.custom.js")?>"></script>
		<script src="<?php echo base_url("assets/js/toucheffects.js")?>"></script>


		<!--common script for all pages-->
		<script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>

		<script type="text/javascript">
		  $(function() {
			//    fancybox
			  jQuery(".fancybox").fancybox();
		  });

		</script>
		
	</body>
</html>
