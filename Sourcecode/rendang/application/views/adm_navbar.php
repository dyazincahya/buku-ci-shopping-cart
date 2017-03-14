<?php if($pengguna->level == "admin"){ ?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('home');?>"><span class="glyphicon glyphicon-signal"></span> Admin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
				<a href="<?php echo site_url('home');?>">
					<span class="glyphicon glyphicon-home" title="Home"></span>
				</a>
			</li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify" title="List"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li>
					<a href="<?php echo site_url('admin/slide');?>">
						<span class="glyphicon glyphicon-star"></span> Slide
					</a>
				</li>
				<li>
				<a href="<?php echo site_url('admin/YM');?>">
					<span class="glyphicon glyphicon-star"></span> Y.Messenger
				</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Allbank');?>">
						<span class="glyphicon glyphicon-star"></span> Bank
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/produk');?>">
						<span class="glyphicon glyphicon-star"></span> Produk
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Allpesanan');?>">
						<span class="glyphicon glyphicon-list-alt"></span> Pesanan
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Allkonfirmasi');?>">
						<span class="glyphicon glyphicon-usd"></span> Pembayaran
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/report');?>">
						<span class="glyphicon glyphicon glyphicon-book"></span> Report
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Allkontakget');?>">
						<span class="glyphicon glyphicon-envelope"></span> Kontak
					</a>
				</li>
              </ul>
            </li>
			<li>
				<a href="<?php echo site_url('admin/Alluser');?>">
					<span class="glyphicon glyphicon-user" title="Manage User"></span>
				</a>
			</li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog" title="List"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li>
					<a href="<?php echo site_url('admin/set_identitas/edit/'.$pengguna->id_user);?>">
						Udah Info Profil
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/set_photo/edit/'.$pengguna->id_user);?>">
						Ubah Foto Profil
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/set_password/edit/'.$pengguna->id_user);?>">
						Ubah Password
					</a>
				</li>
              </ul>
            </li>
            <li>
				<a href="<?php echo site_url('login/logout');?>">
					<span class="glyphicon glyphicon-off" title="Logout"></span>
				</a>
			</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
			<li>
				<a href="<?php echo site_url('admin/slide');?>">
					<span class="glyphicon glyphicon-star"></span> Slide
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('admin/YM');?>">
					<span class="glyphicon glyphicon-star"></span> Y.Messenger
				</a>
			</li>
            <li>
				<a href="<?php echo site_url('admin/Allbank');?>">
					<span class="glyphicon glyphicon-star"></span> Bank
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('admin/produk');?>">
					<span class="glyphicon glyphicon-star"></span> Produk
				</a>
			</li>
            <li>
				<a href="<?php echo site_url('admin/Allpesanan');?>">
					<span class="glyphicon glyphicon-list-alt"></span> Pesanan
					<span class="badge"><?php $this->db->like('status', 'Baru');$this->db->from('pesanan');echo $this->db->count_all_results();?></span>
				</a>
			</li>
            <li>
				<a href="<?php echo site_url('admin/Allkonfirmasi');?>">
					<span class="glyphicon glyphicon-usd"></span> Pembayaran
					<span class="badge"><?php $this->db->like('status', 'Konfirmasi');$this->db->from('pesanan');echo $this->db->count_all_results();?></span>
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('admin/report');?>">
					<span class="glyphicon glyphicon glyphicon-book"></span> Report
				</a>
			</li>
            <li>
				<a href="<?php echo site_url('admin/Allkontakget');?>">
					<span class="glyphicon glyphicon-envelope"></span> Kontak
					<span class="badge"><?php $this->db->like('trash', 'N');$this->db->from('kontak');echo $this->db->count_all_results();?></span>
				</a>
			</li>
          </ul>
        </div>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
<?php } else { ?>
<!---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('home');?>"><span class="glyphicon glyphicon-send"></span> User</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
				<a href="<?php echo site_url('home');?>">
					<span class="glyphicon glyphicon-home" title="Home"></span>
				</a>
			</li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify" title="List"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li>
					<a href="<?php echo site_url('cart');?>">
						<span class="glyphicon glyphicon-play"></span> Store
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/pesananKu');?>">
						<span class="glyphicon glyphicon-list-alt"></span> Riwayat
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/listKonfirmasiPesanan');?>">
						<span class="glyphicon glyphicon-usd"></span> Konfirmasi
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/kontak');?>">
						<span class="glyphicon glyphicon-bullhorn"></span> Kontak
					</a>
				</li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog" title="List"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li>
					<a href="<?php echo site_url('admin/set_identitas/edit/'.$pengguna->id_user);?>">
						Udah Info Profil
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/set_photo/edit/'.$pengguna->id_user);?>">
						Ubah Foto Profil
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/set_password/edit/'.$pengguna->id_user);?>">
						Ubah Password
					</a>
				</li>
              </ul>
            </li>
            <li>
				<a href="<?php echo site_url('login/logout');?>">
					<span class="glyphicon glyphicon-off" title="Logout"></span>
				</a>
			</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
			<li>
				<a href="<?php echo site_url('cart');?>">
					<span class="glyphicon glyphicon-play"></span> Store
				</a>
			</li>
            <li>
				<a href="<?php echo site_url('admin/pesananKu');?>">
					<span class="glyphicon glyphicon-list-alt"></span> Riwayat
				</a>
			</li>
            <li>
				<a href="<?php echo site_url('admin/listKonfirmasiPesanan');?>">
					<span class="glyphicon glyphicon-usd"></span> Konfirmasi
				</a>
			</li>
            <li>
				<a href="<?php echo site_url('admin/kontak');?>">
					<span class="glyphicon glyphicon-bullhorn"></span> Kontak
				</a>
			</li>
          </ul>
        </div>
<?php } ?>