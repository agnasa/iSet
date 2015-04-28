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
   <link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css")?>" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.css")?>" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/css/style.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/style-responsive.css")?>" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url("/assets/js/html5shiv.js")?>"></script>
      <script src="<?php echo base_url("/assets/js/respond.min.js")?>"</script>
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
                            <span class="username">Hello,<?php print_r($this->session->userdata('email')); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           <li style="width:100%"><a href="<?php echo site_url("index.php/adminn/profile")?>"><i class=" icon-suitcase"></i>Profile</a></li>
                          
                            <li><a href="<?php echo site_url("index.php/adminn/logout")?>"><i class="icon-key"></i> Log Out</a></li>
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
                        <a class="" href="<?php echo site_url("index.php/adminn/home")?>">
                            <i class="icon-home"></i>
                            <span>Member</span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="" href="<?php echo site_url("index.php/adminn/produk")?>">
                            <i class="icon-dropbox"></i>
                            <span>Produk</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="<?php echo site_url("index.php/adminn/buyerlist")?>">
                            <i class="icon-tags"></i>
                            <span>Buyer List</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="<?php echo site_url("index.php/adminn/comment")?>">
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
                            <button class="btn btn-primary btn-large btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Produk</button>

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="col-lg-12">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    Tambah Produk
                                                </header>
                                                <div class="panel-body">
                                                    <!--<form role="form">
                                                        <div class="form-group">
                                                            <label>Id Produk</label>
                                                            <input class="form-control" id="id_produk" placeholder="ID">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Barang</label>
                                                            <input class="form-control" id="nama" placeholder="Nama Barang">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jumlah</label>
                                                            <input class="form-control" id="jumlah" placeholder="Jumlah">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Harga</label>
                                                            <input class="form-control" id="harga" placeholder="Harga">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Diskon</label>
                                                            <input class="form-control" id="diskon" placeholder="Diskon">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Link</label>
                                                            <input class="form-control" id="link" placeholder="Link">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <input class="form-control" id="deskripsi" placeholder="Deskripsi">
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-white" type="button">Kategori</button>
                                                            <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"><span class="caret"></span></button>
                                                            <ul role="menu" class="dropdown-menu">
                                                                <li><a href="#">Gitar</a></li>
                                                                <li><a href="#">Keyboard</a></li>
                                                                <li><a href="#">Drum</a></li>
                                                                 <li><a href="#">Accesories</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">Input Gambar</label>
                                                            <input type="file" id="exampleInputFile">
                                                        </div>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-info pull-right">Save</button> -->




 <?php
     echo form_close();
     echo form_open('index.php/adminn/add_produk');
    echo validation_errors();
    
     echo '<P>Id Produk ';
    $data=array(
             
                'name'=>'id_produk',
                'class'=>'form-control',
        
                'placeholder'=>'Id Produk',
    );
    echo form_input($data,$this->input->post('id_produk'));

    echo '<P>Nama ';
    $data=array(
             
                'name'=>'nama',
                'class'=>'form-control',
        
                'placeholder'=>'Nama',
    );
    echo form_input($data,$this->input->post('nama'));

    echo '<P>Jumlah ';
    $data=array(
          
                'name'=>'jumlah',
                'class'=>'form-control',
          
                'placeholder'=>'Jumlah',
    );
    echo form_input($data,$this->input->post('jumlah'));

    echo '<P>Harga ';
    $data=array(
             
                'name'=>'harga',
                'class'=>'form-control',
             
                'placeholder'=>'Harga',
    );
    echo form_input($data,$this->input->post('harga'));


  echo '<P>Link';
    $data=array(
         
                'name'=>'link',
                'class'=>'form-control',
            
                'placeholder'=>'Link',
    );
    echo form_input($data,$this->input->post('link'));

  echo '<P>Deskripsi';
    $data=array(
       
                'name'=>'deskripsi',
                'class'=>'form-control',
         
                'placeholder'=>'Deskripsi',
    );
    echo form_input($data,$this->input->post('deskripsi'));

 echo ('<p>Kategori ');
  $options = array(
    'accessories' => 'accessories',
    'drum'        => 'drum',
    'gitar'       => 'gitar',
    'keyboard'    => 'keyboard',
  );
  echo form_dropdown('kategori', $options);

    $data=array(
             
                'name'=>'submit',
                'class'=>'btn btn-info pull-right',
              
    );


    echo '<br>';
    echo form_submit($data,'Tambah');
    echo form_close();
    
    ?> 
   



                                                   
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
                                Daftar Produk
                            </header>
                            <table class="table table-striped border-top" id="sample_1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Produk</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                
                                        <th>Link</th>
                                        <th>Deskripsi</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    if(empty($query)){
                                        echo 'Data tidak tersedia';
                                    }else{

                                     $no=1; foreach($query as $p){ ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $p->id_produk; ?></td>
                                        <td><?php echo $p->nama; ?></td>
                                        <td><?php echo $p->kategori; ?></td>
                                        <td><?php echo $p->jumlah; ?></td>
                                        <td><?php echo $p->harga; ?></td>                  
                                        <td><?php echo $p->link; ?></td>
                                        <td><?php echo $p->deskripsi; ?></td>
                                            
                                        <td><a href="<?php echo base_url()."index.php/adminn/openimage/".$p->id_produk.$p->kategori;?>" class="icon-eye-open"></a></td>
                                        <td><button class="btn btn-xs btn-danger"><a href="<?php echo base_url()."index.php/adminn/del_produk/".$p->id_produk;?>">Hapus</a></button></td>
                                        <td> <button class="btn btn-success btn-xs"><a href="<?php echo site_url()."index.php/adminn/form_edit/".$p->id_produk;?>">Edit</a></button></td>
   <?php $no++; }} ?>
                                                          
 

                                    </tr>
        
     
                                </tbody>
                            </table>
    
 
                                                    <div class="col-lg-12">
                                                          <button class="btn btn-primary btn-large btn-block" data-toggle="modal" data-target=".bs-example-modal">Upload Image</button>
                                                <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="col-lg-12">
                                                                <section class="panel">
                                                                    <header class="panel-heading">
                                                                        Upload Image
                                                                    </header>
                                                                    <div class="panel-body">
                                                                        <form role="form">
                                                                          <!--  <div class="form-group col-lg-10">
                                                                                <label>Nama Barang</label>
                                                                                <input class="form-control" id="NamaBarang" placeholder="Nama Barang">
                                                                            </div>
                                                                            <div class="form-group col-lg-10">
                                                                                <label>Jumlah</label>
                                                                                <input class="form-control" id="Jumlah" placeholder="Jumlah">
                                                                                
                                                                            </div>
                                                                            <div class="form-group col-lg-10">
                                                                                <label>Harga</label>
                                                                                <input class="form-control" id="Harga" placeholder="Harga">
                                                                            </div><br />
                                                                            <div class="btn-group">
                                                                                <button class="btn btn-white" type="button">Kategori</button>
                                                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"><span class="caret"></span></button>
                                                                                <ul role="menu" class="dropdown-menu">
                                                                                    <li><a href="#">AGitar</a></li>
                                                                                    <li><a href="#">Piano</a></li>
                                                                                    <li><a href="#">Suling</a></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="form-group col-lg-10">
                                                                                <label for="exampleInputFile">Input Gambar</label>
                                                                                <input type="file" id="exampleInputFile">
                                                                            </div>
                                                                            <div>
                                                                                <button type="submit" class="btn btn-info pull-right">Save</button>
                                                                            </div> -->
