<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Edit Profile</title>

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
				<div class="top-nav ">
					<ul class="nav pull-right top-menu">
						<li>
							<input type="text" class="form-control search" placeholder="Search">
						</li>
						<!-- user login dropdown start-->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								
								<span class="username">Hello, <?php print_r($this->session->userdata('nama')); ?></span>
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
							<a href=<?php echo site_url("murid/start_practicum")?>">
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
								<li><a  href="boxed_page.html">Biology</a>
									<ul class="sub">
										<li><a  href="javascript:;">Bio 1</a></li>
										<li><a  href="javascript:;">Bio 2</a></li>
									</ul>
								</li>
								<li><a  href="horizontal_menu.html">Chemistry</a></li>
								<li>
									<a  href="language_switch_bar.html">Physics</a>
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
						<?php
							echo form_close();
							echo form_open('murid/update_profile');
							echo validation_errors();
							//foreach
							foreach($results as $row):
						?>
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
										  <li><a href="<?php echo site_url("murid/profile")?>"> <i class="icon-user"></i> Profile</a></li>
										  <li><a href="profile-activity.html"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
										  <li  class="active"><a href="<?php echo site_url("murid/profile_edit")?>"> <i class="icon-edit"></i> Edit profile</a></li>
									  </ul>

								  </section>
								</aside>

							  <aside class="profile-info col-lg-9">
								  <section class="panel">
								  		
									  <div class="bio-graph-heading">
										  "<?php echo $row->moto; ?>"
									  </div>
									  <div class="panel-body bio-graph-info">
										  <h1> Profile Info</h1>
										  <form class="form-horizontal" role="form">										  		
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">About Me</label>
												  <div class="col-lg-10">
													  	<input name="moto" id="" class="form-control" cols="30" rows="10" value="<?php echo $row->moto; ?>" /></textarea>
												  		<br>		
												  </div>
											  </div>
											  
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">Nama</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="f-name" placeholder="Name" name="nama" value="<?php echo $row->nama; ?>" />
													  <br>
												  </div>
											  </div>
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">NIS</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="l-name" placeholder="<?php print_r($this->session->userdata('nis')); ?>" disabled="">
													  <br>
												  </div>
											  </div>
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">Class</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="c-name" placeholder="City" name="kelas" value="<?php echo $row->kelas; ?>">
													  <br>
												  </div>
											  </div>
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">City</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="c-name" placeholder="City" name="tempat" value="<?php echo $row->tempat; ?>">
													  <br>
												  </div>
											  </div>
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">Birthday</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="b-day" placeholder="Birthday" name="tanggal" value="<?php echo $row->tanggal; ?>">
													  <br>
												  </div>
											  </div>
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">Address</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="b-day" placeholder="Address" name="alamat" value="<?php echo $row->alamat; ?>">
													  <br>
												  </div>
											  </div>
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">Email</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" value="<?php echo $row->email; ?>">
													  <br>
												  </div>
											  </div>
											  <div class="form-group">
												  <label  class="col-lg-2 control-label">Mobile</label>
												  <div class="col-lg-10">
													  <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="notelp" value="<?php echo $row->notelp; ?>">
													  <br>
												  </div>
											  </div>

											  <div class="form-group">
												  <div class="col-lg-offset-2 col-lg-10">
													  <?php
													  	//end of foreach
													  	endforeach;
													  	$data = array(
													  			'name' => 'save',
													  			'id' => 'login-submit',
													  			'class' => 'btn btn-success',
													  			'type' => 'submit',
													  			'value' => 'Save'
													  		);
													  	echo form_submit($data);
													  	echo form_close();
													  ?>
													  <button type="button" class="btn btn-default">Cancel</button>
												  </div>
											  </div>
										  </form>
									  </div>
								  </section>
								  <section>
									  <div class="panel panel-primary">
										  <div class="panel-heading"> Sets New Password & Avatar</div>
										  <div class="panel-body">
											  <form class="form-horizontal" role="form">
												  <div class="form-group">
													  <label  class="col-lg-2 control-label">Current Password</label>
													  <div class="col-lg-6">
														  <input type="password" class="form-control" id="c-pwd" placeholder=" ">
													  </div>
												  </div>
												  <div class="form-group">
													  <label  class="col-lg-2 control-label">New Password</label>
													  <div class="col-lg-6">
														  <input type="password" class="form-control" id="n-pwd" placeholder=" ">
													  </div>
												  </div>
												  <div class="form-group">
													  <label  class="col-lg-2 control-label">Re-type New Password</label>
													  <div class="col-lg-6">
														  <input type="password" class="form-control" id="rt-pwd" placeholder=" ">
													  </div>
												  </div>

												  <div class="form-group">
													  <label  class="col-lg-2 control-label">Change Avatar</label>
													  <div class="col-lg-6">
														  <input type="file" class="file-pos" id="exampleInputFile">
													  </div>
												  </div>

												  <div class="form-group">
													  <div class="col-lg-offset-2 col-lg-10">
														  <button type="submit" class="btn btn-info">Save</button>
														  <button type="button" class="btn btn-default">Cancel</button>
													  </div>
												  </div>
											  </form>
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