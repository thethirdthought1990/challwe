<html lang="en"><head>		<title>Boostbox - Locked</title>				<!-- BEGIN META -->		<meta charset="utf-8">				<meta name="viewport" content="width=device-width, initial-scale=1.0">		<meta name="keywords" content="your,keywords">		<meta name="description" content="Short explanation about this website">		<!-- END META -->		<!-- BEGIN STYLESHEETS -->				<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800" rel="stylesheet" type="text/css">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/bootstrap.css?1401441895">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/boostbox.css?1401441893">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/boostbox_responsive.css?1401441893">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/font-awesome.min.css?1401441895">			<!-- END STYLESHEETS -->				<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->		<!--[if lt IE 9]>	<script type="text/javascript" src="js_admin/modules/boostbox/libs/utils/html5shiv.js?1401441990"></script>	<script type="text/javascript" src="js_admin/modules/boostbox/libs/utils/respond.min.js?1401441990"></script>    <![endif]-->	<style type="text/css"></style></head>											<body class="body-dark">	<!-- START LOGIN BOX --><div class="box-type-login">	<div class="box text-center">		<div class="box-head">			<h2 class="text-light text-white">Chall<strong>We</strong> <i class="fa fa-rocket fa-fw"></i></h2>			<!--<h4 class="text-light text-inverse-alt">Ease your output with BoostBox</h4>-->		</div>		<div class="box-body box-centered style-inverse">			<h2 class="text-light">Sign in to your account</h2>			<br>			<form action="<?php echo base_url();?>index.php/user/loginadmin" accept-charset="utf-8" method="post">			<div class="form-group">				<div class="input-group">					<span class="input-group-addon"><i class="fa fa-user"></i></span>					<input type="text" class="form-control" name="username" placeholder="Username">				</div>			</div>			<div class="form-group">				<div class="input-group">					<span class="input-group-addon"><i class="fa fa-lock"></i></span>					<input type="password" class="form-control" name="password" placeholder="Password">				</div>			</div>			<div class="row">				<div class="col-xs-6 text-left">					<!--<div data-toggle="buttons">						<label class="btn checkbox-inline btn-checkbox-primary-inverse">							<input type="checkbox" value="default-inverse1"> Remember me						</label>					</div>-->				</div>				<div class="col-xs-6 text-right">					<button class="btn btn-primary" type="submit"><i class="fa fa-key"></i> Sign in</button>				</div>			</div>			</form>		</div><!--end .box-body -->		<div class="box-footer force-padding text-white">					</div>	</div></div><!-- END LOGIN BOX -->	<!-- BEGIN JAVASCRIPT -->				<script src="<?php echo base_url();?>js_admin/jquery-1.11.0.min.js"></script><script src="<?php echo base_url();?>js_admin/jquery-migrate-1.2.1.min.js"></script><script src="<?php echo base_url();?>js_admin/BootstrapFixed.js"></script><script src="<?php echo base_url();?>js_admin/bootstrap.min.js"></script><script src="<?php echo base_url();?>js_admin/spin.min.js"></script><script src="<?php echo base_url();?>js_admin/jquery.slimscroll.min.js"></script><script src="<?php echo base_url();?>js_admin/App.js"></script><script src="<?php echo base_url();?>js_admin/Demo.js"></script><script>	$(function () {		$("#btn-login").click(function(){			if($("#username").val()==""){$("#username_error").html("Please Enter Username");$("#username").focus();return false;}else{$("#username_error").html("");}			if($("#password").val()==""){$("#password_error").html("Please Enter Password");$("#password").focus();return false;}else{$("#password_error").html("");}			$("#login_form").submit();		});	});</script>	</body></html>