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
							Mulai
						</header>
						<?php
							
							$i=1;
							echo form_open('murid/cekJawaban');
							foreach($results as $row):
						?>
						<section class="panel">
							<div class="panel-body">
								
									<div class="col-lg-12">
										<!--<label class="col-sm-12 control-label col-lg-12" for="inputSuccess">Checkboxes and radios</label>-->
										<?php
											echo $i.". ";
										?>
										<?php
											echo $row->soal;
										?>
                                    </div>
									<div class="col-lg-10">
                                        <div class="radio">
											<label>
                                                <!--<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
												Option one is this and that&mdash;be sure to include why it's great-->
												<?php
													$data = array(
														'name' => $row->nomer_soal,
														'id' => 'a'.$row->nomer_soal,
														'value' => 'a',
														'checked' => False,
													);
													echo form_radio($data);
												?>
												<?php 
													echo form_label("a. ".$row->a, 'a'.$row->nomer_soal);
												?>
                                            </label>
											<br>
											<label>
												<?php
													$data = array(
														'name' => $row->nomer_soal,
														'id' => 'b'.$row->nomer_soal,
														'value' => 'b',
														'checked' => False,
													);
													echo form_radio($data);
												?>
												<?php 
													echo form_label("b. ".$row->b, 'b'.$row->nomer_soal);
												?>
											</label>
											<br>
											<label>
												<?php
													$data = array(
														'name' => $row->nomer_soal,
														'id' => 'c'.$row->nomer_soal,
														'value' => 'c',
														'checked' => False,
													);
													echo form_radio($data);
												?>
												<?php 
													echo form_label("c. ".$row->c, 'c'.$row->nomer_soal);
												?>
											</label>
											<br>
											<label>
												<?php
													$data = array(
														'name' => $row->nomer_soal,
														'id' => 'd'.$row->nomer_soal,
														'value' => 'd',
														'checked' => False,
													);
													echo form_radio($data);
												?>
												<?php 
													echo form_label("d. ".$row->d, 'd'.$row->nomer_soal);
												?>
											</label>
                                        </div> 
                                    </div>
								
							</div>
						</section>
						<?php
							$i++;
							$id_modul = $row->id_modul;
							$id_pelajaran = $row->id_pelajaran;
							endforeach;
							
							echo form_hidden('jumlah',$i);
							echo form_hidden('id_modul',$id_modul);
							echo form_hidden('id_pelajaran',$id_pelajaran);
							//echo form_submit('submit','Kumpulkan');
							$data = array(
									'name' => 'save',
									'id' => 'login-submit',
									'class' => 'btn btn-success',
									'type' => 'submit',
									'value' => 'Kumpul'
								);
							echo form_submit($data);
							echo form_close();
						?>
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
		<script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>

		<script src="<?php echo base_url("assets/js/jquery-ui-1.9.2.custom.min.js")?>"></script>
		<script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>

		<!--custom switch-->
		<script src="<?php echo base_url("assets/js/bootstrap-switch.js")?>"></script>
		<!--custom tagsinput-->
		<script src="<?php echo nbase_url("assets/js/jquery.tagsinput.js")?>"></script>
		<!--custom checkbox & radio-->
		<script type="text/javascript" src="<?php echo base_url("assets/js/ga.js")?>"></script>

		<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
		<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

		<script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
		<script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>


		<!--common script for all pages-->
		<script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>

		<!--script for this page-->
		<script src="<?php echo base_url("assets/js/form-component.js")?>"></script>
	</body>
</html>
