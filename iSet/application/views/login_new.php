<!DOCTYPE html>
<html>
	<head>
		<title>iPos</title>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- css -->
		<link href="<?php echo base_url("assets/mamba/css/bootstrap.min.css")?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url("assets/mamba/css/style.css")?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url("assets/mamba/color/default.css")?>" rel="stylesheet" media="screen">
		<script src="<?php echo base_url("assets/mamba/js/modernizr.custom.js")?>"></script>
		<link rel="shortcut icon" href="favicon.ico">
	</head>
	<body>
		<!-- intro area -->	  
		<div id="intro">
			<div class="intro-text">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="brand">
								
								<link href="<?php echo base_url("assets/pop/bootstrap3/css/bootstrap.css")?>" rel="stylesheet" />
 								<link href="<?php echo base_url("assets/pop/login-register.css")?>" rel="stylesheet" />
								<script src="<?php echo base_url("assets/pop/jquery/jquery-1.10.2.js")?>" type="text/javascript"></script>
								<script src="<?php echo base_url("assets/pop/bootstrap3/js/bootstrap.js")?>" type="text/javascript"></script>
								<script src="<?php echo base_url("assets/pop/login-register.js")?>" type="text/javascript"></script>
								
								<a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
								
							</div>
						</div>
					</div>
				</div>
		 	</div>
			<div class="modal fade login" id="loginModal">
				<div class="modal-dialog login animated">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Login to iPos</h4>
						</div>
						<div class="modal-body">  
							<div class="box">
								<div class="content">
									<div class="division">
										<div class="line l"></div>
										  <span></span>
										<div class="line r"></div>
									</div>
									<div class="error"></div>
									<div class="form loginBox">
										<form method="post" action="/login" accept-charset="UTF-8">
										<!--<input id="email" class="form-control" type="text" placeholder="Email" name="email">
										<input id="password" class="form-control" type="password" placeholder="Password" name="password">
										<input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">-->
											<?php
												echo form_close();
												echo form_open('index.php/login/login_validation');
												echo validation_errors();
												
												$email=array(
													'name'=>'username',
													'class'=>'form-control',
													'placeholder'=>'NIS',
												);
												
												$password=array(
													'name'=>'password',
													'class'=>'form-control',
													'placeholder'=>'Password',
												);
												
												$tombol=array(
													'name'=>'login_submit',
													'class'=>'btn btn-default btn-login',
													'onclick'=>'loginAjax()',
												);
												
												echo form_input($email, $this->input->post('email'));
												echo form_password($password);
												echo form_submit($tombol,'login');
												echo form_close();
											?>
										</form>
									</div>
								</div>
							</div>
							
						</div>
						<div class="modal-footer">
							<div class="forgot register-footer" style="display:none">
								 <span>Already have an account?</span>
								 <a href="javascript: showLoginForm();">Login</a>
							</div>
						</div>        
					</div>
				</div>
			</div>
		</div>
	
		<!--<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Copyright &copy;2015 Blanc Up Team</p>
					</div>
				</div>		
			</div>	
		</footer>-->
	</body> 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>