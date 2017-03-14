<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/theme/bootstrap');?>/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/theme/bootstrap');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/theme/bootstrap');?>/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php $this->load->view('adm_navbar');?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		  <?php if($pengguna->level == "admin"){?>
		  <h1 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Dashboard</h1>
		  
		  <h3><a href="<?php echo site_url('admin/produk');?>"><span class="glyphicon glyphicon-bookmark"></span> Produk</a></h3>
			<div class="row">
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->from('barang');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-play"></span> Semua</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('stok', 'Tersedia');
						$this->db->from('barang');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-ok-circle"></span> Tersedia</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('stok', 'Habis');
						$this->db->from('barang');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-remove-circle"></span> Habis</h3>
				  </div>
				</div>
			  </div>
			</div>
		  
		  <h3><a href="<?php echo site_url('admin/Allpesanan');?>"><span class="glyphicon glyphicon-bookmark"></span> Pesanan</a></h3>
			<div class="row">
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('status', 'Baru');
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-star"></span> Baru</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('status', 'Konfirmasi');
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-usd"></span> Pembayaran</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('status', 'Dikirim');
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-refresh"></span> Diproses</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('status', 'Selesai');
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-ok-sign"></span> Selesai</h3>
				  </div>
				</div>
			  </div>
			</div>
			
			<h3><span class="glyphicon glyphicon-bookmark"></span> Other</h3>
			<div class="row">
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('level', 'user');
						$this->db->from('user');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><a href="<?php echo site_url('admin/Alluser');?>"><span class="glyphicon glyphicon-user"></span> User</a></h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->like('trash', 'N');
						$this->db->from('kontak');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><a href="<?php echo site_url('admin/Allkontakget');?>"><span class="glyphicon glyphicon-envelope"></span> Kontak</a></h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<h1 align="center"><span class="glyphicon glyphicon-book"></span></h1>
				  <div class="caption">
					<h3 align="center"><a href="<?php echo site_url('admin/Allkontakget');?>"> Report</a></h3>
				  </div>
				</div>
			  </div>
			</div>
		  <?php } else { ?>
		  
			<h3><span class="glyphicon glyphicon-bullhorn"></span></h3>
			<div class="row">
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h1 align="center"><a href="<?php echo site_url('cart');?>"><span class="glyphicon glyphicon-shopping-cart"></span></a></h1>
				  <div class="caption">
					<h3 align="center"><a href="<?php echo site_url('cart');?>">Go To Store</a></h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->where('status', 'Baru');
						$this->db->where('iduser', $pengguna->id_user);
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-remove-circle"></span> Belum Di Konfirmasi</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->where('status', 'Konfirmasi');
						$this->db->where('iduser', $pengguna->id_user);
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-ok-sign"></span> Sudah Di Konfirmasi</h3>
				  </div>
				</div>
			  </div>
			</div>
			
			<h3><a href="<?php echo site_url('admin/pesananKu');?>"><span class="glyphicon glyphicon-bookmark"></span> Pesanan</a></h3>
			<div class="row">
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->where('status', 'Baru');
						$this->db->where('iduser', $pengguna->id_user);
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-play"></span> Baru</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->where('status', 'Sedang Dikirim');
						$this->db->where('iduser', $pengguna->id_user);
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-refresh"></span> Diproses</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->where('status', 'Batal');
						$this->db->where('iduser', $pengguna->id_user);
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-remove-circle"></span> Batal</h3>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<h1 align="center"><?php 
						$this->db->where('status', 'Selesai');
						$this->db->where('iduser', $pengguna->id_user);
						$this->db->from('pesanan');
						echo $this->db->count_all_results();
					?></h1>
				  <div class="caption">
					<h3 align="center"><span class="glyphicon glyphicon-ok-circle"></span> Selesai</h3>
				  </div>
				</div>
			  </div>
			</div>
			
		  <?php } ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/docs.min.js"></script>
  </body>
</html>
