<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Manage Score</title>

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
						<a href="<?php echo site_url("murid")?>">
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
									<a  href=#>From iPos</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url("guru/upload")?>">From Teacher</a>
								</li>
							</ul>
						</li>

						<li class="sub-menu">
							<a href="<?php echo site_url("guru/manage_score")?>" class="active">
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
				<section class="wrapper site-min-height">
					<!-- page start-->
					<section class="panel">
						<header class="panel-heading">
							Manage Score
						</header>
						<div class="panel-body">
							<div class="adv-table editable-table ">
								<div class="clearfix">
									<div class="btn-group">
										<button id="myModa1l" class="btn btn-success" data-toggle="modal" href="#myModal1">
											Add New Student <i class="icon-plus"></i>
										</button>
									</div>
									<!--My Modal-->
									<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title">Edit Score</h4>
												</div>
												
												<div class="panel-body">
			
												</div>
											</div>
										</div>
									</div>
									<!-- modal -->
									<div class="col-lg-2">
										<select class="form-control m-bot15">
											<option>class</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li><a href="#">Print</a></li>
											<li><a href="#">Save as PDF</a></li>
											<li><a href="#">Export to Excel</a></li>
										</ul>
									</div>
								</div>
								<div class="space15"></div>
									<table class="table table-striped table-hover table-bordered" id="editable-sample">
									<thead>
										<tr>
											<th>No.</th>
											<th>NIS</th>
											<th>Nilai</th>
											<th>Mata Pelajaran</th>
											<th>Modul</th>
											<th>Edit</th>
											<th>Delete</th>
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
											<td><?php echo $q['nis']; ?></td>
											<td><?php echo $q['score']; ?></td>
											<td><?php echo $q['kode_mp']; ?></td>
											<td><?php echo $q['modul']; ?></td>
											<td> <button class="btn btn-success btn-xs" data-toggle="modal" href="#myModal">Edit</button></td>
											
											<!-- Modal -->
											<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title">Edit Score</h4>
														</div>
														<?php
																//echo form_close();
																echo form_open('guru/update_score');
																//echo validation_errors();
																
															?>
															
															<div class="panel-body">

																
																<label  class="col-lg-2 control-label">NIS</label>
																<div class="col-lg-10">
																	<input type="text" class="form-control" id="f-name" placeholder="NIS" name="nis" value="<?php echo $q['nis']; ?>" disabled=""/>
																	<br>
																</div>
															
															
															
																<label  class="col-lg-2 control-label">Score</label>
																<div class="col-lg-10">
																	<input type="text" class="form-control" id="f-name" placeholder="Score" name="score" value="<?php echo $q['score']; ?>" />
																	<br>
																</div>
															
															
															
																<label  class="col-lg-2 control-label">Mata Pelajaran</label>
																<div class="col-lg-10">
																	<input type="text" class="form-control" id="f-name" placeholder="Mata Pelajaran" name="kode_mp" value="<?php echo $q['kode_mp']; ?>" />
																	<br>
																</div>
															
															
															
																<label  class="col-lg-2 control-label">Modul</label>
																<div class="col-lg-10">
																	<input type="text" class="form-control" id="f-name" placeholder="Modal" name="modul" value="<?php echo $q['modul']; ?>" />
																	<br>
																</div>
															
															<?php	
																
																$data = array(
																		'name' => 'save',
																		'id' => 'login-submit',
																		'class' => 'btn btn-success',
																		'type' => 'submit',
																		'value' => 'Save changes'
																	);
																	
																echo form_submit($data);
																echo form_close();
															?>
														</div>
															
															
														</div>
													</div>
												</div>
											</div>
											<!-- modal -->
											
											<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="col-lg-12">
															<section class="panel-success">
																<header class="panel-heading">
																	Edit Data
																</header>
																<div class="panel-body">
																	<form role="form">
																		<div class="form-group">
																			<label  class="col-lg-2 control-label">About Me</label>
																			<div class="col-lg-10">
																					<input name="moto" id="" class="form-control" cols="30" rows="10" value="<?php echo $q['nis']; ?>" /></textarea>
																					<br>		
																			</div>
																		</div>
																		<div class="form-group">
																			<label  class="col-lg-2 control-label">Nama</label>
																			<div class="col-lg-10">
																				<input type="text" class="form-control" id="f-name" placeholder="Name" name="nama" value="<?php echo $q['nis']; ?>" />
																				<br>
																			</div>
																		</div>
																	</form>
																</div>
															</section>
														</div>
													</div>
												</div>
											</div>-->
											
											<td><button class="btn btn-xs btn-danger"> <a href="<?php echo base_url()."guru/del_siswa/".$q['nis']; ?>">Delete</a></button></td>
											<!--<td><a href="#" class="icon-eye-open"></a></td>
											<td><button class="btn btn-xs btn-danger"><a href="<?php /*echo base_url()."guru/del_produk/".$p->id_produk;*/?>">Hapus</a></button></td>
											<td> <button class="btn btn-success btn-xs"><a href="<?php /*echo site_url()."guru/form_edit/".$p->id_produk;*/?>">Edit</a></button></td>-->
											
										<?php 
												$no++; 
											} 
										?>
										
										</tr>
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
	</body>
</html>
