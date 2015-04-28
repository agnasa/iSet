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
		<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>"	rel="stylesheet">
		<link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url("assets/assets/data-tables/DT_bootstrap.css")?>" />
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
							<a href="<?php echo site_url("murid/start_practicum")?>">
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
									<a href="<?php echo site_url("murid/materi")?>">From iPos</a>
								</li>
								<li class="active">
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
							File
						</header>
						<div class="panel-body">
							<div class="adv-table">
								<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
									
									<!-- MODAL-->
									<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									    <div class="modal-dialog">
											<div class="modal-content">
												<div class="col-lg-12">
													<section class="panel">
														<header class="panel-heading">
															Upload Materi
														</header>
														<div class="panel-body">
															<form role="form">
                                                                         
																<?php
																echo form_close();
																echo form_open_multipart('guru/do_upload');
																/*echo ('<p>Mata Pelajaran <br>');
																	$options = array(
																		'Biologi' => 'Biologi',
																		'Fisika' => 'Fisika',
																		'Kimia' => 'Kimia',
																	);
																echo form_dropdown('Mata Pelajaran', $options);*/
																echo '<br>';
																echo '<br>';
																	
																echo "<input type='file' name='userfile' size='20' class=btn btn-info pull-right />";
																	$data=array(
																		'name'=>'submit',
																		'class'=>'btn btn-success pull-right',
																	);

																echo form_submit($data,'Upload');
																echo form_close();
										
																?>
															</form>
														</div>
													</section>
												</div>
											</div>
										</div>
									</div>
									
									<thead>
										<tr>
											<th>No</th>
											<th>File Name</th>
											<th>View</th>
											<th>Download</th>
										</tr>
									</thead>
									<tbody>
										<?php
											
												$no=1;
												foreach($results as $q)
												{
													
										?>
										<tr class="odd gradeX">
											<td><?php echo $no; ?></td>
											<td><?php echo $q['nama']; ?></td>
											<td><a href="#" class="icon-eye-open"></a></td>
											<td><button class="btn btn-xs btn-success"> <a href="<?php echo base_url()."guru/download/".$q['nama']; ?>">Download</a></button></td>
										</tr>
										<?php 
												$no++; 
											} 
										?>
									</tbody>
								</table>
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
		<script src="<?php echo base_url("assets/js/jquery-1.8.3.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
		<script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/assets/data-tables/jquery.dataTables.js")?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/assets/data-tables/DT_bootstrap.js")?>"></script>
		<script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>

		<!--common script for all pages-->
		<script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>

		<!--script for this page only-->
		<script src="<?php echo base_url("assets/js/dynamic-table.js")?>"></script>
		<script src="<?php echo base_url("assets/js/editable-table.js")?>"></script>

		<!-- END JAVASCRIPTS -->
		<script>
			jQuery(document).ready(function() {
				EditableTable.init();
			});
		</script>

		</script>
	</body>
</html>
