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
		<div class="content-wrapper">

			<!-- BEGIN #container -->
			<div id="container">
				<div id="content">

					<!-- BEGIN .light-block -->
					<div class="light-block">
						<h2 class="block-title">Produk Lain</h2>
						<div class="media-gallery row3">
						
							<?php foreach($all as $val) {?>
							<div class="item">
								<div class="item-header">
									<a href="<?php echo site_url('homepage/Detailproduk/'.$val->id);?>"><img src="<?php echo base_url();?>timthumb.php?src=<?php echo base_url()."assets/uploads/produk";?>/<?php echo $val->img;?>&w=300&h=300" alt="<?php echo $val->nama_barang;?>" /></a>
								</div>
								<div class="item-content">
									<h3><a href="<?php echo site_url('homepage/Detailproduk/'.$val->id);?>"><?php echo $val->nama_barang;?></a></h3>
									<p></p>
									<a href="<?php echo site_url('homepage/Detailproduk/'.$val->id);?>" class="read-more-link"><i class="fa fa-caret-left"></i> Selengkapnya</a>
								</div>
							</div>
							<?php } ?>

						</div>
					<!-- END .light-block -->
					</div>

				</div>
			<!-- END #container -->
			</div>

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