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
		<div class="content-wrapper with-sidebar">

			<!-- BEGIN #container -->
			<div id="container" class="left">
				<div id="content">
					
					<?php foreach($detail as $val);?>
					<!-- BEGIN .light-block -->
					<div class="light-block">
						<h2 class="block-title"><?php echo $val->nama_barang;?></h2>
						<div class="single-article">

							<div class="article-header">
								<a href="post.html" class="header-image"><img src="<?php echo base_url();?>timthumb.php?src=<?php echo base_url()."assets/uploads/produk";?>/<?php echo $val->img;?>&w=628&h=270" alt="<?php echo $val->nama_barang;?>" /></a>

								<div class="item-split"></div>
							</div>

							<h4>Uraian</h4>

							<p><?php echo $val->deskripsi;?></p>
                            
                            
                            </p>

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
					<h3>Rincian</h3>
					<div class="donation-widget">
						<p>Anda tertarik untuk mencoba <i><?php echo $val->nama_barang;?></i></p>
						<div class="donation-stats">
                        
							<a href="<?php echo site_url('homepage/inginMemesan');?>" class="button" style="background-color: #519623;">Pesan!</a>
						</div>
                        
							<div class="info-message" style="background-color: #a24026;">
								<ul class="fa-ul">
									<?php if($val->status_harga == "show"){?>
										<li><i class="fa-li fa fa-angle-double-right"></i><?php echo 'Rp . '.number_format($val->harga);?></li> 
									<?php } else { ?>
										<li><i class="fa-li fa fa-angle-double-right"></i> ? </li> 
									<?php } ?>
                                </ul>
							</div>                        
                        
					</div>
				<!-- END .widget -->
				</div>
                
				
			<!-- END #sidebar -->
			</aside>

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