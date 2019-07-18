<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript">
		
	var super_ajaxurl = '<?php echo  admin_url( 'admin-ajax.php' ); ?>';
	var super_redirecturl = '<?php echo  home_url(); ?>';
	var super_loadingmessage = '<?php echo  __('Sending user info, please wait...'); ?>';
	<?php
	if( get_current_user_id() ){ 
		echo 'document.location.href = "'.site_url().'"';
	 }

	 ?>
	</script>
	
	<link rel="icon" type="image/png" href="<?php get_super_login_form_plugin_url() ?>images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php get_super_login_form_plugin_url() ?>css/main.css">
</head>

<body <?php body_class(); ?>>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" id="login" action="<?php echo wp_login_url('/login') ?>">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" id="username" name="log">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="password" name="pwd">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<input type="hidden" name="redirect_to" value="<?php echo site_url() ?>">
					        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
<!--  <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/select2/select2.min.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php get_super_login_form_plugin_url() ?>js/main.js"></script>
	<?php //echo wp_login_form(array('echo' => false)); ?>


</body>
</html>
