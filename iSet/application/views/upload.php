
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Upload Download</title>

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
				<section class="wrapper site-min-height">
				<!-- page start-->
					<section class="panel">
						<header class="panel-heading">
							File
						</header>
						<div class="panel-body">
							<div class="adv-table">
								<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
									<div class="btn-group">
										<button id="myModa1l" class="btn btn-success" data-toggle="modal" href="#myModal1">
											Upload <i class="icon-plus"></i>
										</button>
									</div>
									
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
											<td><?php echo $q['nama']; ?></td>
											<td><a href="#" class="icon-eye-open"></a></td>
											<td><button class="btn btn-xs btn-success"> <a href="<?php echo base_url()."guru/download/".$q['nama']; ?>">Download</a></button></td>
											<td><button class="btn btn-xs btn-danger"> <a href="<?php echo base_url()."guru/del_file/".$q['nama']; ?>">Delete</a></button></td>
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
		<!--<script src="js/jquery.js"></script>-->
		<script type="text/javascript" language="javascript" src="<?php echo base_url("assets/assets/advanced-datatable/media/js/jquery.js")?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
		<script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
		<script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
		<script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url("assets/assets/advanced-datatable/media/js/jquery.dataTables.js") ?>"></script>


		<!--common script for all pages-->
		<script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>

		<script type="text/javascript">
			/* Formating function for row details */
			function fnFormatDetails ( oTable, nTr )
			{
				var aData = oTable.fnGetData( nTr );
				var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
				sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
				sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
				sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
				sOut += '</table>';

				return sOut;
			}

			$(document).ready(function() {
				/*
				* Insert a 'details' column to the table
				*/
				var nCloneTh = document.createElement( 'th' );
				var nCloneTd = document.createElement( 'td' );
				nCloneTd.innerHTML = '<img src="<?php echo base_url("assets/assets/advanced-datatable/examples/examples_support/details_open.png")?>">';
				nCloneTd.className = "center";

				$('#hidden-table-info thead tr').each( function () {
					this.insertBefore( nCloneTh, this.childNodes[0] );
				} );

				$('#hidden-table-info tbody tr').each( function () {
					this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
				} );

				/*
				* Initialse DataTables, with no sorting on the 'details' column
				*/
				var oTable = $('#hidden-table-info').dataTable( {
					"aoColumnDefs": [
						{ "bSortable": false, "aTargets": [ 0 ] }
					],
					"aaSorting": [[1, 'asc']]
				});

				/* Add event listener for opening and closing details
				* Note that the indicator for showing which row is open is not controlled by DataTables,
				* rather it is done here
				*/
				$('#hidden-table-info tbody td img').live('click', function () {
					var nTr = $(this).parents('tr')[0];
					if ( oTable.fnIsOpen(nTr) )
					{
						/* This row is already open - close it */
						this.src = "<?php echo base_url("assets/assets/advanced-datatable/examples/examples_support/details_open.png")?>";
						oTable.fnClose( nTr );
					}
					else
					{
						/* Open this row */
						this.src = "<?php echo base_url("assets/assets/advanced-datatable/examples/examples_support/details_close.png")?>";
						oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
					}
				} );
			} );
		</script>

		
	</body>
</html>
