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

					<!-- BEGIN .simple-block -->
					<div class="simple-block">

						<!-- BEGIN .main-slider -->
						<!-- <div class="main-slider"> -->
							
							<!-- BEGIN .omnomnom-slider -->
							<div class="omnomnom-slider">
								
								<!-- BEGIN .omnomnom-slider-inner -->
								<div class="omnomnom-slider-inner">

									<!-- BEGIN .om-slide-1 -->
									<?php foreach($keyslide as $kim){?>
									<div class="om-slide om-slide-2 isactive">
										<div class="om-layer om-layer-1" data-animation-in="fadeIn" data-animation-out="fadeOut" data-delay="0"  data-delayout="300" style="top: 0px; left: 0px; width: 100%;">
											<img src="<?php echo base_url();?>timthumb.php?src=<?php echo base_url()."assets/uploads/img";?>/<?php echo $kim->img;?>&w=1000&h=400" alt="<?php echo $kim->judul;?>" />
										</div>
										<div class="om-layer om-layer-2" data-animation-in="fadeIn" data-animation-out="fadeOut" data-delay="200" data-delayout="0" style="top: 190px; left: 80px;">
											<h3><a class="button" href="<?php echo $kim->url;?>"><?php echo $kim->judul;?></a></h3>
										</div>
										<div class="om-layer om-layer-3" data-animation-in="fadeIn" data-animation-out="fadeOut" data-delay="500" data-delayout="0" style="top: 260px; left: 80px;">
											<h6><?php echo $kim->tagline;?></h6>
										</div>
									<!-- END .om-slide-2 -->
									</div>
									<?php } ?>

								  <?php foreach($slide as $im){?>
									<div class="om-slide om-slide-2">
										<div class="om-layer om-layer-1" data-animation-in="fadeIn" data-animation-out="fadeOut" data-delay="0"  data-delayout="300" style="top: 0px; left: 0px; width: 100%;">
											<img src="<?php echo base_url();?>timthumb.php?src=<?php echo base_url()."assets/uploads/img";?>/<?php echo $im->img;?>&w=1000&h=400" alt="<?php echo $im->judul;?>" />
										</div>
										<div class="om-layer om-layer-2" data-animation-in="fadeIn" data-animation-out="fadeOut" data-delay="200" data-delayout="0" style="top: 190px; left: 80px;">
											<h3><a class="button" href="<?php echo $im->url;?>"><?php echo $im->judul;?></a></h3>
										</div>
										<div class="om-layer om-layer-3" data-animation-in="fadeIn" data-animation-out="fadeOut" data-delay="500" data-delayout="0" style="top: 260px; left: 80px;">
											<h6><?php echo $im->tagline;?></h6>
										</div>
									<!-- END .om-slide-2 -->
									</div>
								  <?php } ?>

								<!-- END .omnomnom-slider-inner -->
								</div>

								<div class="om-slider-pager">
									<a href="#" class="active">1</a>
									<a href="#">2</a>
									<input type="text" class="dial" data-min="0" data-max="100" data-displayInput="false" data-readOnly="true" data-fgColor="#5d4d43" data-height="17" data-width="17" data-thickness="0.24" data-bgColor="rgba(0,0,0,0.1)">
								</div>

							<!-- END .omnomnom-slider -->
							</div>

						<!-- END .main-slider -->
						<!-- </div> -->

					<!-- END .simple-block -->
					</div>

					<hr>





		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper with-sidebar">

			<!-- BEGIN #container -->
			<div id="container" class="left">
				<div id="content">

					<!-- BEGIN .light-block -->
					<div class="light-block">

						<div class="single-article">
							<h1>Rendang Uninam</h1>

							<p>Meskipun rendang berasal dari Sumatera Barat, namun kehadirannya selalu menghiasi menu sehari hari. Proses memasaknya yang rumit dan lama, membuat banyak bermunculan jasa memasak rendang yang siap santap. Salah satunya Rendang UniNam yang diolah secara tradisional asli Payakumbuh dan tahan lama bisa berbulan bulan dengan penyimpanan yang baik</p>
						
							<div class="item-split"></div>


							<blockquote>When the richness of West Sumatera Culture and Cuisine meets: <br>	<strong><i>We serve more than recipe and taste.</i></strong></blockquote>
							

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
					<h3>Support!</h3>
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
        
        




		<!-- BEGIN .content-wrapper -->
		<div class="content-wrapper">

			<!-- BEGIN #container -->
			<div id="container">
				<div id="content">

					<!-- BEGIN .light-block -->
					<div class="light-block">
						<h2 class="block-title">New Produk</h2>
						<div class="media-gallery row3">
						
							<?php foreach($new3 as $val) {?>
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