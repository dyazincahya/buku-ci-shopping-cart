		<!-- BEGIN #footer -->
		<footer id="footer">
			<div class="footer-top-decoration"></div>
			<!-- BEGIN .inner-wrapper -->
			<div class="inner-wrapper">

				<!-- BEGIN .footer-widgets -->
				<div class="footer-widgets">

					<!-- BEGIN .widget -->
					<div class="widget">
						<h3>Pendafataran</h3>
						<div class="d-articles">
							
							<div class="item">
								<div class="item-header">
									<p>Silakan Mendaftar Terlebih Dahulu Sebelum Memesan.</p>
								</div>
								<div class="item-content">
									<h4><a href="<?php echo site_url('homepage/mendaftar');?>" class="button">Daftar Sekarang</a></h4>
								</div>
							</div>

						</div>
					<!-- END .widget -->
					</div>

					<!-- BEGIN .widget -->
					<div class="widget">
						<h3>Service Via YM</h3>

							<ul class="fa-ul">
							  <?php foreach($ft as $val){ ?>
								<li><i class="fa-li fa fa-angle-double-right"></i><a href="ymsgr:sendIM?<?php echo $val->IDYM;?>"> <img src="http://opi.yahoo.com/online?u=<?php echo $val->IDYM;?>&amp;m=g&amp;<?php echo $val->theme;?>&amp;l=us"/></a></li>
							  <?php } ?>
							</ul>

					<!-- END .widget -->
					</div>

					<!-- BEGIN .widget -->
					<div class="widget">
						<h3>Dimana Rendang Uninam</h3>
						<div>
							<span class="icon-line">
								<i class="fa fa-map-marker"></i><span>Jl. Gudang Peluru Blok A No.17
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jakarta - Indonesia</span>
							</span>
							<span class="icon-line">
								<i class="fa fa-phone-square"></i><span>+6285716324846</span>
							</span>
                            
						</div>
					<!-- END .widget -->
					</div>

				<!-- END .footer-widgets -->
				</div>

			<!-- END .inner-wrapper -->
			</div>

			<div class="copyright-bottom">
				<!-- BEGIN .inner-wrapper -->
				<div class="inner-wrapper">
					<p>&copy; 2014 Rendang Uninam</p>
				<!-- END .inner-wrapper -->
				</div>
			</div>
		<!-- END #footer -->
		</footer>