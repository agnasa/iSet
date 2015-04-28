<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="favicon.ico">

    <title>iPos - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/bootstrap-reset.css")?>" rel="stylesheet">
	<!--external css-->
    <link href="<?php echo base_url("assets/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/css/style.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/style-responsive.css")?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">
    <div class="container">
		<form class="form-signin" action="index.html">
			<h2 class="form-signin-heading">sign in now</h2>
			<div class="login-wrap">
				<!-- HTML
				<input type="text" class="form-control" placeholder="User ID" autofocus>
				<input type="password" class="form-control" placeholder="Password">
				<label class="checkbox">
					<input type="checkbox" value="remember-me"> Remember me
					<span class="pull-right">
						<a data-toggle="modal" href="#myModal"> Forgot Password?</a>
					</span>
				</label>
				<button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
				<p>or you can sign in via social network</p>
				<div class="login-social-link">
					<a href="index.html" class="facebook">
						<i class="icon-facebook"></i>
						Facebook
					</a>
					<a href="index.html" class="twitter">
						<i class="icon-twitter"></i>
						Twitter
					</a>
				</div>
				<div class="registration">
					Don't have an account yet?
					<a class="" href="registration.html">
						Create an account
					</a>
				</div>
				-->
				
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
						'class'=>'btn btn-lg btn-login btn-block',
					);
					
					echo form_input($email, $this->input->post('email'));
					echo form_password($password);
					echo form_submit($tombol,'login');
					echo form_close();
				?>
			</div>
		</form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
</body>
</html>
