<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Profile</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>"	rel="stylesheet">
		<link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
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
				<?php
					echo form_close();
					echo form_open('murid/update_profile');
					echo validation_errors();
					//foreach
					foreach($results as $row):
				?>
				<div class="top-nav ">
					<ul class="nav pull-right top-menu">
						<li>
							<input type="text" class="form-control search" placeholder="Search">
						</li>
						<!-- user login dropdown start-->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								
								<span class="username">Hello, <?php echo $row->nama; ?></span>
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
							<a href="<?php echo site_url("murid/start_practicum")?>">
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
									<a  href=#>Biology</a>
									<ul class="sub">
									<li><a  href="<?php echo site_url("murid/score")?>">Bio 1</a></li>
									<li><a  href="<?php echo site_url("murid/score")?>">Bio 2</a></li>
									</ul>
								</li>
								<li><a  href="horizontal_menu.html">Chemistry</a></li>
								<li>
									<a  href=#>Physics</a>
									<ul class="sub">
										<li><a  href="<?php echo site_url("murid/optic")?>">Alat Optik</a></li>
										<li><a  href="<?php echo site_url("murid/score")?>">Magnet</a></li>
									</ul>
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
				<section class="wrapper">
					<!-- page start-->
					<div class="row">
					  <aside class="profile-nav col-lg-3">
						  <section class="panel">
							  <div class="user-heading round">
									<a href="#">
										<img src="<?php echo base_url("assets/img/ava-ce.png")?>" alt="">
									</a>
									<h1><?php echo $row->nama; ?></h1>
									<p><?php echo $row->email; ?></p>
								</div>

								<ul class="nav nav-pills nav-stacked">
									<li class="active"><a href="<?php echo site_url("murid/profile")?>"> <i class="icon-user"></i> Profile</a></li>
									<li><a href="profile-activity.html"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
									<li><a href="<?php echo site_url("murid/profile_edit")?>"> <i class="icon-edit"></i> Edit profile</a></li>
								</ul>

							</section>
						</aside>
						<aside class="profile-info col-lg-9">
							<section class="panel">
								<form>
									<textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
								</form>
								<footer class="panel-footer">
									<button class="btn btn-danger pull-right">Post</button>
									<ul class="nav nav-pills">
										<li>
											<a href="#"><i class="icon-map-marker"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon-camera"></i></a>
										</li>
										<li>
											<a href="#"><i class=" icon-film"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon-microphone"></i></a>
										</li>
									</ul>
								</footer>
							</section>
							<section class="panel">
								<div class="bio-graph-heading">
									<i>"<?php print_r($this->session->userdata('moto')); ?>"</i>
								</div>
								
								<div class="panel-body bio-graph-info">
									<h1>Bio Graph</h1>
									<div class="row">
										<div class="bio-row">
											<p><span>Name </span>: <?php echo $row->nama; ?></p>
										</div>
										<div class="bio-row">
											<p><span>NIS </span>: <?php echo $row->nis; ?></p>
										</div>
										<div class="bio-row">
											<p><span>City </span>: <?php echo $row->tempat; ?></p>
										</div>
										<div class="bio-row">
											<p><span>Birthday</span>: <?php echo $row->tanggal; ?></p>
										</div>
										<div class="bio-row">
											<p><span>Class </span>: <?php echo $row->kelas; ?></p>
										</div>
										<div class="bio-row">
											<p><span>Email </span>: <?php echo $row->email; ?></p>
										</div>
										<div class="bio-row">
											<p><span>Mobile </span>: <?php echo $row->notelp; ?></p>
										</div>
										<div class="bio-row">
											<p><span>Address </span>: <?php echo $row->alamat; ?></p>
										</div>
									</div>
								</div>
								<?php
							  	//end of foreach
							  		endforeach;
							  		echo form_close();
							 	 ?>
							</section>
							<section>
								<div class="row">
									<div class="col-lg-6">
										<div class="panel">
											<div class="panel-body">
												<div class="bio-chart">
													<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#e06b7d" data-bgColor="#e8e8e8">
												</div>
												<div class="bio-desk">
													<h4 class="red">Physics</h4>
													<p>Highest Score : 100</p>
													<p>Lowest Score : 50</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="panel">
											<div class="panel-body">
												<div class="bio-chart">
													<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="63" data-fgColor="#4CC5CD" data-bgColor="#e8e8e8">
												</div>
												<div class="bio-desk">
													<h4 class="terques">Chemistry </h4>
													<p>Highest Score : 90</p>
													<p>Lowest Score : 50</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="panel">
											<div class="panel-body">
												<div class="bio-chart">
													<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="75" data-fgColor="#96be4b" data-bgColor="#e8e8e8">
												</div>
												<div class="bio-desk">
													<h4 class="green">Biology</h4>
													<p>Highest Score : 100</p>
													<p>Lowest Score : 20</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="panel">
											<div class="panel-body">
												<div class="bio-chart">
													<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="50" data-fgColor="#cba4db" data-bgColor="#e8e8e8">
												</div>
												<div class="bio-desk">
													<h4 class="purple">Total</h4>
													<p>Physics : 80</p>
													<p>Chemistry : 78</p>
													<p>Biology : 78</p>
												</div>
											</div>
										</div>
									</div>
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
					2015 &copy; iPos by Blanc Up.
					<a href="#" class="go-top">
						<i class="icon-angle-up"></i>
					</a>
				</div>
			</footer>
			<!--footer end-->
		</section>

		<!-- js placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url("assets/js/jquery-1.8.3.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
		<script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/assets/jquery-knob/js/jquery.knob.js")?>"></script>
		<script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>

		<!--common script for all pages-->
		<script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>
		<script>

			//knob
			$(".knob").knob();

		</script>
	</body>
</html>
