<!DOCTYPE html>
<html>
<head>
	<!-- Head Meta Data -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Uninam - Rendang Siap Saji (Indonesia Legendary Food)</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Head Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/theme-reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/font-awesome.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/dat-menu.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/animate.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/theme-style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/theme-shortcodes.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/theme-responsive.css" media="screen" />

	<!-- Slider styling -->
	<script>
	var _datMenuAnim = 400;					// Animation time of revieling and hiding menu (defaut = 400)
	var _datMenuEffect = "effect-1";		// Animation effect for now it is just 1 (defaut = "effect-1")
	var _datMenuSublist = true;				// Submenu dropdown animation (defaut = true)
	var _datMenuHeader = false;				// If fixed header is showing (defaut = true)
	var _datMenuHeaderTitle = "Rendang Uninam";	// Header Title
	var _datMenuSearch = false;				// If search is showing in header (defaut = true)
	</script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/theme/rendang');?>/css/dat-demo.css" media="screen" />

	<!-- Theme JavaScripts (Look at the bottom of page) -->
</head>
<body>

	<!-- BEGIN #wrapper -->
	<div id="wrapper">
		<?php $this->load->view('homepage/header.php');?>

		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper">

			<!-- BEGIN #container -->
			<div id="container">
				<div id="content">


		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper with-sidebar">

			<!-- BEGIN #container -->
			<div id="container" class="left">
				<div id="content">

					<!-- BEGIN .light-block -->
					<div class="light-block">
						<p class="block-title">Anda Harus Login Terlebih Dahulu Sebelum Memesan !</p>
						<div>
					
							<div class="comment-form">
								<?php echo form_open('login/login_form'); ?>
								<?php echo validation_errors(); ?>
								<p class="form-name">
									<label for="">Username:<span class="required">*</span></label>
									<input type="text" name="username" placeholder="Username" value="<?php echo set_value('username');?>">
								</p>
								<p class="form-name">
									<label for="">Password:<span class="required">*</span></label>
									<input type="password" name="password" placeholder="Password" value="<?php echo set_value('password');?>">
								</p>
								<p class="form-submit">
									<input type="submit" name="submit" class="button" value="Masuk" />
								</p>
							  </form>
							  <p class="form-submit">
									<a href="<?php echo site_url('homepage/mendaftar');?>">
										<input type="button" class="button" value="Daftar" />
									</a>
							  </p>
							</div>

						</div>
					<!-- END .light-block -->
					</div>

				</div>
			<!-- END #container -->
			</div>



			<!-- BEGIN #sidebar -->
			<aside id="sidebar" class="right">
				
				
				<!-- BEGIN .widget -->
				<div class="widget">
					<h3>Support</h3>
					<div class="donation-widget">
						<div class="donation-stats">
                        
						<div class="donation-stats">
							<h3>Telp: <span class="value">0857 1632 4846</span></h3>
						</div>
                                                
						<h4>Atau </h4>
							<a href="mailto:cahyadyazin@yahoo.com" class="button" style="background-color: #519623;">Kirim Email Pesanan</a>
						</div>
					</div>
				<!-- END .widget -->
				</div>
				
			<!-- END #sidebar -->
			</aside>

		<!-- END .content-wrapper -->
		</div>

						</div>
					</div>



				</div>
			<!-- END #container -->
			</div>

		<!-- END .content-wrapper -->
		</div>

		<?php $this->load->view('homepage/footer.php');?>

	<!-- END #wrapper -->
	</div>



	<!-- Theme Scripts -->
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/modernizr.custom.50878.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/iscroll-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/flowtype.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/jquery.knob.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/om-slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/theme/rendang');?>/jscript/dat-menu.js"></script>


</body>
</html>