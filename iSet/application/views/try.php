<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("/assets/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("/assets/css/bootstrap-reset.css")?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url("/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css")?>" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/owl.carousel.css")?>"type="text/css">
    <link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("/assets/css/style.css")?> "rel="stylesheet">
    <link href="<?php echo base_url("/assets/css/style-responsive.css")?> "rel="stylesheet" />
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
            <a href="#" class="logo">AD<span>MIN</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">Hello,NAMA</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                              <li style="width:50%"><a href="<?php echo site_url("index.php/main/profile")?>"><i class=" icon-suitcase"></i>Profile</a></li>
                            <li style="width:50%"><a href="<?php echo site_url("index.php/main/admin")?>"><i class="icon-cog"></i> Admin</a></li>
                            <li><a href="<?php echo site_url("index.php/main/logout")?>"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
             <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="">
                        <a class="" href="<?php echo site_url("index.php/main/home")?>">
                            <i class="icon-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="<?php echo site_url("index.php/main/produk")?>">
                            <i class="icon-dropbox"></i>
                            <span>Produk</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="<?php echo site_url("index.php/main/buyerlist")?>">
                            <i class="icon-tags"></i>
                            <span>Buyer List</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="<?php echo site_url("index.php/main/recapsales")?>">
                            <i class="icon-book"></i>
                            <span>Recap Sales</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="<?php echo site_url("index.php/main/comment")?>">
                            <i class="icon-comment"></i>
                            <span>Comment</span>
                        </a>
                    </li>

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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">

                        <div class="col-lg-12">
                            <button class="btn btn-primary btn-large btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Admin</button>

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="col-lg-12">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    Tambah Admin
                                                </header>
                                                <div class="panel-body">
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label>Nama Admin</label>
                                                            <input class="form-control" id="Nama" placeholder="Nama Admin">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor Telepon</label>
                                                            <input class="form-control" id="NoTelp" placeholder="Nomor Telepon">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input class="form-control" id="Alamat" placeholder="Alamat Admin">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" id="Email" placeholder="Email">
                                                        </div>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info pull-right">Save</button>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">

                            <header class="panel-heading">
                                Daftar Admin
                            </header>
                            <table class="table table-striped border-top" id="sample_1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Rony</td>
                                        <td>Buah Batu Regency</td>
                                        <td>087626525636</td>
                                        <td>BBR@gmail.com</td>
                                        

                                    </tr>



                                </tbody>
                            </table>
                        </div>
            </section>

            <!-- page end-->
        </section>
        <!--main content end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url("/assets/js/jquery.js")?>"></script>
    <script src="<?php echo base_url("/assets/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("/assets/js/jquery.scrollTo.min.js")?>"></script>
    <script src="<?php echo base_url("/assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/data-tables/jquery.dataTables.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/data-tables/DT_bootstrap.js")?>"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url("/assets/js/common-scripts.js")?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url("/assets/js/dynamic-table.js")?>"></script>
	
</body>
</html>