<?php
echo form_close();
echo form_open_multipart('index.php/adminn/do_upload');

 echo '<P>Id Produk ';
    $data=array(
             
                'name'=>'id_produk',
                'class'=>'form-control',
        
                'placeholder'=>'Id Produk',
    );
     echo form_input($data,$this->input->post('id_produk'));
    

echo ('<p>Kategori <br>');
  $options = array(
    'accessories' => 'accessories',
    'drum'        => 'drum',
    'gitar'       => 'gitar',
    'keyboard'    => 'keyboard',
  );
  echo form_dropdown('kategori', $options);
   echo '<br>';
    echo '<br>';
    
echo "<input type='file' name='userfile' size='20' class=btn btn-info pull-right />";
  $data=array(
             
                'name'=>'submit',
                'class'=>'btn btn-info pull-right',
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
                                            </div>
                                       


                            </div>
            </section>

            <!-- page end-->
        </section>
    </section>

                                           
    <!--main content end-->
    <!-- js placed at the end of the document so the pages load faster -->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url("/assets/js/jquery.js")?>"></script>
    <script src="<?php echo base_url("/assets/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("/assets/js/jquery.scrollTo.min.js")?>"></script>
    <script src="<?php echo base_url("/assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/assets/data-tables/jquery.dataTables.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/assets/data-tables/DT_bootstrap.js")?>"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url("/assets/js/common-scripts.js")?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url("/assets/js/dynamic-table.js")?>"></script>

</body>
</html>
