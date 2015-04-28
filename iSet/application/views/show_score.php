<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Mosaddek">
		<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>">

		<title>iPos - Score</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
		<link href="<?php echo base_url("assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css")?>" rel="stylesheet" type="text/css" media="screen"/>
		<link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.css")?>" type="text/css">
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
		<section id="container" >
			<!--header start-->
			<header class="header white-bg">
				<div class="sidebar-toggle-box">
					<div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
				</div>
				<!--logo start-->
				<a href="index.html" class="logo">i<span>Pos</span></a>
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
					<!--  notification end -->
				</div>
				<div class="top-nav ">
					<ul class="nav pull-right top-menu">
						<li>
							
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
								<li><a  href="boxed_page.html">Biology</a>
									<ul class="sub">
									<li><a  href="javascript:;">Bio 1</a></li>
									<li><a  href="javascript:;">Bio 2</a></li>
									</ul>
								</li>
								<li><a  href="horizontal_menu.html">Chemistry</a></li>
								<li><a  href="language_switch_bar.html">Physics</a></li>
							</ul>
						</li>

						<li class="sub-menu">
							<a href=""<?php echo site_url("murid/score")?>"" class="active">
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
					<!--state overview start-->
					<div class="row state-overview">
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol terques">
									<a href="<?php echo site_url("murid/profile")?>">
										<i class="icon-beaker" ></i>
									</a>
								</div>
								<div class="value">
									<h1 class="count">
										0
									</h1>
									<p>Chemistry</p>
								</div>
							</section>
						</div>
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol red">
									<i class="icon-rocket"></i>
								</div>
								<div class="value">
									<h1 class=" count2">
										0
									</h1>
									<p>Physics</p>
								</div>
							</section>
						</div>
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol yellow">
									<i class="icon-sun"></i>
								</div>
								<div class="value">
									<h1 class=" count3">
										0
									</h1>
									<p>Biology</p>
								</div>
							</section>
						</div>
						<div class="col-lg-3 col-sm-6">
							<section class="panel">
								<div class="symbol blue">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="value">
									<h1 class=" count4">
										0
									</h1>
									<p>Total Score</p>
								</div>
							</section>
						</div>
					</div>
					<!--state overview end-->

              <div class="row">
                  <div class="col-lg-8">
                      <!--custom chart start-->
                      <div class="border-head">
                          <h3>Earning Graph</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>100</span></li>
                              <li><span>80</span></li>
                              <li><span>60</span></li>
                              <li><span>40</span></li>
                              <li><span>20</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">MOD1</div>
                              <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD2</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD3</div>
                              <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD4</div>
                              <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MOD5</div>
                              <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD6</div>
                              <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MOD7</div>
                              <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD8</div>
                              <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD9</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD10</div>
                              <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD11</div>
                              <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MOD12</div>
                              <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
                  </div>
                  <div class="col-lg-4">
                      <!--new earning start-->
                      <div class="panel terques-chart">
                          <div class="panel-body chart-texture">
                              <div class="chart">
                                  <div class="heading">
                                      <span><?php print_r($this->session->userdata('nama')); ?></span>
                                      <strong><?php print_r($this->session->userdata('nis')); ?></strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title"><?php print_r($this->session->userdata('nama')); ?></span>
                              <span class="value">
                                  <a href="#">Biologi</a>
                                  |
                                  <a href="#">Fisika</a>
                                  |
                                  <a href="#">Kimia</a>
                              </span>
                          </div>
                      </div>
                      <!--new earning end-->

                      <!--total earning start-->
                      <div class="panel green-chart">
                          <div class="panel-body">
                              <div class="chart">
                                  <div class="heading">
                                      <span><?php print_r($this->session->userdata('nama')); ?></span>
                                      <strong><?php print_r($this->session->userdata('nis')); ?></strong>
                                  </div>
                                  <div id="barchart"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">Total Score</span>
                              <span class="value">10328</span>
                          </div>
                      </div>
                      <!--total earning end-->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <!--widget start-->
                      <section class="panel">
                          <div class="twt-feed blue-bg">
                              <h1><?php print_r($this->session->userdata('nama')); ?></h1>
                              <p><?php print_r($this->session->userdata('nis')); ?></p>
                              <a href="#">
                                  <img src="<?php echo base_url("assets/img/ava-ce.png")?>" alt="">
                              </a>
                          </div>
                          <div class="weather-category twt-category">
                              <ul>
                                 
                              </ul>
                          </div>
                          
                      </section>
                      <!--widget end-->
                      <!--user info table end-->
                  </div>
                  <div class="col-lg-8">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Work Progress</h1>
                                  <p>Anjelina Joli</p>
                              </div>
                              <div class="task-option">
                                  <select class="styled">
                                      <option>Anjelina Joli</option>
                                      <option>Tom Crouse</option>
                                      <option>Jhon Due</option>
                                  </select>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>
                                      Target Sell
                                  </td>
                                  <td>
                                      <span class="badge bg-important">75%</span>
                                  </td>
                                  <td>
                                    <div id="work-progress1"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>
                                      Product Delivery
                                  </td>
                                  <td>
                                      <span class="badge bg-success">43%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>
                                      Payment Collection
                                  </td>
                                  <td>
                                      <span class="badge bg-info">67%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress3"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>
                                      Work Progress
                                  </td>
                                  <td>
                                      <span class="badge bg-warning">30%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress4"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>
                                      Delivery Pending
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">15%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress5"></div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
              </div>
            </div>
          </div>
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
    <script src="<?php echo base_url("assets/js/jquery-1.8.3.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/jquery.sparkline.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js")?>"></script>
    <script src="<?php echo base_url("assets/js/owl.carousel.js")?>" ></script>
    <script src="<?php echo base_url("assets/js/jquery.customSelect.min.js")?>" ></script>
    <script src="<?php echo base_url("assets/js/respond.min.js")?>" ></script>

    <script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js")?>"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url("assets/js/common-scripts.js")?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url("assets/js/sparkline-chart.js")?>"></script>
    <script src="<?php echo base_url("assets/js/easy-pie-chart.js")?>"></script>
    <script src="<?php echo base_url("assets/js/count.js")?>"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
